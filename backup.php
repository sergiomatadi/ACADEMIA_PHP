<?php

include_once("administrador/db.php");

$db=Db::getConexion();
print_r($db);

include_once("vista/login.php");
