<?php
require_once (dirname(__FILE__).'/../views/loginView.php');
require_once (dirname(__FILE__).'/../administrator/db.php');

if(isset($_POST['loginButton'])){
  $email = $_POST['inputEmailLogin'];
  $pass = $_POST['inputPasswordLogin'];

  $con = Db::getConexion();
  $stmt = $con->prepare("SELECT id, email, pass FROM students WHERE email = ? AND pass = ?");
  
  $stmt->bind_param('ss', $email, $pass);
  $stmt->bind_result($id, $email, $pass);
  $stmt->execute();
    if($stmt->fetch()){
      session_start();
      $_SESSION["id"] = $id;
      header("location:../views/homeView.php");
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Usuario o contraseña incorrecto");
      </script>
      <?php
    }
}

?>
