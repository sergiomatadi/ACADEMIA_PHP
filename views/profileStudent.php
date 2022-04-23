<?php
  include("headerView.php");
?>

  <div class="container d-flex justify-content-center align-items-center h-100">
    <section class="login d-flex flex-column justify-content-center align-items-center rounded-3 bg-white w-50 P-5">
      <div class="d-flex w-100 justify-content-start pb-3">
        <a href="../views/homeView.php" class="text-dark">
          <button type="button" class="button-back btn btn-sm btn-outline-secondary">
            VOLVER
          </button>
        </a>
      </div>

      <h1 class="">EDITAR PERFIL</h1>

      <form class="w-75" action="../controllers/profileStudent.php" method="post">

        <div class="row mb-3">
          <label for="name" class="col-form-label">Name</label>
          <div class="col-12">
            <input value ="<?php echo $row['name'] ?>" type="text" class="form-control" aria-label="Name" name="name" id="name" required>
          </div>
        </div>
        <div class="row mb-3">
        <label for="surname" class="col-form-label">Surname</label>
        <div class="col-12">
          <input type="text" class="form-control" value="<?php echo $row['surname'] ?>" aria-label="Surname" name="surname" id="surname" required>
        </div>
      </div>

        <div class="row mb-3">
          <label for="username" class="col-form-label">Username</label>
          <div class="col-12">
            <input type="text" class="form-control" value="<?php echo $row['username'] ?>" aria-label="Username" name="username" id="Username" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="email" class="col-form-label">Email</label>
          <div class="col-12">
            <input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="email" id="inputEmail3" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="telephone" class="col-form-label">Telephone</label>
          <div class="col-12">
            <input type="text" class="form-control" value="<?php echo $row['telephone'] ?>" name="telephone" id="inputTelephone" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputNif" class="col-form-label">Nif</label>
          <div class="col-12">
            <input type="text" class="form-control" value="<?php echo $row['nif'] ?>" name="nif" id="inputNif" required>
          </div>
        </div>



        <div class="row mb-3">
          <label for="pass" class="col-form-label">Contraseña</label>
          <div class="col-12">
            <input type="password" class="form-control" value="<?php echo $row['pass'] ?>" name="pass" id="inputPassword3" required>
          </div>
        </div>
        <input type="submit" class="d-inline-flex justify-content-center btn btn-primary" name="updateStudent" id="updateStudent" value="Modificar">

      </form>
    </section>
  </div>
<?php include("footerView.php");?>