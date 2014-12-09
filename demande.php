<?php

session_start();
include('include/fonctions.php');
include('include/connexion.php');

$raison = isset($_SESSION["raison"]) ? $_SESSION["raison"] : NULL;
$nom = isset($_SESSION["nom"]) ? $_SESSION["nom"] : NULL;
$prenom = isset($_SESSION["prenom"]) ? $_SESSION["prenom"] : NULL;
$adresse = isset($_SESSION["adresse"]) ? $_SESSION["adresse"] : NULL;
$codepostal = isset($_SESSION["codepostal"]) ? $_SESSION["codepostal"] : NULL;
$ville = isset($_SESSION["ville"]) ? $_SESSION["ville"] : NULL;
$tel = isset($_SESSION["tel"]) ? $_SESSION["tel"] : NULL;
$mail = isset($_SESSION["mail"]) ? $_SESSION["mail"] : NULL;

if(isset($_POST["submit_collecte"])){	

$regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
$regex_head = '/[\n\r]/';

	$raison = isset($_POST["raison"]) ? $_POST["raison"] : $raison;
	$nom = isset($_POST["nom"]) ? $_POST["nom"] : $nom;
	$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : $prenom;
	$adresse = isset($_POST["adresse"]) ? $_POST["adresse"] : $adresse;
	$codepostal = isset($_POST["codepostal"]) ? $_POST["codepostal"] : $codepostal;
	$ville = isset($_POST["ville"]) ? $_POST["ville"] : $ville;
	$tel = isset($_POST["tel"]) ? $_POST["tel"] : $tel;
	$mail = isset($_POST["mail"]) ? $_POST["mail"] : $mail;
	
	if($raison == NULL OR $nom == NULL OR $prenom == NULL OR $adresse == NULL OR $codepostal == NULL OR $ville == NULL OR $tel == NULL){
		$alert_demande = 'Veuillez remplir tous les champs';
		if(isset($_POST["raison"]))
			$raison = NULL;
		if(isset($_POST["nom"]))
			$nom = NULL;
		if(isset($_POST["prenom"]))
			$prenom = NULL;
		if(isset($_POST["adresse"]))
			$adresse = NULL;
		if(isset($_POST["codepostal"]))
			$codepostal = NULL;
		if(isset($_POST["ville"]))
			$ville = NULL;
		if(isset($_POST["tel"]))
			$tel = NULL;
	}else{
		if(!preg_match($regex_mail, $mail))
		{
			$alert_demande = 'L\'adresse '.$mail.' n\'est pas valide';
		}
		elseif (preg_match($regex_head, $raison) 
				|| preg_match($regex_head, $nom) 
				|| preg_match($regex_head, $prenom)
				|| preg_match($regex_head, $adresse)
				|| preg_match($regex_head, $codepostal)
				|| preg_match($regex_head, $ville)
				|| preg_match($regex_head, $mail)
				|| preg_match($regex_head, $tel))
		{
			$alert_demande = 'En-têtes interdites dans les champs du formulaire';
		}
		else
		{
			$etage = $_POST["etages"];
			$ascenseur = $_POST["ascenseur"];
			$quai = $_POST["quai"];
			$heure1 = $_POST["heure1"];
			$minute1 = $_POST["minute1"];
			$heure2 = $_POST["heure2"];
			$minute2 = $_POST["minute2"];
			$collecte0 = $_POST["collecte"];
			$poids0 = $_POST["qte"];
			$poidstotal = isset($_POST["qte"]) ? intval($_POST["qte"]) : NULL;
			$collecte = array();
			$i = 1;
			while(isset($_POST["collecte{$i}"])){
				$collecte[$_POST["collecte{$i}"]] = $_POST["qte{$i}"];
				$i++;
			}
			$poidsadd = null;
			for($p = 0; $p < $i;$p++){
				$poidsadd = isset($_POST["qte{$p}"]) ? intval($_POST["qte{$p}"]) : NULL;
				$poidstotal = $poidstotal + $poidsadd;
			}
			
			/** Mail de récupération de mot de passe **/
			
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
				
				$subject = 'Collect\'us - Demande de collecte';
				
				// 2ème partie du message (Code HTML)	
				
				$message = "--$delimiteur\r\n";
				$message .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
				$message .= "Content-Transfer-Encoding:8bit\r\n";
				$message .= "\r\n";
				$message .= '<html>';
				$message .= '<body>';
				$message .= $prenom.' '.$nom.',';
				$message .= '<br/>';
				$message .= '<br/>';
				$message .= 'Nous avons bien reçu votre demande de collecte effectuée sur notre site internet <a style="font-weight:bold;text-decoration:none;color:rgb(49,73,110);" href="www.collectus.fr">Collect\'us</a>.';
				$message .= '<br/>';
				$message .= 'Veuillez trouver ci-dessous le récapitulatif de vos informations :';
				$message .= '<br/>';
				$message .= '<br/><span style="font-weight:bold;text-decoration:underline;">Mes coordonnées :</span><br/><br/>';
				$message .= '<div style="margin-left:30px;">
							<span style="font-weight:bold;">Raison social :</span> '.$raison.'<br/>
							<span style="font-weight:bold;">Nom :</span> '.$nom.'<br/>
							<span style="font-weight:bold;">Prénom :</span> '.$prenom.'<br/>
							<span style="font-weight:bold;">Adresse :</span> '.$adresse.'<br/>
							<span style="font-weight:bold;">Code postal :</span> '.$codepostal.'<br/>
							<span style="font-weight:bold;">Ville :</span> '.$ville.'<br/>
							<span style="font-weight:bold;">Téléphone :</span> '.$tel.'<br/>';
				$message .= '</div><br/><span style="font-weight:bold;text-decoration:underline;">Ma Collecte :</span><br/><br/>';
				$message .= '<div style="margin-left:30px;">
							<span style="font-weight:bold;">Etage : </span> '.$etage.'<br/>
							<span style="font-weight:bold;">Ascenseur : </span> '.$ascenseur.'<br/>
							<span style="font-weight:bold;">Quai de livraison : </span> '.$quai.'<br/>
							<span style="font-weight:bold;">Horaire souhaité :</span> Entre '.$heure1.'h'.$minute1.' et '.$heure2.'h'.$minute2;		
				$message .= '</div><br/><br/><span style="font-weight:bold;text-decoration:underline;">Matériel à collecter :</span><br/><br/>';
				$message .= '<div style="margin-left:30px;">';
				$message .= $collecte0.' : '.$poids0.' kg.<br/>';
				foreach($collecte as $element => $poids){
					$message .= $element.' : '.$poids.' kg.<br/>';
				}
				$message .= '<br/><span style="font-weight:bold;">Poids total approx.</span> : '.$poidstotal.' kg.';
				$message .= '</div><br/><br/>';
				$message .= 'Un conseiller Collect\'us vous contactera.';
				$message .= '<br/>';
				$message .= '<br/>';
				$message .= 'L\'équipe Collect\'us.';
				$message .= '<div style="height:170px;position:relative;">';
				$message .= '<br/><br/>';
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
					$ok_demande = 'Votre demande a bien été prise en compte.<br/>Un mail de confirmation vient de vous être envoyé.';					
					unset($_POST);
				}
				else
				{
					$alert_demande = 'Erreur lors de l\'envoi de l\'e-mail';
				}
			/** Fin mail **/
		}
	}
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Collectus" /> 
	<meta name="keywords" content="Collecte, cartouches" /> 
	<title>Formulaire de contact pour collecte</title>
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
<body onLoad="document.getElementById('logina').click();">
<div id="headpage"><span>Copyright © Collect'us</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
    <?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>    
    <div id="contenu">
		<!--<a href="service-collecte-recyclees.html"><img src="images/pub.png" width="200px" style="margin-top:40px;margin-left:40px" /></a>-->
		<div id="imagecentrale">
			<a><img src="images/truck.jpg" width=1000 height=220</img></a>
		</div>
		<div id="center2">
		<?php if(isset($ok_demande)){
			echo $ok_demande;
		}else{
		?>
		<div id="demande">Merci de remplir notre formulaire d'accueil qui nous permettra d'évaluer au mieux la collecte.<br><br>
		<form action="demande.php" method="post">
<?php 		
			if(isset($_SESSION["id_membre"])){
				if($nom == NULL OR $prenom == NULL OR $adresse == NULL OR $codepostal == NULL OR $ville == NULL OR $tel == NULL){
?>
			<fieldset id="field1">
			<legend>Mes coordonnées</legend>
			<table id="coord">
			<?php
				if($nom == NULL){
			?>
			<tr>
				<td><label>Nom: </label><input type="text" name="nom" /></td>
			</tr>
			<?php }
				if($prenom == NULL){
			?>			
			<tr>
				<td><label>Prénom: </label><input type="text" name="prenom" /></td>
			</tr>
			<?php }
				if($adresse == NULL){
			?>
			<tr>
				<td><label>Adresse: </label><input type="text" name="adresse" /></td>
			</tr>
			<?php }
				if($codepostal == NULL){
			?>
			<tr>
				<td><label>Code postal: </label><input type="text" name="codepostal" /></td>
			</tr>
			<?php }
				if($ville == NULL){
			?>
			<tr>
				<td><label>Ville: </label><input type="text" name="ville" /></td>
			</tr>
			<?php }else{}
				if($tel == NULL){
			?>
			<tr>
				<td><label>Téléphone: </label><input type="text" name="tel" /></td>
			</tr>
			<?php } ?>
			</table>
			</fieldset>
<?php
				}else{
				}
			}else{
?>
			<fieldset id="field1">
			<legend>Mes coordonnées</legend>
			<table id="coord">
			<tr>
				<td><label>Raison sociale: </label><input type="text" name="raison" /></td>
			</tr>
			<tr>
				<td><label>Nom: </label><input type="text" name="nom" /></td>
			</tr>
			<tr>
				<td><label>Prénom: </label><input type="text" name="prenom" /></td>
			</tr>
			<tr>
				<td><label>Adresse: </label><input type="text" name="adresse" /></td>
			</tr>
			<tr>
				<td><label>Code postal: </label><input type="text" name="codepostal" /></td>
			</tr>
			<tr>
				<td><label>Ville: </label><input type="text" name="ville" /></td>
			</tr>
			<tr>
				<td><label>Téléphone: </label><input type="text" name="tel" /></td>
			</tr>
			<tr>
				<td><label>Adresse mail: </label><input type="text" name="mail" /></td>
			</tr>
			</table>
			</fieldset>
<?php		} ?>
			<fieldset id="field2">
			<legend>Ma collecte</legend>
			<table>			
			<tr>
				<td><label>Etage : </label>
				<select name="etages" id="etages">
				   <option value="RDC">RdC</option>
				   <option value="1">1</option>
				   <option value="2">2</option>
				   <option value="3">3</option>
				   <option value="4">4</option>
				   <option value="5">5</option>
				   <option value="6">6</option>
				   <option value="7">7</option>
				   <option value="8">8</option>
				   <option value="9">9</option>
				   <option value="10">10</option>
				   <option value="11">11</option>
				   <option value="12">12</option>
				   <option value="13">13</option>
				   <option value="14">14</option>
				   <option value="15">15</option>
				   <option value="16">16</option>
				   <option value="17">17</option>
				   <option value="18">18</option>
				   <option value="19">19</option>
				   <option value="20">20</option>
				  </select></td>
			</tr>
			<tr>
				<td><label>Ascenseur :</label><input type="radio" name="ascenseur" value="Oui" />Oui<input type="radio" name="ascenseur" checked value="Non" />Non</td>
			</tr>
			<tr>
				<td><label>Quai de livraison :</label><input type="radio" name="quai" value="Oui" />Oui<input type="radio" name="quai" checked value="Non" />Non</td>
			</tr>
			<tr>
				<td><label>Horaire souhaité: </label>Entre
				 <select name="heure1" id="horaires">
				   <option value="0">0</option>
				   <option value="1">1</option>
				   <option value="2">2</option>
				   <option value="3">3</option>
				   <option value="4">4</option>
				   <option value="5">5</option>
				   <option value="6">6</option>
				   <option value="7">7</option>
				   <option value="8">8</option>
				   <option value="9">9</option>
				   <option value="10">10</option>
				   <option value="11">11</option>
				   <option value="12">12</option>
				   <option value="13">13</option>
				   <option value="14">14</option>
				   <option value="15">15</option>
				   <option value="16">16</option>
				   <option value="17">17</option>
				   <option value="18">18</option>
				   <option value="19">19</option>
				   <option value="20">20</option>
				   <option value="21">21</option>
				   <option value="22">22</option>
				   <option value="23">23</option>
				</select>
				<select name="minute1" id="horaires">
				   <option value="00">00</option>
				   <option value="15">15</option>
				   <option value="30">30</option>
				   <option value="45">45</option>
				</select>et
				<select name="heure2" id="horaires">
				   <option value="0">0</option>
				   <option value="1">1</option>
				   <option value="2">2</option>
				   <option value="3">3</option>
				   <option value="4">4</option>
				   <option value="5">5</option>
				   <option value="6">6</option>
				   <option value="7">7</option>
				   <option value="8">8</option>
				   <option value="9">9</option>
				   <option value="10">10</option>
				   <option value="11">11</option>
				   <option value="12">12</option>
				   <option value="13">13</option>
				   <option value="14">14</option>
				   <option value="15">15</option>
				   <option value="16">16</option>
				   <option value="17">17</option>
				   <option value="18">18</option>
				   <option value="19">19</option>
				   <option value="20">20</option>
				   <option value="21">21</option>
				   <option value="22">22</option>
				   <option value="23">23</option>
				</select>
				<select name="minute2" id="horaires">
				   <option value="00">00</option>
				   <option value="15">15</option>
				   <option value="30">30</option>
				   <option value="45">45</option>
				</select></td>
			</tr>
			</table>
			</fieldset>
			
			<fieldset id="field3">
			<legend>Mon inventaire</legend>
			<div id="inventaire">
			<p class="selectinventaire">
				<select name="collecte" id="collecte">
					<optgroup label="Urnes">
					 <option value="Urnes 150">Bouteille plastique (100L)</option>
					 <option value="Urnes 50">Canette (100L)</option>
					 <option value="Urnes 25">Capsule (25L)</option>
					 <option value="Urnes 300">Cartouche (100L)</option>
					 <option value="Urnes 300">DEEE grillage (1000L)</option>
					 <option value="Urnes 100">Gobelet plastique (100L)</option>
					 <option value="Urnes 300">Mobile (25L)</option>
					 <option value="Urnes 300">Néon (100L)</option>
					 <option value="Urnes 300">Papier (25L)</option>
					 <option value="Urnes 300">Papier (100L)</option>
					 <option value="Urnes 300">Papier (300L)</option>
					 <option value="Urnes 300">Pile (25L)</option>
					</optgroup>
					<optgroup label="Informatique">
					 <option value="PC Portable">PC Portable</option>
					 <option value="Imprimante/Fax">Imprimante/Fax</option>
					 <option value="Ecran">Ecran</option>
					 <option value="Unite">Unité centrale</option>
					 <option value="Autre matériel informatique">autres</option>
					</optgroup>
					<optgroup label="Téléphone mobile">
					 <option value="Mobile">Téléphone mobile</option>
					</optgroup>
				</select>
				<label id="label_poids"> Poids/Qté : <input type="text" name="qte" class="qte" /></label>
			</p>
			</div>
				<a href="" id="addfield">Ajouter un élément</a>
				<input type="submit" name="submit_collecte" value="Envoyer" />
			</fieldset>
		</form>
		<?php if(isset($alert_demande)){
			echo '<span style="color:red;font-style:italic;">'.$alert_demande.'</span>';
		}?>
		</div>
		<?php } ?>
		</div>
			<div id="imagebas">
			<a><img src="images/truck_bas.jpg" width=1000 height=80</img></a>
		</div>
	</div>
	<?php include('include/contact.php'); ?>

