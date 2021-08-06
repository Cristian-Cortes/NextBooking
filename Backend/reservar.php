<?php 
include 'conexion.php';
$nombre=$_POST['Name'];
$apell_pater=$_POST['Apell_paterno'];
$apell_mater=$_POST['Apell_materno'];
$telefono=$_POST['telefono'];
$tipo=$_POST['habitaciones'];
$fech_entra=$_POST['fech_entrada'];
$fecha_sali=$_POST['fech_salida'];

$consulta = "INSERT INTO `reservaciones`(`nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `tipo_habitacion`, `fecha_entrada`, `fecha_salida`) VALUES('$nombre', '$apell_pater', '$apell_mater', '$telefono', '$tipo', '$fech_entra', '$fecha_sali')";
mysqli_query($con,$consulta) or die (mysqli_error());
mysqli_close($con);

header('Location: ../Frontend/Habitacion_SOL.php#pago');

?>