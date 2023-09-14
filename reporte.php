<?php
    require("fpdf/fpdf.php");
    require("conexion.php");
    date_default_timezone_set('America/Mexico_City');

    $query = "SELECT ve.idVehiculo, ma.nombre as Marca, ve.precio, ve.motor, tr.nombre as traccion, ve.nombre, tdv.nombre as tipoDeVehiculo, ve.status
    FROM vehiculo as ve 
    JOIN marca as ma 
    ON ve.idMarca = ma.idMarca 
    JOIN traccion as tr
    ON ve.idTraccion = tr.idTraccion
    JOIN tipodevehiculo as tdv
    ON ve.idTipoDeVehiculo = tdv.idTipoDeVehiculo 
    ORDER BY ve.idVehiculo";

    $pdf = new FPDF();
    $pdf->AddPage("L");
    $pdf->SetFont('Arial','B',14);
    $pdf->SetXY(130,10);
    $pdf->Cell(50,15,utf8_decode('Reporte de agencia'),0);
    $pdf->SetFont('Arial','',14);
    $pdf->SetXY(115,20);
    $pdf->Cell(50,15,utf8_decode('Generado por: Alexis Téllez Romero'),0);
    $pdf->SetFont('Arial','',12);
    $pdf->SetXY(100,30);
    $pdf->Cell(50,15,utf8_decode('En la siguiente tabla se observaran las compras de la agencia'),0);

    $pdf->Image('img/logo.png', 7, 7, 50);

    $pdf->Image('img/logo1.png', 240, 1, 50);

    $fechaActual = date("d-m-Y");

    $pdf->SetXY(240,40);
    $pdf->Cell (50,20,"La fecha es: $fechaActual",0,1);

    $pdf->Cell (15,10,"No",'LR',0);
    $pdf->Cell (40,10,"Marca",'LR',0);
    $pdf->Cell (40,10,"Precio",'LR',0);
    $pdf->Cell (50,10,"Motor",'LR',0);
    $pdf->Cell (30,10,"Traccion",'LR',0);
    $pdf->Cell (45,10,"Modelo",'LR',0);
    $pdf->Cell (40,10,"Tipo",'LR',1);

    //Datos
    $result = $conexion->query($query);

    foreach($result as $row)
    {
        $pdf->Cell (15,10,$row['idVehiculo'],'LR',0);
        $pdf->Cell (40,10,$row['Marca'],'LR',0);
        $pdf->Cell (40,10,$row['precio'],'LR',0);
        $pdf->Cell (50,10,$row['motor'],'LR',0);
        $pdf->Cell (30,10,$row['traccion'],'LR',0);
        $pdf->Cell (45,10,$row['nombre'],'LR',0);
        $pdf->Cell (40,10,$row['tipoDeVehiculo'],'LR',1);
    }


    


    $pdf->Output();?>

    /*$pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'), 1,);
    $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'), 1, 2);
    $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'), 1, 1);
    $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'), 1, 1);
    $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'), 1, );
    $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'), 1, 2);
    $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'), 1, );*/