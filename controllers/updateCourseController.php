<?php
require_once (dirname(__FILE__).'/../administrator/db.php');


if(isset($_GET['id'])){
  $id_course = $_GET['id'];
  $con = Db::getConexion();
  $stmt = $con->prepare("SELECT * FROM courses WHERE id_course = ?");
  $stmt->bind_param('i', $id_course);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_array(MYSQLI_ASSOC);
  if(isset($row['name'])) {
    require_once (dirname(__FILE__).'/../views/updateCourseView.php');
  }
  
}

if(isset($_POST['updateCourseButton'])){
  
  $id_course = $_POST['id_course'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $date_start = $_POST['date_start'];
  $date_end = $_POST['date_end'];
  $active_field = $_POST['active'];
  
  if ($active_field != "on") {
    $active = 0;
  } else {
    $active = 1;
  }
  
  $con = Db::getConexion();
  $stmt = $con->prepare("SELECT name FROM courses WHERE name = ? AND id_course != ?");
  $stmt->bind_param('si', $name, $id_course);
  $stmt->execute();
  if($stmt->fetch()){
    ?>
    <script type="text/javascript">
        alert("Este curso ya existe");
    </script>
    <?php
    
  }else{
    $query = "UPDATE courses SET name = ?, description = ?, date_start = ?, date_end = ?, active = ? WHERE id_course = ?";
    $stmt2 = $con->prepare($query);
    $stmt2->bind_param('sssssi', $name, $description, $date_start, $date_end, $active, $id_course);
    $stmt2->execute();
    $stmt2->close();
    ?>
    <script type="text/javascript">
        alert("Se ha guardado el curso correctamente");
    </script>
    <?php
    header("location:adminController.php");
  }
}
?>
