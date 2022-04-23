<?php
  require_once (dirname(__FILE__).'/../administrator/db.php');

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "DELETE FROM students WHERE id = $id";
            $conexion = new Db();
            $result_student = mysqli_query($conexion->getConexion(), $query);
        header("location:modifyStudentController.php");
        }
?>

     <script type="text/javascript">
     alert("Profesor eliminado");
    </script>