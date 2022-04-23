<?php
  include("headerView.php");
  require_once (dirname(__FILE__).'/../administrator/db.php');
?>



<div class="container mt-5  ">
    <div class="d-flex w-100 justify-content-start pb-3">
        <a href="adminController.php" class="text-dark">
            <button type="button" class="button-back btn btn-sm btn-outline-secondary">
                VOLVER
            </button>
        </a>
    </div>
<div class="table-responsive">
<table class="table table-hover">
  <thead> CURSOS
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Empieza</th>
            <th>Acaba</th>
            <th>Activo</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM courses";
        $conexion = new Db();
        $result_teacher = mysqli_query($conexion->getConexion(), $query);

        while($row = mysqli_fetch_array($result_teacher)){ ?>

        <tr>
            <td><?php echo $row['id_course'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['date_start'] ?></td>
            <td><?php echo $row['date_end'] ?></td>
            <td><?php echo $row['active'] ?></td>
            <td> <a href="../controllers/updateCourseController.php?id=<?php echo $row['id_course']?>" class="btn btn-secondary" id="updateTask"><i class="icon ion-md-create"></a></td>
            <td> <a href="../controllers/deleteTaskCoursesController.php?id_course=<?php echo $row['id_course']?>" class="btn btn-secondary" name="deleteTask" id="deleteTask"><i class="icon ion-md-trash"></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>

</div>


<?php include("footerView.php");?>