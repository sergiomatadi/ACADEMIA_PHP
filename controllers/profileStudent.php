<?php
require_once (dirname(__FILE__).'/../administrator/db.php');

session_start();
$id = $_SESSION['id'];
$con =  Db::getConexion();
$query = "SELECT * FROM students WHERE id = '$id'";

if ($result = mysqli_query($con, $query)) {
  $row = $result->fetch_array(MYSQLI_ASSOC);
  require_once (dirname(__FILE__).'/../views/profileStudent.php');
}

if(isset($_POST['updateStudent'])){
    $email = $_POST['email'];
    $con = Db::getConexion();
    $stmt = $con->prepare("SELECT email FROM students WHERE email = ? AND id != ?");
    $stmt->bind_param('si', $email, $id);
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
  
      $query = "UPDATE students SET name = ?, username = ?, surname = ?, pass = ?, email = ?, telephone = ?, nif = ? WHERE id = ?";
      $stmt2 = $con->prepare($query);
      $stmt2->bind_param('sssssssi', $name, $username, $surname, $pass, $email, $telephone, $nif, $id);
      $stmt2->execute();
      $stmt2->close();
  
      ?>
        <script type="text/javascript">
            alert("Se ha guardado el estudiante correctamente");
        </script>
      <?php
      header("location:../views/homeView.php");
    }
}
?>