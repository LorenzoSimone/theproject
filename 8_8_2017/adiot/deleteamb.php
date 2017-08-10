<?php

include("../init.php");

$id = $_POST['id'];


if( mysqli_query($con,"DELETE FROM Ambienti WHERE id = $id;"))
	
echo "Ambienti:  " . $cod."  eliminato con successo";

	else
		echo "Error";

mysqli_close($con);

?>