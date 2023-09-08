<?php
require("conexion.php");


    $idV = $_GET["id"];

    $query = "SELECT * FROM vehiculo WHERE idVehiculo = $idV";

    if ($result = $conexion->query($query)) {
		while ($row = $result->fetch_assoc()) {
        
        $idV = $row["idVehiculo"];
		$idM = $row["idMarca"];
        $pre = $row["precio"]; 
        $mot = $row["motor"];
        $idT = $row["idTraccion"];
        $Nom2 = $row["nombre"];
        $idTDV = $row["idTipoDeVehiculo"];
        $sta = $row["status"];

        echo "<h1>Editar Reporte</h1>";
        echo "<form action='guardar.php' method='post'>";
        echo "ID del vehiculo: <input type='text' name='idVehiculo' value='$idV' readonly ><br>";
        echo "ID de la marca: <input type='text' name='Marca' value='$idM' ><br>";
        echo "Precio: <input type='text' name='precio' value='$pre' ><br>";
        echo "motor: <input type='text' name='motor' value='$mot' ><br>";
        echo "ID de la traccion: <input type='text' name='idTraccion' value='$idT' ><br>";
        echo "nombre: <input type='text' name='nombre' value='$Nom2' ><br>";
        echo "tipo de vehiculo: <input type='text' name='tipoDeVehiculo' value='$idTDV' ><br>";
        echo "status: <input type='text' name='status' value='$sta' ><br>";
        echo '<p><input type="submit" value="Guardar"></p>';
        } 
    }

$conexion->close();

?>