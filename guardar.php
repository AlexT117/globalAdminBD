<?php
require ("conexion.php");

$idV = $_POST["idVehiculo"];
$idM = $_POST["Marca"]; 
$pre = $_POST["precio"];
$mot = $_POST["motor"];
$Tra = $_POST["idTraccion"];
$Nom2 = $_POST["nombre"];
$idTDV = $_POST["tipoDeVehiculo"];
$sta = $_POST["status"];

$query = "UPDATE vehiculo SET
    idMarca = $idM,
    precio = $pre,
    motor = '$mot',
    idTraccion = $Tra,
    nombre = '$Nom2',
    idTipoDeVehiculo = $idTDV,
    status = $sta
    WHERE idVehiculo = $idV";

echo $query;

$ejecution = mysqli_query($conexion, $query);

if ($ejecution) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar los datos" . mysqli_error($conexion);
}

mysqli_close($conexion);

echo "<script>location.href='../Global/index.php'; </script>"; 

?>