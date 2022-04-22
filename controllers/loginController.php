<?php
require_once (dirname(__FILE__).'/../views/loginView.php');
require_once (dirname(__FILE__).'/../administrator/db.php');

if(isset($_POST['loginButton'])){
  $email = $_POST['inputEmailLogin'];
  $pass = $_POST['inputPasswordLogin'];

  $con = Db::getConexion();
  $stmt = $con->prepare("SELECT id FROM students WHERE email = ? AND pass = ?");
  
  $stmt->bind_param('ss', $email, $pass);
  $stmt->bind_result($id);
  $stmt->execute();

    if($stmt->fetch()){
      session_start();
      $_SESSION["id"] = $id;
      $_SESSION["is_admin"] = false;
      header("location:../views/homeView.php");
    }
  
  $admin_stmt = $con->prepare("SELECT id_user_admin FROM users_admin WHERE email = ? AND password = ?");
  
  $admin_stmt->bind_param('ss', $email, $pass);
  $admin_stmt->bind_result($id_user_admin);
  $admin_stmt->execute();
  
  if ($admin_stmt->fetch()){
    session_start();
    $_SESSION["id"] = $id_user_admin;
    $_SESSION["is_admin"] = true;
    header("location:../controllers/adminController.php");
  }
  
  ?>
    <script type="text/javascript">
        alert("Usuario o contraseña incorrecto");
    </script>
  <?php
}

?>
