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

    echo "<a href='reporte.php'> Reporte <a/> <br>";

    echo "<a href='respaldoGeneral.php'> Respaldar BD </a> <br>";

    echo ' INSERTAR NUEVO VEHICULO 
    <form action="actualiza.php" method = "post">
    <p>id: <input type="text" name="Id">
    idmarca: <input type="text" name="idmarca">
    precio: <input type="text" name="precio"></p>
    
    <p>motor: <input type="text" name="motor">
    idtraccion: <input type="text" name="idtraccion">
    nombre: <input type="text" name="nombre"></p>
    
    <p>idtipoDeVehiculo: <input type="text" name="idTipoDeVehiculo">
    status: <input type="text" name="status">
    <p><input type="submit" value="Guardar"></p>
    </form>';

    

    if ($result = $conexion->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$idV = $row["idVehiculo"];
			$idM = $row["Marca"];
            $pre = $row["precio"]; 
            $mot = $row["motor"];
            $idT = $row["idTraccion"];
            $Tra = $row["traccion"];
            $Nom2 = $row["nombre"];
            $idTDV = $row["tipoDeVehiculo"];
            $sta = $row["status"];
			echo $idV. " " . $idM  . " " . $pre . " " . $mot . " " . $Tra . " " . $Nom2 . " " . $idTDV . " " . $sta . 
            "<a href='borrar.php?id=".$idV."'> eliminar</a> ";
           
            echo "<a href='editar.php?id=$idV'>";
            echo "editar";
            echo "</a> <br>";
		}

	/*freeresultset*/
	$result->free();
    }
?>