<?php

require("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM vehiculo WHERE idVehiculo = $id";
echo $sql;
$resultado = mysqli_query($conexion, $sql);

echo "<script>window.location.href = 'index.php';</script>";

?>