<?php
//ESTA PAGINA NO HACE NADA SE PUEDE BORRAR
if(isset($_POST['loginButton'])){
  $email = $_POST['inputEmailLogin'];
  $contraseña = $_POST['inputPasswordLogin'];
  $con = new mysqli("localhost", "root", "LvV!aqwC^5Hwgw86lZ", "wordpress25");
  $stmt = $con->prepare("SELECT * FROM students WHERE email = ? AND pass = ?");
  //$stmt = $con->prepare("SELECT * FROM usuarios WHERE nombre = ? AND pass = ?");
  $stmt->bind_param('ss', $email, $contraseña);
  $stmt->execute();
    if($stmt->fetch()){
      require_once (dirname(__FILE__).'/../views/homeView.php');
      //header("location:mostrar_todos.php");
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
