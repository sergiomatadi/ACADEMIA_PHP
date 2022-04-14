<?php
  require '../config/config.php';

  if(isset($_POST['login'])) {
    $errMsg = '';

 
    $username = $_POST['username'];
    
    $password = MD5($_POST['password']);

    if($username == '')
      $errMsg = 'Ursename';
    if($clave == '')
      $errMsg = 'Password';

    if($errMsg == '') {
      try {
$stmt = $connect->prepare('SELECT email, id_user_admin, name, password, username FROM users_admin WHERE username = :username SELECT email, id_teacher, name, nif, surname, telephone FROM teachers WHERE email = :email');


        $stmt->execute(array(
          ':username' => $username
          
          
          ));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if($data == false){
          $errMsg = "User $username not found.";
        }
        else {
          if($password == $data['password']) {

            $_SESSION['email'] = $data['email'];
            $_SESSION['id_user_admin'] = $data['id_user_admin'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['username'] = $data['username'];
           
            
            
    if($_SESSION['cargo'] == 1){
          header('Location: ../controllers/adminCrontroller.php');
        }else if($_SESSION['cargo'] == 2){
          header('Location: ../controllers/studentController.php');
        }
            exit;
          }
          else
            $errMsg = 'Incorrect password.';
        }
      }
      catch(PDOException $e) {
        $errMsg = $e->getMessage();
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
    <section
      class="login d-flex flex-column justify-content-center align-items-center rounded-3 bg-white w-50 h-50 pt-0">

      <div class="container d-flex justify-content-center">
        <div class="row">
          <div class="col">
            <h2>Iniciar sesión en CodersTeam</h2>
          </div>
        </div>
      </div>

      <form class="w-75">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-form-label">Usuario</label>
          <div class="col-12">
            <input type="email" class="form-control" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>" id="inputEmailLogin" />
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-form-label">Contraseña</label>
          <div class="col-12">
            <input type="password" class="form-control" value="<?php if(isset($_POST['password'])) echo MD5($_POST['password']) ?>"id="inputPasswordLogin" />
          </div>
        </div>
        <a href="../controllers/homeController.php" class="text-decoration-none">
          <button type="button" class="d-inline-flex justify-content-center btn btn-primary" id="loginButton">
            ENTRAR
          </button>
        </a>
        <a href="../controllers/registerController.php" class="text-decoration-none">
          <button type="button" class="d-inline-flex justify-content-center btn btn-secondary" id="registerButton">
            REGISTRATE
          </button>
        </a>
      </form>
    </section>
  </div>

  
     
   


</body>
</html>