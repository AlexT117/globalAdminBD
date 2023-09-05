<?php
    require("conexion.php");
    echo "Proyecto global <br>";
    
    $query = "SELECT * FROM vehiculo";

    if ($result = $conexion->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$idV = $row["idVehiculo"];
			$idM = $row["idMarca"];
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