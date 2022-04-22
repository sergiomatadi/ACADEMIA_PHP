<?php
  require_once (dirname(__FILE__).'/../administrator/db.php');

        if(isset($_GET['id_course'])){
            $id_course = $_GET['id_course'];
            $query = "DELETE FROM courses WHERE id_course = $id_course";
            $conexion = new Db();
            $result_course = mysqli_query($conexion->getConexion(), $query);
        header("location:modifyCoursesController.php");
        }
?>

     <script type="text/javascript">
     alert("Profesor eliminado");
    </script>