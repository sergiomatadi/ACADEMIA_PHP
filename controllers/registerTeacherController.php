<?php
require_once (dirname(__FILE__).'/../views/registerTeacherView.php');
require_once (dirname(__FILE__).'/../administrator/db.php');

if(isset($_POST['createTeacherButton'])){
  $email = $_POST['email'];
  $con = Db::getConexion();
  $stmt = $con->prepare("SELECT email FROM teachers WHERE email = ?");
  $stmt->bind_param('s', $email);
  $stmt->execute();
  if($stmt->fetch()){
    ?>
    <script type="text/javascript">
        alert("Este profesor ya existe");
    </script>
    <?php
    
  }else{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $telephone = $_POST['telephone'];
    $nif = $_POST['nif'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO teachers (name, surname, telephone, nif, email) VALUES (?,?,?,?,?)";
    $stmt = $con->prepare($query);                                                                                                                     //tabla_busqueda WHERE $filtro lIKE ?");
    $stmt->bind_param('sssss', $name, $surname, $telephone, $nif, $email);
    $stmt->execute();
    $stmt->close();
    ?>
    <script type="text/javascript">
        alert("Se ha guardado el profesor correctamente");
    </script>
    <?php
    header("location:adminController.php");
  }
}
?>
