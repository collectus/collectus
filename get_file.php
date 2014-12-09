<?php
// Make sure an ID was passed
if(isset($_GET['id']) AND isset($_GET['client'])) {
// Get the ID
	$id = intval($_GET['id']);
	$id_client = intval($_GET['client']);
 
	// Make sure the ID is in fact a valid ID
	if($id <= 0 OR $id_client <= 0){
		die('The ID is invalid!');
	}
	else {
		// Connect to the database
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=test', 'admin', '');
		}
		catch(Exception $e)
		{
				echo 'Erreur : '.$e->getMessage().'<br />';
				echo 'N° : '.$e->getCode();
				die();
		}
 
		// Fetch the file information
		$result = $bdd->query("SELECT `mime`, `name`, `size`, `data` FROM `file` WHERE `id` = {$id} AND `ID_CLIENT` = {$id_client}");
 
		if($result) {
			// Make sure the result is valid
			if($result->rowCount() == 1) {
			// Get the row
				$row = $result->fetch();
 
				// Print headers
				header("Content-Type: ". $row['mime']);
				header("Content-Length: ". $row['size']);
				header("Content-Disposition: attachment; filename=". $row['name']);
 
				// Print data
				echo $row['data'];
				
				$result->closeCursor();
			}
			else {
				echo 'Error! No file exists with that ID.';
			}
		}
		else {
			echo "Error! Query failed";
		}
	}
}
else {
	echo 'Error! No ID was passed.';
}
?>