<?php
$insertar_titulo = $_POST["titulo_evento"];
$insertar_fecha = $_POST["fecha"];
$insertar_id_estudiante = $_POST["id"];

$con = new mysqli("localhost", "root", "LvV!aqwC^5Hwgw86lZ", "wordpress25");
$query = "INSERT INTO eventos (titulo_evento, fecha, id_student) VALUES (?,?,?)";
$stmt = $con->prepare($query);                                                                                                                     //tabla_busqueda WHERE $filtro lIKE ?");
$stmt->bind_param('ssi', $insertar_titulo, $insertar_fecha, $insertar_id_estudiante);
$stmt->execute();
$stmt->close();
 ?>
