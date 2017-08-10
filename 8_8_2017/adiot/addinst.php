<?php

include("../init.php");

$azienda = $_POST['azienda'];
$impianto = $_POST['impianto'];
$sensore = $_POST['sensore'];
$qta = $_POST['qta'];

if( mysqli_query($con,"INSERT INTO Impianti(Azienda,Impianto,CodiceS,Quantità) VALUES('$azienda','$impianto','$sensore',$qta );"))
	
echo $qta . "  " . $sensore . "inseriti con successo";

	else
		echo "Error";

mysqli_close($con);

?>