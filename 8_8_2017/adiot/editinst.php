<?php

include("../init.php");

$id = $_POST['id'];
$azienda = $_POST['azienda'];
$impianto = $_POST['impianto'];
$sens = $_POST['sensore'];
$qta = $_POST['qta'];

if( mysqli_query($con,"UPDATE Impianti SET Azienda='$azienda', Impianto  = '$impianto', CodiceS = '$sens', Quantità = $qta WHERE Id = $id;"))
	
echo "Configurazine modificata con successo";

	else
		echo "Error";

mysqli_close($con);

?>