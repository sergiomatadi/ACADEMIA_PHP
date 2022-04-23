<?php
require_once (dirname(__FILE__).'/../views/profileStudent.php');
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
      $telephone = $_POST['telephone'];
      $nif = $_POST['nif'];
      $surname = $_POST['surname'];
      
      $query = "UPDATE INTO students (name, username,surname, pass, email,telephone, nif ) VALUES (?,?,?,?,?,?,?)";
      $stmt = $con->prepare($query);                                                                                                                     //tabla_busqueda WHERE $filtro lIKE ?");
      $stmt->bind_param('sssssss', $name, $username,$surname, $pass, $email, $telephone, $nif);
      $stmt->execute();
      $stmt->close();
      ?>
      <script type="text/javascript">
        alert("Registro correcto, ya puedes iniciar sesion");
      </script>
  <?php
      header("location:loginController.php");
  }
}
?>
