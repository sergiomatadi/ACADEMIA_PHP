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
    <section
      class="login d-flex flex-column justify-content-center align-items-center rounded-3 bg-white w-50 h-50 pt-0">

      <div class="container d-flex justify-content-center">
        <div class="row">
          <div class="col">
            <h2>Iniciar sesión en CodersTeam</h2>
          </div>
        </div>
      </div>

      <form class="w-75" action="../controllers/loginController.php" method="post">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-form-label">Email</label>
          <div class="col-12">
            <input type="email" class="form-control" name="inputEmailLogin" id="inputEmailLogin" />
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-form-label">Contraseña</label>
          <div class="col-12">
            <input type="password" class="form-control" name="inputPasswordLogin" id="inputPasswordLogin" />
          </div>
        </div>
        <input type="submit" class="d-inline-flex justify-content-center btn btn-primary" name="loginButton" id="loginButton" value="Entrar">


      </form>
    </section>
  </div>






</body>
</html>
