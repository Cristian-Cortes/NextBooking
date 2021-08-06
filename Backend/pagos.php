<?php 
include 'conexion.php';
$nombre=$_POST['name'];
$apell_pater=$_POST['number_card'];
$apell_mater=$_POST['orde_id'];
$telefono=$_POST['date_created'];
$fech_entra=$_POST['email'];
$fecha_sali=$_POST['fech_salida'];

$consulta = "INSERT INTO `reservaciones`(`nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `tipo_habitacion`, `fecha_entrada`, `fecha_salida`) VALUES('$nombre', '$apell_pater', '$apell_mater', '$telefono', '$tipo', '$fech_entra', '$fecha_sali')";
mysqli_query($con,$consulta) or die (mysqli_error());
mysqli_close($con);

header('Location: ../Frontend/Habitacion_SOL.php#pago');

?>