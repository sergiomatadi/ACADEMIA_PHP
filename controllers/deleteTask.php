<?php
  require_once (dirname(__FILE__).'/../administrator/db.php');
 
        $query = "DELETE FROM teachers WHERE id_teacher = id_teacher";
        $conexion = new Db();
        $result_teacher = mysqli_query($conexion->getConexion(), $query);
        header("location:modifyteacherController.php");
?>

     <script type="text/javascript">
     alert("Profesor eliminado");
    </script>