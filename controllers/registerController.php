<?php
require_once (dirname(__FILE__).'/../views/registerView.php');
require_once (dirname(__FILE__).'/../administrator/db.php');

if(isset($_POST['loginButton'])){
    $email = $_POST['email'];
    $con = Db::getConexion();
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
      $name = $_POST['name'];
      $username = $_POST['username'];
      $pass = $_POST['pass'];
      $email = $_POST['email'];
      
      $query = "INSERT INTO students (name, username, pass, email) VALUES (?,?,?,?)";
      $stmt = $con->prepare($query);                                                                                                                     //tabla_busqueda WHERE $filtro lIKE ?");
      $stmt->bind_param('ssss', $name, $username, $pass, $email);
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
