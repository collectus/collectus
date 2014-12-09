<?php
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
 
// Query for a list of all existing files
$result = $bdd->query('SELECT `id`, `name`, `mime`, `size`, `created` FROM `file`');
 
// Check if it was successfull
if($result) {
	// Make sure there are some files in there
	if($result->rowCount() == 0) {
		echo '<p>There are no files in the database</p>';
	}
	else {
		// Print the top of a table
		echo '<table width="100%">
				<tr>
					<td><b>Name</b></td>
					<td><b>Mime</b></td>
					<td><b>Size (bytes)</b></td>
					<td><b>Created</b></td>
					<td><b>&nbsp;</b></td>
				</tr>';
 
		// Print each file
		while($row = $result->fetch()) {
			echo "
				<tr>
					<td>{$row['name']}</td>
					<td>{$row['mime']}</td>
					<td>{$row['size']}</td>
					<td>{$row['created']}</td>
					<td><a href='get_file.php?id={$row['id']}'>Download</a></td>
				</tr>";
		}
 
		// Close table
		echo '</table>';
	}
	
	echo '<br /><a href="index.php">Retour page d\'accueil</a>';
 
}
else
{
	echo 'Error! SQL query failed:';
	echo "<pre>{$bdd->error}</pre>";
}	
$result->closeCursor();
?>