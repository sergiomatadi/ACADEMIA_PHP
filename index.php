<?php

session_start();

unset($_SESSION["id"]);
unset($_SESSION["is_admin"]);
session_destroy();

require_once ("controllers/welcomeController.php");
?>
  