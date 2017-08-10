<?php

include("../init.php");

$id = $_POST['id'];


if( mysqli_query($con,"DELETE FROM Dati_iot WHERE id = $id;"))
	
echo "Dipendente:  " . $name."  eliminato con successo";

	else
		echo "Error";

mysqli_close($con);

?>