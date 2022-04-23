<?php
include("headerView.php");
?>
<div class="container d-flex justify-content-center align-items-center h-100">
  <section class="login d-flex flex-column justify-content-center align-items-center rounded-3 bg-white w-50 P-5">
    <div class="d-flex w-100 justify-content-start pb-3">
      <a href="adminController.php" class="text-dark">
        <button type="button" class="button-back btn btn-sm btn-outline-secondary">
          VOLVER
        </button>
      </a>
    </div>
    
    <h1 class="">Cursos</h1>
    
    <form class="w-75" action="../controllers/updateCourseController.php" method="post">
      
      <div class="row mb-3">
        <label for="name" class="col-form-label">Name</label>
        <div class="col-12">
          <input type="text" value="<?php echo ($row['name']) ?>" class="form-control" placeholder="nombre" aria-label="Name" name="name" id="name" required>
        </div>
      </div>
      
      <div class="row mb-3">
        <label for="course-desc" class="form-label">Descripción</label>
        <div class="col-12">
          <textarea class="form-control" id="course-desc" name="description" rows="3"><?php echo ($row['description']) ?></textarea>
        </div>
      </div>
      
      <div class="row mb-3">
        <label for="date-start" class="form-label">Fecha inicio</label>
        <div class="col-6">
          <input type="date" value="<?php echo $row['date_start'] ?>" class="form-control" name="date_start" min="2022-04-01" max="2023-04-30" />
        </div>
      </div>
      
      <div class="row mb-3">
        <label for="date-start" class="form-label">Fecha fin</label>
        <div class="col-6">
          <input type="date" value="<?php echo $row['date_end'] ?>" class="form-control" name="date_end" min="2022-04-01" max="2023-04-30" />
        </div>
      </div>
      
      <div class="form-check">
        <input class="form-check-input"
               <?php if($row['active']=='1')  {
                 echo 'checked="checked"';
                } ?>
               name="active" type="checkbox"  id="course-active">
        <label class="form-check-label" for="course-active">
          Activo
        </label>
      </div>
        <input type="hidden" name="id_course" value="<?php echo $id_course ?>">
      <input type="submit" class="d-inline-flex justify-content-center btn btn-primary" name="updateCourseButton" id="updateCourseButton" value="Guardar">
    
    </form>
  </section>
</div>
<?php include("footerView.php");?>