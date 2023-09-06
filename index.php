<?php
    require("conexion.php");
    echo "Proyecto global <br>";
    
    $query = "SELECT ve.idVehiculo, ma.nombre as Marca, ve.precio, ve.motor, tr.nombre as traccion, ve.nombre, tdv.nombre as tipoDeVehiculo, ve.status
    FROM vehiculo as ve 
    JOIN marca as ma 
    ON ve.idMarca = ma.idMarca
    JOIN traccion as tr
    ON ve.idTraccion = tr.idTraccion
    JOIN tipodevehiculo as tdv
    ON ve.idTipoDeVehiculo = tdv.idTipoDeVehiculo 
    
    ORDER BY ve.idVehiculo";

    if ($result = $conexion->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$idV = $row["idVehiculo"];
			$idM = $row["nombre"];
            $pre = $row["precio"]; 
            $mot = $row["motor"];
            $idT = $row["idTraccion"];
            $Nom = $row["nombre"];
            $idTDV = $row["idTipoDeVehiculo"];
            $sta = $row["status"];
			echo $idV . " " . $idM . " " . $pre . " " . $mot . " " . 
            $idT . " " . $Nom . " " . $idTDV . " " . $sta . " " . "<br>";
		}

	/*freeresultset*/
	$result->free();
    }
?>