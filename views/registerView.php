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
        <a href="../index.php" class="text-dark">
          <button type="button" class="button-back btn btn-sm btn-outline-secondary">
            VOLVER
          </button>
        </a>
      </div>

      <h1 class="">REGISTRARSE</h1>

      <form class="w-75" action="../controllers/registerController.php" method="post">

        <div class="row mb-3">
          <label for="name" class="col-form-label">Name</label>
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Pepito" aria-label="Name" name="name" id="name" required>
          </div>
        </div>
        <div class="row mb-3">
        <label for="surname" class="col-form-label">Surname</label>
        <div class="col-12">
          <input type="text" class="form-control" placeholder="apellido" aria-label="Surname" name="surname" id="surname" required>
        </div>
      </div>

        <div class="row mb-3">
          <label for="username" class="col-form-label">Username</label>
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Pepito" aria-label="Username" name="username" id="Username" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="email" class="col-form-label">Email</label>
          <div class="col-12">
            <input type="email" class="form-control" placeholder="Pepito@correo.com" name="email" id="inputEmail3" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="telephone" class="col-form-label">Telephone</label>
          <div class="col-12">
            <input type="text" class="form-control" placeholder="666666666" name="telephone" id="inputTelephone" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputNif" class="col-form-label">Nif</label>
          <div class="col-12">
            <input type="text" class="form-control" placeholder="12345678A" name="nif" id="inputNif" required>
          </div>
        </div>



        <div class="row mb-3">
          <label for="pass" class="col-form-label">Contrase??a</label>
          <div class="col-12">
            <input type="password" class="form-control" placeholder="********" name="pass" id="inputPassword3" required>
          </div>
        </div>
        <input type="submit" class="d-inline-flex justify-content-center btn btn-primary" name="loginButton" id="loginButton" value="Registrarme">

      </form>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="../js/storage.js"></script>
</body>
</html>
