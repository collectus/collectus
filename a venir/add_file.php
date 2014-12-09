 <?php
// Check if a file has been uploaded
if(isset($_FILES['uploaded'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded']['error'] == 0) {
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
 
        // Gather all required data
        $name = $_FILES['uploaded']['name'];
        $mime = $_FILES['uploaded']['type'];
        $size = intval($_FILES['uploaded']['size']);
        $data = file_get_contents($_FILES['uploaded']['tmp_name']);
 
        // Create the SQL query
        $request = $bdd->prepare('INSERT INTO `file` (`name`, `mime`, `size`, `data`, `created`) VALUES (:name, :mime, :size, :data, NOW())');
 
        // Execute the query
        $request->execute(array('name' => $name, 'mime' => $mime, 'size' => $size, 'data' => $data));
 
        // Check if it was successfull
        if($request) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$bdd->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded']['error']);
    }
}
else {
    echo 'Error! A file was not sent!';
}
 
// Echo a link back to the main page
echo '<p>Click <a href="index.php">here</a> to go back</p>';
?>