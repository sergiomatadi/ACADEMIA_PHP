<?php
require_once (dirname(__FILE__).'/../views/loginView.php');
if(isset($_POST['loginButton'])){
  $email = $_POST['inputEmailLogin'];
  $contraseña = $_POST['inputPasswordLogin'];

  $con = new mysqli("localhost", "root", "", "wordpress25");
  $stmt = $con->prepare("SELECT id, email, pass FROM students WHERE email = ? AND pass = ?");
  //$stmt = $con->prepare("SELECT * FROM usuarios WHERE nombre = ? AND pass = ?");
  $stmt->bind_param('ss', $email, $contraseña);
  $stmt->bind_result($id, $email, $contraseña);
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
        alert("Usuario o contraseña no es correcto");
      </script>
      <?php
    //echo "<p style='text-align:center'>Usuario o contraseña no es correcto</p>";
    }
}

?>
