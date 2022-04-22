<?php
 require_once (dirname(__FILE__).'/../administrator/db.php');
include ("db.php");
 if (isset($_GET['id_teacher'])) {
     $id_teacher = $_GET['id_teacher'];
     $query = "DELETE FROM teacher WHERE id_teacher = $id_teacher";
     $result = mysqli_query($con, $query);
     if(!result){
         die("Query Failed");
     }
     header("location:adminController.php");
 }


?>
     <script type="text/javascript">
     alert("Profesor eliminado");
    </script>