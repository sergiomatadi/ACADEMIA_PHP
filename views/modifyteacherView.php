<?php
  include("headerView.php");
  require_once (dirname(__FILE__).'/../administrator/db.php');
?>

<div class="container mt-5  ">
<div class="table-responsive">
<table class="table table-hover">
  <thead> PROFESORES
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Móvil</th>
            <th>Nif</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM teachers";
        $conexion = new Db();
        $result_teacher = mysqli_query($conexion->getConexion(), $query);

        while($row = mysqli_fetch_array($result_teacher)){ ?>

        <tr>
            <td><?php echo $row['id_teacher'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['surname'] ?></td>
            <td><?php echo $row['telephone'] ?></td>
            <td><?php echo $row['nif'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td> <a href="" class="btn btn-secondary"><i class="icon ion-md-create"></a></td>
            <td> <a href="../controllers/deleteTask.php?id_teacher=<?php echo $row['id_teacher']?>" class="btn btn-secondary" name="deleteTask" id="deleteTask"><i class="icon ion-md-trash"></a></td>
            
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>

</div>


<?php include("footerView.php");?>