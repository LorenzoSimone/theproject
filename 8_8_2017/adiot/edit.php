<?php

include("../init.php");

$id = $_POST['id'];
$name = $_POST['name'];
$pw = $_POST['psw'];
$ad = $_POST['adm'];
$sns = $_POST['sens'];
$am = $_POST['amb'];


if( mysqli_query($con,"UPDATE Dati_iot SET Username='$name', Password  = '$pw', Admin = $ad, Sensorista = $sns, Ambientista = $am where Id = $id;"))
	
echo "Dipendente:  " . $name."  modificato con successo";

	else
		echo "Error";

mysqli_close($con);

?>