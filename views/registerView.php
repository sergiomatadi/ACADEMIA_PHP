<?php
  require '../config/config.php';

  if(isset($_POST['register'])) {
    $errMsg = '';
    

    $nombre = $_POST['name'];
    $usuario = $_POST['user'];
    $correo = $_POST['email'];
    
    $clave = MD5($_POST['paswword']);
   

    if($name == '')
      $errMsg = 'Name';
    if($user == '')
      $errMsg = 'user';
   if($email == '')
      $errMsg = 'Email';
    if($password  == '')
      $errMsg = 'Password';


    if($errMsg == ''){
      try {
        $stmt = $connect->prepare('INSERT INTO users_admin (email, id_user_admin, name, password, username) VALUES (:nombre, :usuario, :correo,:clave, :cargo)');
        $stmt->execute(array(
          ':email' => $email,
          ':id_user_name' => $id_user_admin,
          ':name' => $name,
          ':password' => $password,
          ':username' => $username
         
          ));
        header('Location: registerView.php?action=joined');
        exit;
      }
      catch(PDOException $e) {
        echo $e->getMessage();
      }
    }
  }

  
?>
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
        <a href="../controllers/loginController.php" class="text-dark">
          <button type="button" class="button-back btn btn-sm btn-outline-secondary">
            VOLVER
          </button>
        </a>
      </div>

      <h1 class="">REGISTRARSE</h1>

      <form class="w-75">
        <div class="row mb-3">
          <label for="Username" class="col-form-label">Username</label>
          <div class="col-12">
            <input type="text" class="form-control" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" placeholder="Pepito" aria-label="Username" id="Username" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputEmail3" class="col-form-label">Email</label>
          <div class="col-12">
            <input type="email" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"placeholder="Pepito@correo.com" id="inputEmail3" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-form-label">Contraseña</label>
          <div class="col-12">
            <input type="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="form-control" placeholder="********" id="inputPassword3" required>
          </div>
        </div>
        <a href="../controllers/homeController.php" class="text-decoration-none">
            <button type="button" class="btn btn-primary" id="botonregistro">
            REGISTRAME
            </button>
        </a>

      </form>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="../js/storage.js"></script>
</body>
</html>