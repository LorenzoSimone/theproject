<?php

include("../init.php");

$name = $_POST['name'];
$pw = $_POST['psw'];
$ad = $_POST['adm'];
$sns = $_POST['sens'];
$am = $_POST['amb'];

if( mysqli_query($con,"INSERT INTO Dati_iot(Username,Password,Admin,Sensorista,Ambientista) VALUES('$name','$pw',$ad,$sns,$am);"))
	
echo "Dipendente:  " . $name."  inserito con successo";

	else
		echo "Error";

mysqli_close($con);

?>