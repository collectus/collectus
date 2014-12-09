<?php
session_start();
include('include/connexion.php');
include('include/fonctions.php');

$bdd = connexion_bdd();
?>

<?php

$error=false;
$registrer=false;
$regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';

if(isset($_POST["registrer"])){

$raison = $_POST["inscri_raison"];
$mail = $_POST["inscri_mail"];
$pass = $_POST["inscri_pass"];
$pass2 = $_POST["inscri_pass2"];

	if($raison == NULL OR $mail == NULL OR $pass == NULL OR $pass2 == NULL){
	
			$error = true;
			$errorMSG = 'Veuillez remplir tous les champs';
			
	}
	elseif($pass == $pass2){
	
		if($mail == $pass){
		
			$error = true;
			$errorMSG = 'L\'adresse mail et le mot de passe doivent être différents';
		}
		else{
		
			$rqt = 'SELECT MAIL from collectus_user WHERE MAIL = ?';
			$result = $bdd->prepare($rqt);
			$result->execute(array($mail));
			$count = $result->rowCount();
			
			if($count == 0){
				
				if (preg_match($regex_mail, $mail))
				{
				
					if(strlen($pass) > 5 OR strlen($pass) < 30){
					
						$sql = 'INSERT INTO collectus_user (MAIL,MOTDEPASSE,RAISON) VALUES (:mail,:pass,:raison)';
						$resultat = $bdd->prepare($sql);
						$resultat->execute(array('mail' => $mail, 'pass' => $pass, 'raison' => $raison));
						
						if($resultat){
						
							$registrer = true;
							$registrerMSG = 'Votre inscription a bien été enregistrée.';
							$_SESSION["mail"] = $mail;
							$_SESSION["pass"] = $pass;

							/** Mail de confirmation d'inscription **/
						
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
							
							$subject = 'Collect\'us - Confirmation d\'inscription.';
							
							// 2ème partie du message (Code HTML)	
							
							$message = "--$delimiteur\r\n";
							$message .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
							$message .= "Content-Transfer-Encoding:8bit\r\n";
							$message .= "\r\n";
							$message .= '<html>';
							$message .= '<body>';
							$message .= 'Bonjour,';
							$message .= '<br/>';
							$message .= '<br/>';
							$message .= 'Votre compte a bien été crée :';
							$message .= '<br/>';
							$message .= '<br/>';
							$message .= '<div style="margin-left:30px;"><span style="font-weight:bold;">Adresse mail :</span> '.$mail;
							$message .= '<br/><span style="font-weight:bold;">Mot de passe :</span> '.$pass;
							$message .= '</div>';
							$message .= '<br/>';
							$message .= 'Vous pouvez désormais accéder à votre espace adhérent et gérer vos demandes de collectes et de cartouches.';
							$message .= '<br/>';
							$message .= 'N\'oubliez pas de compléter votre profil adhérent pour faciliter vos collectes.';
							
							/** Footer mail **/
							
							$message .= '<div style="height:170px;position:relative;">';
							$message .= '<br/><br/><br/>';
							$message .= "<img src=\"cid:Logo\" width=\"100px\" height=\"28px\">";
							$message .= '<br/>';
							$message .= '86 av. du Dr Arnold Netter - 75012 Paris';
							$message .= '<br/>';
							$message .= 'www.collectus.fr';
							$message .= '<br/>';
							$message .= 'Tél : 01.77.13.18.55</body></html>';
							$message .= '</div>';
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
							
							if(mail($mail, $subject, $message, $headers))
							{
								$registrerMSG2 = '<br/><br/>Un mail de confirmation vous a été envoyé avec vos identifiants.';
							}else{
								$registrerMSG2 = '<br/><br/>Un erreur s\est produite lors de l\'envoi du mail de confirmation.';
							}
					
						}else{
						
							$error = true;
							$errorMSG = 'Erreur dans la requête SQL';
						}
					}else{
						
						$error = true;
						$errorMSG = 'Le mot de passe doit contenir au moins 6 caractères';
					}
				}else{
				
						$error = true;
						$errorMSG = 'L\'adresse mail n\'est pas valide';
				}
			}else{
			
				$error = true;
				$errorMSG = 'L\'adresse mail '.$mail.' est déjà utilisée';
				
			}
		}
	}elseif($pass != $pass2){
	
		$error = true;
		$errorMSG = 'Les deux mots de passes sont différents';
		
	}elseif($mail == $pass){
	
		$error = true;
		$errorMSG = 'L\'adresse mail et le mot de passe doivent être différents';
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Collectus" /> 
	<meta name="keywords" content="Collecte, cartouches" /> 
	<title>Ce que nous recyclons : matériel d'impression, téléphone mobile et matériel bureautique usagés</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" href="images/favicon.ico" >

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45629393-1', 'collectus.fr');
  ga('send', 'pageview');

</script>

	
	</head>
<body onLoad="check_infos();currentPage('account');">
<div id="headpage"><span>Copyright © Collect'us</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
    <?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>    
    <div id="contenu">
		<div id="imagecentrale">
			<a><img src="images/bicycle.jpg" width=1000 height=220</img></a>
		</div>

		<!--<?php include('include/formulaire.php'); ?>-->
		
			<div id="center2">
<?php
				if($registrer == true){
					echo '<div id="registrer_msg">'.$registrerMSG.'</div>'.$registrerMSG2;?>
				<br/>Vous pouvez dès à présent accéder à votre Espace Adhérent en <a href="#login-box" onclick="javascript:document.getElementById('logina').click();">cliquant ici</a>.
<?php
				}else{
?>
				<div id="inscription">
					<div id="inscri_title">Créer votre compte Collect'us</div>
					<form action="inscription.php" method="post">
					<fieldset id="inscri_field1">
						<legend><strong> Mes informations </strong></legend>
						<br>
						<table>
						<tr><td class="label"><label>Raison sociale : </label></td><td><input type="text" name="inscri_raison" /></td></tr>
						</table>
					</fieldset>
					<br>
					<fieldset id="inscri_field2">
						<legend><strong>Mes identifiants</strong></legend>
						<br>
						<img src="images/logo-inscription.jpg" id="inscri_img" />
						<table>
						<tr><td class="label"><label>Adresse mail : </label></td><td><input type="text" name="inscri_mail" /></td></tr>
						<tr><td class="label"><label>Mot de passe : </label></td><td><input type="password" name="inscri_pass" /></td></tr>
						<tr><td class="label"><label>Confirmer mot de passe : </label></td><td><input type="password" name="inscri_pass2" /></td></tr>
						<tr><td id="inscri_ok" colspan="2"><input type="submit" name="registrer" value="Valider" /></td></tr>
						</table>
					</fieldset>
					</form>
				</div>
<?php
					if($error == true)
						echo '<div id="error_msg">'.$errorMSG.'</div>';
				}
?>
			</div>
	</div>
	<div id="imagebas">
			<a><img src="images/bicyclebas.jpg" width=1000 height=80</img></a>
		</div>
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a href="./" title="Accueil">Accueil</a> - <a href="./index.php?opt=mentions" title="Mentions legales">Mentions legales</a> - <a href="index.php?opt=plan" title="Plan du site">Plan du site</a>
</div>

<!-- Code javascript -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
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
			.animate({ height: tempHeight.toString() }, 350);
		}, 
		function () {			
			$ul
			.stop()
			.animate({ height: "0" }, 350);
		});
	});
});
$(document).ready(
function() {
$('a.login-window').click(function() {
    
            //Getting the variable's value from a link 
    var loginBox = $(this).attr('href');

    //Fade in the Popup
    $(loginBox).fadeIn(300);
    
    //Set the center alignment padding + border see css style
    var popMargTop = ($(loginBox).height() + 24) / 2; 
    var popMargLeft = ($(loginBox).width() + 24) / 2; 
    
    $(loginBox).css({ 
        'margin-top' : -popMargTop,
        'margin-left' : -popMargLeft
    });
    
    // Add the mask to body
    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);
    
    return false;
});

// When clicking on the button close or the mask layer the popup closed
$('a.close, #mask').live('click', function() { 
  $('#mask , .login-popup').fadeOut(300 , function() {
    $('#mask').remove();  
}); 
return false;
});
});
-->
</script>
</body>
</html>
