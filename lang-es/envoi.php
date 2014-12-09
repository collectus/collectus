<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Collectus" /> 
	<meta name="keywords" content="Collecte, cartouches" /> 
	<title>Collectus : collecting people</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" />

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
    <?php include('head.php'); ?>
	<?php include('shmenu.php'); ?>    
    <div id="contenu">
		<?php include('formulaire.php'); ?>
		<div id="center">
			<?php
				if (get_magic_quotes_gpc())
				{
					$raison = stripslashes(htmlentities($_POST['raison'])); 
					$nom = stripslashes(htmlentities($_POST['nomContact'])); 
					$prenom = stripslashes(htmlentities($_POST['prenomContact'])); 
					$mail = stripslashes(htmlentities($_POST['email'])); 
					$pays = stripslashes(htmlentities($_POST['pays'])); 
					$tel = stripslashes(htmlentities($_POST['numtel'])); 
				} 
				else
				{  
					$raison = htmlentities($_POST['raison']); 
					$nom = htmlentities($_POST['nomContact']); 
					$prenom = htmlentities($_POST['prenomContact']); 
					$mail = htmlentities($_POST['email']);
					$pays = htmlentities($_POST['pays']);
					$tel = htmlentities($_POST['numtel']); 
				}
				
				$regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
				$regex_head = '/[\n\r]/';
				
				if (!preg_match($regex_mail, $mail))
				{
					$alert = 'Email '.$mail.' incorrecta.';
				}
				elseif (preg_match($regex_head, $raison) 
						|| preg_match($regex_head, $nom) 
						|| preg_match($regex_head, $prenom)
						|| preg_match($regex_head, $mail)
						|| preg_match($regex_head, $pays)
						|| preg_match($regex_head, $tel))
				{
					$alert = 'Headers prohibido en el formulario.';
				}
				elseif (!isset($_COOKIE['sent']))
				{					
					$delimiteur = "-----=".md5(uniqid(rand()));
					
					// En-tête de l'e-mail						
					$headers  = "MIME-Version: 1.0 \r\n";
					$headers .= "Content-Type: multipart/related; boundary=\"$delimiteur\"\r\n";
					
					// En-têtes additionnels 
					$headers .= "From: noreply <noreply@collectus.fr> \r\n";
					$headers .= "Bcc: axel.boukhris@collectus.fr \r\n";
					$headers .= "Content-Transfer-Encoding: 8bit";
					$headers .= "\r\n";					
					
					// Sujet de l'e-mail			
					
					$subject = 'Collect\'us - Confirmaccion de envio del formulario';
					
					// 2ème partie du message (Code HTML)	
					
					$message = "--$delimiteur\r\n";
					$message .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
					$message .= "Content-Transfer-Encoding:8bit\r\n";
					$message .= "\r\n";
					$message .= '<html><body>';
					$message .= $nom.' '.$prenom.',';
					$message .= '<br/>';
					$message .= '<br/>';
					$message .= 'Gracias por haber eligido <a style="font-weight:bold;text-decoration:none;color:rgb(49,73,110);" href="www.collectus.fr">Collect\'us</a>.';
					$message .= '<br/>';
					$message .= '<br/>';
					$message .= '<span style="color:rgb(12,60,108);font-weight:bold;">Un asesor se comunicará con usted en breve.</span>';
					$message .= '<br/>';
					$message .= '<br/>';
					$message .= '<div style="display:block;font-size:16px;border-radius:7px;color:rgb(183,197,200);height:24px;width:520px;background-color:rgb(12,60,108);font-family:\'Times New Roman\';font-weight:bold;padding-left:20px;padding-top:3px;">Informaciones';
					$message .= '</div>';
					$message .= '<br/>';
					$message .= '<font style="font-weight:bold;margin-left:30px;color:rgb(106,106,106);">Nombre de empresa :</font> '.$raison.'<br/>';
					$message .= '<font style="font-weight:bold;margin-left:30px;color:rgb(106,106,106);">Nombre :</font> '.$nom.'<br/>';
					$message .= '<font style="font-weight:bold;margin-left:30px;color:rgb(106,106,106);">Apellido :</font> '.$prenom.'<br/>';
					$message .= '<font style="font-weight:bold;margin-left:30px;color:rgb(106,106,106);">Email :</font> '.$mail.'<br/>';
					$message .= '<font style="font-weight:bold;margin-left:30px;color:rgb(106,106,106);">Pais :</font> '.$pays.'<br/>';
					$message .= '<font style="font-weight:bold;margin-left:30px;color:rgb(106,106,106);">Teléfono :</font> '.$tel.'<br/>';
					$message .= '<br/>';
					$message .= '<font style="font-style:italic;">Si hay una falta en los informaciones de este email, indicale al asesor por favor.</font>';
					$message .= '<br/>';
					$message .= '<br/>';
					$message .= '<br/>';
					$message .= '<div style="height:170px;position:relative;background: url(\'cid:Bas\') no-repeat bottom left;">';
					$message .= '<br/><br/><br/>';
					$message .= "<img src=\"cid:Logo\" width=\"25%\" height=\"7%\">";
					$message .= '<br/>';
					$message .= '86 av. du Dr Arnold Netter - 75012 Paris';
					$message .= '<br/>';
					$message .= 'www.collectus.fr';
					$message .= '<br/>';
					$message .= 'Tél : 01.77.13.18.55</body></html>';
					$message .= '</div>';
					$message .= "\r\n";
					
					// 3ème partie (Fichier joint inline)
					
					$fichier = "../images/logo.jpg";
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
					
					
					$fichier2 = "../images/bottommail.png";
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
						$alert  = 'Un email ha sido enviado a usted<br/><br/>';
						$alert .= '<strong><u>Informaciones</u></strong><br/>';
						$alert .= '<br/>';
						$alert .= '<strong>Nombre de empresa :</strong> '.$raison.'<br/>';
						$alert .= '<strong>Nombre :</strong> '.$nom.'<br/>';
						$alert .= '<strong>Apellido :</strong> '.$prenom.'<br/>';
						$alert .= '<strong>Email :</strong> '.$mail.'<br/>';
						$alert .= '<strong>Pais :</strong> '.$pays.'<br/>';
						$alert .= '<strong>Téléfono :</strong> '.$tel.'<br/>';
						$alert .= '<br/>';
						$alert .= '<br/>';
						$alert .= '<font style="font-style:italic;">Si usted no recibió una confirmación, hay que mirar en los spams</font>';
						
						
						setcookie("sent", "1", time() + 30);
						unset($_POST);
					}
					else
					{
						$alert = 'An error has occured while trying to send an email';
					}
				}
				else
				{
					unset($_POST);
					$alert = 'Usted no puede enviar.';
					$alert .= '<br/>';
					$alert .= 'Por favor espera 30 secondas.';
				}
				
				if(!empty($alert))
				{
					echo '<div id="alert">'.$alert.'</div>';
				}
			?>				
		</div>
	</div>
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a href="/" title="Accueil">Accueil</a> - <a href="" title="Mentions legales">Mentions legales</a>
</div>

<!-- Code javascript -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../js/javascript.js"></script>
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
