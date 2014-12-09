<?php
session_start();
include('include/fonctions.php');
include('include/connexion.php');
?>

<?php
if (get_magic_quotes_gpc())
{
	$raison = stripslashes(htmlentities($_POST['raison'])); 
	$nom = stripslashes(htmlentities($_POST['nomContact'])); 
	$prenom = stripslashes(htmlentities($_POST['prenomContact'])); 
	$code = stripslashes(htmlentities($_POST['postal'])); 
	$mail = stripslashes(htmlentities($_POST['email'])); 
	$tel = stripslashes(htmlentities($_POST['numtel'])); 
} 
else
{  
	$raison = htmlentities($_POST['raison']); 
	$nom = htmlentities($_POST['nomContact']); 
	$prenom = htmlentities($_POST['prenomContact']); 
	$code = htmlentities($_POST['postal']); 
	$mail = htmlentities($_POST['email']);
	$tel = htmlentities($_POST['numtel']); 
}

// Regex de vérification

$regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
$regex_head = '/[\n\r]/';

if (!preg_match($regex_mail, $mail))
{
	$alert = 'L\'adresse '.$mail.' n\'est pas valide';
}
elseif (preg_match($regex_head, $raison) 
		|| preg_match($regex_head, $nom) 
		|| preg_match($regex_head, $prenom)
		|| preg_match($regex_head, $code)
		|| preg_match($regex_head, $mail)
		|| preg_match($regex_head, $tel))
{
	$alert = 'En-têtes interdites dans les champs du formulaire';
}
elseif (!isset($_COOKIE['sent']))
{			
	$delimiteur = "-----=".md5(uniqid(rand()));
	
	// En-tête de l'e-mail						
	$headers  = "MIME-Version: 1.0 \r\n";
	$headers .= "Content-Type: multipart/related; boundary=\"$delimiteur\"\r\n";
	
	// En-têtes additionnels 
	$headers .= "From: noreply <noreply@collectus.fr> \r\n";
	$headers .= "Bcc: collectus@collectus.fr \r\n";
	$headers .= "Content-Transfer-Encoding: 8bit";
	$headers .= "\r\n";					
	
	// Sujet de l'e-mail			
	
	$subject = 'Collect\'us - Confirmation de reception du formulaire';
	
	// 2ème partie du message (Code HTML)	
	
	$message = "--$delimiteur\r\n";
	$message .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
	$message .= "Content-Transfer-Encoding:8bit\r\n";
	$message .= "\r\n";
	$message .= '<html><body>';
	$message .= $nom.' '.$prenom.',';
	$message .= '<br/>';
	$message .= '<br/>';
	$message .= 'Nous vous remercions d\'avoir choisi <a style="font-weight:bold;text-decoration:none;color:rgb(49,73,110);" href="www.collectus.fr">Collect\'us</a>.';
	$message .= '<br/>';
	$message .= '<br/>';
	$message .= '<span style="color:rgb(12,60,108);">Un conseiller vous contactera d\'ici quelques minutes pour répondre à toutes vos questions.</span>';
	$message .= '<br/>';
	$message .= '<br/>';
	$message .= '<div style="display:block;font-size:16px;border-radius:7px;color:rgb(183,197,200);height:24px;width:520px;background-color:rgb(12,60,108);font-family:\'Times New Roman\';font-weight:bold;padding-left:20px;padding-top:3px;">Vos informations';
	$message .= '</div>';
	$message .= '<br/>';
	$message .= '<font style="font-weight:bold;margin-left:30px;">Raison sociale :</font> '.$raison.'<br/>';
	$message .= '<font style="font-weight:bold;margin-left:30px;">Nom :</font> '.$nom.'<br/>';
	$message .= '<font style="font-weight:bold;margin-left:30px;">Prénom :</font> '.$prenom.'<br/>';
	$message .= '<font style="font-weight:bold;margin-left:30px;">Code postal :</font> '.$code.'<br/>';
	$message .= '<font style="font-weight:bold;margin-left:30px;">E-mail :</font> '.$mail.'<br/>';
	$message .= '<font style="font-weight:bold;margin-left:30px;">Numéro de téléphone :</font> '.$tel.'<br/>';
	$message .= '<br/>';
	$message .= '<font style="font-style:italic;">Si une erreur s\'est glissée dans ces informations, veuillez l\'indiquer à notre conseiller.</font>';
	$message .= '<br/>';
	$message .= '<br/>';
	$message .= '<br/>';
	$message .= '<div style="height:170px;position:relative;background: url(\'cid:Bas\') no-repeat bottom left;">';
	$message .= '<br/><br/><br/>';
	$message .= "<img src=\"cid:Logo\" width=\"100px\" height=\"28px\">";
	$message .= '<br/>';
	$message .= '86 av. du Dr Arnold Netter - 75012 Paris';
	$message .= '<br/>';
	$message .= 'www.collectus.fr';
	$message .= '<br/>';
	$message .= 'Tél : 01.77.13.18.55</div></body></html>';
	$message .= "\r\n";
	
	// 3ème partie (Fichier joint inline)
	
		// Logo
	$fichier = "./images/logo.jpg";
	$fp      = fopen($fichier, "rb");
	$fichierattache = fread($fp, filesize($fichier));
	fclose($fp);
	$fichierattache = chunk_split(base64_encode($fichierattache));

	$message .= "--$delimiteur\r\n";
	$message .= "Content-Type: application/octet-stream; name=\"$fichier\"\r\n";
	$message .= "Content-Transfer-Encoding: base64\r\n";
	$message .= "Content-ID: <Logo>\r\n";
	$message .= "\r\n";
	$message .= $fichierattache . "\r\n";
	$message .= "\r\n\r\n";
	
		// Background
	$fichier2 = "./images/bottommail.png";
	$fp2      = fopen($fichier2, "rb");
	$fichierattache2 = fread($fp2, filesize($fichier2));
	fclose($fp2);
	$fichierattache2 = chunk_split(base64_encode($fichierattache2));

	$message .= "--$delimiteur\r\n";
	$message .= "Content-Type: application/octet-stream; name=\"$fichier2\"\r\n";
	$message .= "Content-Transfer-Encoding: base64\r\n";
	$message .= "Content-ID: <Bas>\r\n";
	$message .= "\r\n";
	$message .= $fichierattache2 . "\r\n";
	$message .= "\r\n\r\n";
	
	if(mail($mail, $subject, $message, $headers))
	{
		$alert  = 'Un e-mail vient de vous être envoyé.<br/><br/>';
		$alert .= '<strong><u>Récapitulatif de vos informations :</u></strong><br/>';
		$alert .= '<br/>';
		$alert .= '<strong>Raison sociale :</strong> '.$raison.'<br/>';
		$alert .= '<strong>Nom :</strong> '.$nom.'<br/>';
		$alert .= '<strong>Prénom :</strong> '.$prenom.'<br/>';
		$alert .= '<strong>Code postal :</strong> '.$code.'<br/>';
		$alert .= '<strong>Adresse mail :</strong> '.$mail.'<br/>';
		$alert .= '<strong>Téléphone :</strong> '.$tel.'<br/>';
		$alert .= '<br/>';
		$alert .= '<br/>';
		$alert .= '<font style="font-style:italic;">Si vous n\'avez pas reçu d\'e-mail de confirmation, pensez à vérifier vos spams</font>';
		
		
		setcookie("sent", "1", time() + 30);
		unset($_POST);
	}
	else
	{
		$alert = 'Erreur lors de l\'envoi de l\'e-mail';
	}
}
else
{
	unset($_POST);
	$alert = 'Vous ne pouvez plus envoyer de demande pour le moment.';
	$alert .= '<br/>';
	$alert .= 'Veuillez attendre au moins 30 secondes entre chaque demande.';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Collectus" /> 
	<meta name="keywords" content="Collecte, cartouches" /> 
	<title>Me contacter : envoi du formulaire</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css" />

	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45629393-1', 'collectus.fr');
  ga('send', 'pageview');

	</script>

	
	</head>
<body onLoad="check_infos()">
<div id="headpage"><span>Copyright © Collect'us</span></div>
<div id="conteneur">
    <?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>    
    <div id="contenu">
	<div id="imagecentrale">
			<a><img src="images/greenwall.jpg" width=1000 height=100</img></a>
		</div>
		<!--<?php include('include/formulaire.php'); ?>-->
		<div id="center">
			<?php				
				if(!empty($alert))
				{
					echo '<div id="alert">'.$alert.'</div>';
				}
			?>				
		</div>
		<div id="imagebas">
			<a><img src="images/greenwall_bas.jpg" width=1000 height=80</img></a>
		</div>
	</div>
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a href="./" title="Accueil">Accueil</a> - <a href="./index.php?opt=mentions" title="Mentions legales">Mentions legales</a> - <a href="index.php?opt=plan" title="Plan du site">Plan du site</a>
</div>

<!-- Code javascript -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script>
<!--
$(document).ready(
function () { 
	$(".menu li.has-sub").each(
	function () {
		var $ul = $(this).find("ul"); 
		$(this).hover(
		function () {
			var tempHeight = $ul.css("height", "auto").height();
			$ul
			.height(0)
			.stop()
			.animate({ height: tempHeight.toString() }, 500);
		}, 
		function () {			
			$ul
			.stop()
			.animate({ height: "0" }, 500);
		});
	});
});
-->
</script>
</body>
</html>
