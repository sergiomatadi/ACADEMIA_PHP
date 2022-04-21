<?php
require_once (dirname(__FILE__).'/../views/registerView.php');
if(isset($_POST['loginButton'])){
    $email = $_POST['email'];
    $con = new mysqli("localhost", "root", "", "wordpress25");
    $stmt = $con->prepare("SELECT email FROM students WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    if($stmt->fetch()){
        ?>
        <script type="text/javascript">
          alert("Este usuario ya existe");
        </script>
        <?php

    }else{
      $nombre = $_POST['name'];
      $username = $_POST['username'];
      $pass = $_POST['pass'];
      $email = $_POST['email'];
      $con = new mysqli("localhost", "root", "", "wordpress25");
      $query = "INSERT INTO students (name, username, pass, email) VALUES (?,?,?,?)";
      $stmt = $con->prepare($query);                                                                                                                     //tabla_busqueda WHERE $filtro lIKE ?");
      $stmt->bind_param('ssss', $nombre, $username, $pass, $email);
      $stmt->execute();
      $stmt->close();
      ?>
      <script type="text/javascript">
        alert("Registro correcto, ya puedes iniciar sesion");
      </script>
  <?php
  }
}
?>
