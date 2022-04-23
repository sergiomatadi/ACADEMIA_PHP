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
  <thead> ESTUDIANTES
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Nif</th>
            <th>Fecha de registro</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM students";
        $conexion = new Db();
        $result_teacher = mysqli_query($conexion->getConexion(), $query);

        while($row = mysqli_fetch_array($result_teacher)){ ?>

        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['surname'] ?></td>
            <td><?php echo $row['telephone'] ?></td>
            <td><?php echo $row['nif'] ?></td>
            <td><?php echo $row['date_registered'] ?></td>
            <td> <a href="" class="btn btn-secondary"><i class="icon ion-md-create"></a></td>
            <td> <a href="../controllers/deleteTaskStudentController.php?id=<?php echo $row['id']?>" class="btn btn-secondary" name="deleteTask" id="deleteTask"><i class="icon ion-md-trash"></a></td>
        </tr>

        <?php } ?>
    </tbody>
</table>
</div>

</div>


<?php include("footerView.php");?>