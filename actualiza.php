<?php
$id = $_POST["Id"];
echo $id;
$idm = $_POST["idmarca"];
echo $idm;
$pr = $_POST["precio"];
echo $pr;
$mo = $_POST["motor"];
echo $mo;
$idt = $_POST["idtraccion"];
echo $idt;
$no = $_POST["nombre"];
echo $no;
$idtv = $_POST["idTipoDeVehiculo"];
echo $idt;
$st = $_POST["status"];
echo $st;

$conex = mysqli_connect ("localhost","root","12345678","agencia");

$query =  "INSERT INTO vehiculo VALUES ($id,$idm,$pr,'$mo',$idt,'$no',$idtv,$st);";
echo $query;
$ejecutar = mysqli_query($conex,$query);

echo "<script>window.location.href = 'index.php';</script>";

?>
