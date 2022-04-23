<?php
  include("headerView.php");
 
?>



<div class="container mt-5 d-flex ">
    <div class="col-4 ">
        <div class="card" style="width: 18rem;">
              <img src="../img/asignaturas.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cursos</h5>
                <p class="card-text">Gestionar cursos</p>
                <a href="../controllers/registerCourseController.php" class="btn btn-primary">Crear</a>
                <a href="modifyCoursesController.php" class="btn btn-primary">Modificar</a>
            </div>
        </div>
     </div>
     <div class="col-4 ">
        <div class="card" style="width: 18rem;">
              <img src="../img/asignaturas.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Estudiantes</h5>
                <p class="card-text">Gestionar asignaturas</p>
                <a href="#" class="btn btn-primary">Crear</a>
                <a href="../controllers/modifyStudentController.php" class="btn btn-primary">Modificar</a>
            </div>
        </div>
     </div>
     <div class="col-4 ">
        <div class="card" style="width: 18rem;">
              <img src="../img/asignaturas.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Profesores</h5>
                <p class="card-text">Gestionar Profesores</p>
                <a href="../controllers/registerTeacherController.php" class="btn btn-primary">Crear</a>
                <a href="../controllers/modifyteacherController.php" class="btn btn-primary">Modificar</a>
                
            </div>
        </div>
     </div>

</div>



<?php include("footerView.php");?>
