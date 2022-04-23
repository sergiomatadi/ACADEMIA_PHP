<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academia</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../css/style.css"/>
</head>

<body class="m-0 vh-100 row justify-content-center align align-items-center">
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
    
    <form class="w-75" action="../controllers/registerCourseController.php" method="post">
      
      <div class="row mb-3">
        <label for="name" class="col-form-label">Name</label>
        <div class="col-12">
          <input type="text" class="form-control" placeholder="nombre" aria-label="Name" name="name" id="name" required>
        </div>
      </div>
  
      <div class="row mb-3">
        <label for="course-desc" class="form-label">Descripción</label>
        <div class="col-12">
          <textarea class="form-control" id="course-desc" name="description" rows="3"></textarea>
        </div>
      </div>
  
      <div class="row mb-3">
        <label for="date-start" class="form-label">Fecha inicio</label>
        <div class="col-6">
          <input type="date" class="form-control" name="date_start" min="2022-04-01" max="2023-04-30" />
        </div>
      </div>
  
      <div class="row mb-3">
        <label for="date-start" class="form-label">Fecha fin</label>
        <div class="col-6">
          <input type="date" class="form-control" name="date_end" min="2022-04-01" max="2023-04-30" />
        </div>
      </div>
  
      <div class="form-check">
        <input class="form-check-input" name="active" type="checkbox" value="1" id="course-active">
        <label class="form-check-label" for="course-active">
          Activo
        </label>
      </div>
      
      <input type="submit" class="d-inline-flex justify-content-center btn btn-primary" name="createCourseButton" id="createCourseButton" value="Guardar">
    
    </form>
  </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="../js/storage.js"></script>
</body>
</html>
