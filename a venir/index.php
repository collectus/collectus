<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
   <title>Upload fichier</title>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form action="add_file.php" method="post" enctype="multipart/form-data">
		<input type="file" name="uploaded" /><br>
		<input type="submit" value="Envoyer le fichier" />
	</form>
	<p>
        <a href="list_files.php">See all files</a>
    </p>
</body>
</html>