<?php

$conexion = mysqli_connect("localhost","root","","academia");

$query = $conexion->query("SELECT * FROM students");

echo '<option value="0">Seleccione un alumno</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id']. '">' . $row['name'] . '' . $row['surname'] . '</option>' . "\n";
}