</div>
<div id="footer">
	<a class="fd" href="/" title="Accueil">Accueil</a>  <a class="fd" href="" title="Mentions legales">Mentions legales</a>
</div>

<!-- Code javascript -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
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
<script>
<!--
$(function() {
        var scntDiv = $('#inventaire');
        var i = $('#inventaire p').size();
		
        $('#addfield').live('click', function() {
                $('<p class="selectinventaire"><select name="collecte'+i+'" id="collecte"><optgroup label="Urnes"><option value="Urnes 150">Bouteille plastique (100L)</option><option value="Urnes 50">Canette (100L)</option><option value="Urnes 25">Capsule (25L)</option><option value="Urnes 300">Cartouche (100L)</option><option value="Urnes 300">DEEE grillage (1000L)</option><option value="Urnes 100">Gobelet plastique (100L)</option><option value="Urnes 300">Mobile (25L)</option><option value="Urnes 300">Néon (100L)</option><option value="Urnes 300">Papier (25L)</option><option value="Urnes 300">Papier (100L)</option><option value="Urnes 300">Papier (300L)</option><option value="Urnes 300">Pile (25L)</option></optgroup><optgroup label="Informatique"><option value="PC Portable">PC Portable</option><option value="Imprimante/Fax">Imprimante/Fax</option><option value="Ecran">Ecran</option><option value="Unite">Unité centrale</option><option value="Autre matériel informatique">autres</option></optgroup><optgroup label="Téléphone mobile"><option value="Mobile">Téléphone mobile</option></optgroup></select><label id="label_poids"> Poids/Qté : <input type="text" name="qte'+i+'" class="qte" /></label></p>')
				.appendTo(scntDiv);
                i++;
                return false;
        });
		
        $('#removefield').live('click', function() {
                if( i > 1 ) {
                        $(this).parents('p').remove();
                        i--;
                }
                return false;
        });
});
-->
</script>
</body>
</html>
