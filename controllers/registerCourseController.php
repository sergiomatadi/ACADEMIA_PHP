<?php
require_once (dirname(__FILE__).'/../views/registerCourseView.php');
require_once (dirname(__FILE__).'/../administrator/db.php');

if(isset($_POST['createCourseButton'])){
  $name = $_POST['name'];
  $description = $_POST['description'];
  $date_start = $_POST['date_start'];
  $date_end = $_POST['date_end'];
  $active_field = $_POST['active'];
  if ($active_field != "1") {
      $active = 0;
  } else {
      $active = 1;
  }
  
  
  
  
  
  $con = Db::getConexion();
  $stmt = $con->prepare("SELECT name FROM courses WHERE name = ?");
  $stmt->bind_param('s', $name);
  $stmt->execute();
  if($stmt->fetch()){
    ?>
    <script type="text/javascript">
        alert("Este curso ya existe");
    </script>
    <?php
    
  }else{
    
    $query = "INSERT INTO courses (name, description, date_start, date_end, active) VALUES (?,?,?,?,?)";
    $stmt = $con->prepare($query);                                                                                                                     //tabla_busqueda WHERE $filtro lIKE ?");
    $stmt->bind_param('ssssi', $name, $description, $date_start, $date_end, $active);
    $stmt->execute();
    $stmt->close();
    ?>
    <script type="text/javascript">
        alert("Se ha guardado el curso correctamente");
    </script>
    <?php
    header("location:adminController.php");
  }
}
?>
