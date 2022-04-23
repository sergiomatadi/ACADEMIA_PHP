<?php
  require_once (dirname(__FILE__).'/../administrator/db.php');

        if(isset($_GET['id_course'])){
            $id_course = $_GET['id_course'];
            $query = "DELETE FROM courses WHERE id_course = $id_course";
            $con = Db::getConexion();
            $result_course = mysqli_query($con, $query);
        header("location:modifyCoursesController.php");
        }
?>

     <script type="text/javascript">
     alert("Curso eliminado");
    </script>