<?php

include("../init.php");

$cod = $_POST['cod'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$anno = $_POST['anno'];


if( mysqli_query($con,"INSERT INTO Sensori(CodiceS,Tipo,Marca,Anno) VALUES('$cod','$tipo','$marca',$anno );"))
	
echo "Sensore:  " . $cod."  inserito con successo";

	else
		echo "Error";

mysqli_close($con);

?>