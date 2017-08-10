<?php

include("../init.php");

$id = $_POST['id'];
$cod = $_POST['cod'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$anno = $_POST['anno'];


if( mysqli_query($con,"UPDATE Sensori SET CodiceS='$cod', Tipo  = '$tipo', Marca = '$marca', Anno = $anno where Id = $id;"))
	
echo "Sensore:  " . $cod."  modificato con successo";

	else
		echo "Error";

mysqli_close($con);

?>