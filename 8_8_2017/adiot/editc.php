<?php

include("../init.php");

$id = $_POST['id'];
$name = $_POST['name'];
$pw = $_POST['psw'];
$azienda = $_POST['azienda'];
$mail = $_POST['mail'];
$flag = $_POST['flag'];

if( mysqli_query($con,"UPDATE Dati_clienti SET Username='$name', Password  = '$pw', Azienda = '$azienda', Mail = '$mail', Proprietario = $flag where Id = $id;"))
	
echo "Cliente:  " . $name."  modificato con successo";

	else
		echo "Error";

mysqli_close($con);

?>