<?php

include("../init.php");

$name = $_POST['name'];
$pw = $_POST['psw'];
$azienda = $_POST['azienda'];
$mail = $_POST['mail'];
$flag = $_POST['flag'];

if( mysqli_query($con,"INSERT INTO Dati_clienti(Username,Password,Azienda,Mail,Proprietario) VALUES('$name','$pw','$azienda','$mail',$flag);"))
	
echo "Cliente:  " . $name."  inserito con successo";

	else
		echo "Error";

mysqli_close($con);

?>