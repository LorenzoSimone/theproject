<?php

include("../init.php");

$azienda = $_POST['azienda'];
$impianto = $_POST['imp'];
$ambiente = $_POST['amb'];
$immagine = $_POST['immagine'];

if( mysqli_query($con,"INSERT INTO Ambienti(Azienda,Impianto,Ambiente,Immagine) VALUES('$azienda','$impianto','$ambiente','$immagine' );"))
	
echo "Ambiente:  " . $ambiente."  inserito con successo";

	else
		echo "Error";

mysqli_close($con);

?>