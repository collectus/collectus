<?php

session_start();
include('include/fonctions.php');
include('include/connexion.php');

if(isset($_SESSION["id_membre"])){
	actualiser_session();
}

$alert=null;
$alert_mail=null;
$alert_pass=null;
$alert_forgot=null;
$regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
$regex_head = '/[\n\r]/';

$page = (isset($_GET["page"])) ? $_GET["page"] : NULL;
$id = (isset($_GET["id"])) ? $_GET["id"] : NULL;

if(isset($_POST["change2ok"])){

	$bdd = connexion_bdd();
	
	if(isset($_POST["nom_changed"])){	
	$rqt = 'UPDATE `collectus_user` SET `NOM`=:nom WHERE ID=:id';
	$result = $bdd->prepare($rqt);
	$result->execute(array('nom' => $_POST["nom_changed"], 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
	}
	if(isset($_POST["prenom_changed"])){
	$rqt = 'UPDATE `collectus_user` SET `PRENOM`=:prenom WHERE ID=:id';
	$result = $bdd->prepare($rqt);
	$result->execute(array('prenom' => $_POST["prenom_changed"], 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
	}
	if(isset($_POST["poste_changed"])){
	$rqt = 'UPDATE `collectus_user` SET `POSTE`=:poste WHERE ID=:id';
	$result = $bdd->prepare($rqt);
	$result->execute(array('poste' => $_POST["poste_changed"], 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
	}	
	if(isset($_POST["adresse_changed"])){	
	$rqt = 'UPDATE `collectus_user` SET `ADRESSE`=:adresse WHERE ID=:id';
	$result = $bdd->prepare($rqt);
	$result->execute(array('adresse' => $_POST["adresse_changed"], 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
	}
	if(isset($_POST["tel_changed"])){
	$rqt = 'UPDATE `collectus_user` SET `TEL`=:tel WHERE ID=:id';
	$result = $bdd->prepare($rqt);
	$result->execute(array('tel' => $_POST["tel_changed"], 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
	}
	if(isset($_POST["codepostal_changed"])){
	$rqt = 'UPDATE `collectus_user` SET `CODE POSTAL`=:codepostal WHERE ID=:id';
	$result = $bdd->prepare($rqt);
	$result->execute(array('codepostal' => $_POST["codepostal_changed"], 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
	}
	if(isset($_POST["ville_changed"])){
	$rqt = 'UPDATE `collectus_user` SET `VILLE`=:ville WHERE ID=:id';
	$result = $bdd->prepare($rqt);
	$result->execute(array('ville' => $_POST["ville_changed"], 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
	}

	actualiser_session();
	
}

if(isset($_POST["change_mail_ok"])){
	$mail = $_POST["new_mail"];
	$mail2 = $_POST["new_mail2"];
	$pass = $_POST["confirm_pass"];
	if($mail == NULL OR $mail2 == NULL OR $pass == NULL){
		$alert_mail = 'Veuillez remplir tous les champs';
	}else{
		if($mail != $mail2){
			$alert_mail = 'Les deux adresses mail sont différentes';
		}else{
			$bdd = connexion_bdd();
			$request = 'SELECT MAIL,MOTDEPASSE FROM collectus_user WHERE ID=:id';
			$results = $bdd->prepare($request);
			$results->execute(array('id' => $_SESSION["id_membre"])) or die(print_r($results->errorInfo()));
			$donnees = $results->fetch();
			if($pass != $donnees["MOTDEPASSE"]){
				$alert_mail = 'Le mot de passe est incorrect';
			}elseif(!preg_match($regex_mail, $mail)){
				$alert_mail = 'L\'adresse mail n\'est pas valide';
			}else{
				$rqt = 'SELECT MAIL from collectus_user WHERE MAIL = ?';
				$result = $bdd->prepare($rqt);
				$result->execute(array($mail));
				$count = $result->rowCount();
				if($count == 0){
					$rqt = 'UPDATE `collectus_user` SET `MAIL`=:mail WHERE ID=:id';
					$result = $bdd->prepare($rqt);
					$result->execute(array('mail' => $mail, 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
					$alert_mail = 'Nouvelle adresse mail enregistrée. <META HTTP-EQUIV="Refresh" CONTENT="2;URL=espace.php">';
					$_SESSION['mail'] = $mail;
				}else{
					$alert_mail = 'L\'adresse mail '.$mail.' est déjà utilisée';
				}
			}
		}
	}

	actualiser_session();
	
}

if(isset($_POST["change_pass_ok"])){
	$former_pass = $_POST["former_pass"];
	$new_pass = $_POST["new_pass"];
	$new_pass2 = $_POST["new_pass2"];
	if($former_pass == NULL OR $new_pass == NULL OR $new_pass2 == NULL){
		$alert_pass = 'Veuillez remplir tous les champs';
	}else{
		if($new_pass != $new_pass2){
			$alert_pass = 'Les deux mots de passe doivent être identiques';
		}else{
			if($former_pass == $new_pass){
				$alert_pass = 'L\'ancien et le nouveau mot de passe sont identiques';
			}else{
				$bdd = connexion_bdd();
				$request = 'SELECT MOTDEPASSE FROM collectus_user WHERE ID=:id';
				$results = $bdd->prepare($request);
				$results->execute(array('id' => $_SESSION["id_membre"])) or die(print_r($results->errorInfo()));
				$donnees = $results->fetch();
				if($former_pass != $donnees["MOTDEPASSE"]){
					$alert_pass = 'Mot de passe incorrect';
				}else{
					$rqt = 'UPDATE `collectus_user` SET `MOTDEPASSE`=:motdepasse WHERE ID=:id';
					$result = $bdd->prepare($rqt);
					$result->execute(array('motdepasse' => $new_pass, 'id' => $_SESSION["id_membre"])) or die(print_r($result->errorInfo()));
					$alert_pass = 'Nouveau mot de passe enregistré. Vous devez vous reconnecter...<META HTTP-EQUIV="Refresh" CONTENT="2;URL=./espace.php">';
				}
			}
		}
	}
}

if(isset($_POST["forgot_pass_ok"])){
	$mail_forgot = $_POST["mail_forgot"];
	if($mail_forgot == NULL){
		$alert_forgot = 'Veuillez entrer une adresse mail';
	}else{
		if(!preg_match($regex_mail, $mail_forgot)){
			$alert_forgot = 'L\'adresse mail indiquée n\'est pas valide.';
		}elseif(preg_match($regex_head, $mail_forgot)){
			$alert_forgot = 'En-têtes interdites dans les champs.';
		}elseif(!isset($_COOKIE['forgot'])){
			$bdd = connexion_bdd();
			$rqt = 'SELECT MAIL from collectus_user WHERE MAIL = :mail';
			$result = $bdd->prepare($rqt);
			$result->execute(array('mail' => $mail_forgot));
			$count = $result->rowCount();
			if($count == 0){
				$alert_forgot = 'Cette adresse mail n\'est pas enregistrée.';
			}else{
					
				$rqt = 'SELECT NOM,PRENOM,MOTDEPASSE FROM collectus_user WHERE MAIL = :mail';
				$result = $bdd->prepare($rqt);
				$result->execute(array('mail' => $mail_forgot)) or die(print_r($results->errorInfo()));
				$donnees = $result->fetch();
				$nom = $donnees["NOM"];
				$prenom = $donnees["PRENOM"];
				$pass = $donnees["MOTDEPASSE"];
				
				/** Mail de récupération de mot de passe **/
				
					$delimiteur = "-----=".md5(uniqid(rand()));
		
					// En-tête de l'e-mail						
					$headers  = "MIME-Version: 1.0 \r\n";
					$headers .= "Content-Type: multipart/related; boundary=\"$delimiteur\"\r\n";
					
					// En-têtes additionnels 
					$headers .= "From: noreply <noreply@collectus.fr> \r\n";
					$headers .= "Content-Transfer-Encoding: 8bit";
					$headers .= "\r\n";					
					
					// Sujet de l'e-mail			
					
					$subject = 'Collect\'us - Récupération de mot de passe';
					
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
					$message .= 'Vous avez souhaité obtenir votre mot de passe pour accèder à votre espace personnel <a style="font-weight:bold;text-decoration:none;color:rgb(49,73,110);" href="www.collectus.fr">Collect\'us</a>.';
					$message .= '<br/>';
					$message .= 'Vous trouverez ci-dessous vos identifiants :';
					$message .= '<br/>';
					$message .= '<br/>';
					$message .= '<div style="margin-left:30px;"><span style="font-weight:bold;">Adresse mail :</span> '.$mail_forgot;
					$message .= '<br/><span style="font-weight:bold;">Mot de passe :</span> '.$pass;
					$message .= '</div>';
					$message .= '<br/>';
					$message .= 'Pour plus de sécurité, nous vous conseillons de changer ce mot de passe à réception de ce mail.';
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
									
					if(mail($mail_forgot, $subject, $message, $headers))
					{
						$alert_forgot  = 'Un e-mail vient de vous être envoyé.<br/><br/>';
											
						setcookie("forgot", "1", time() + 30);
						unset($_POST);
					}
					else
					{
						$alert_forgot = 'Erreur lors de l\'envoi de l\'e-mail';
					}
				/** Fin mail **/
			}
		}else{
			$alert_forgot = 'Vous avez déjà fait une demande de récupération de mot de passe. Veuillez attendre au moins 30s entre chaque demande.';
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
<body onLoad="currentPage('account');">
<div id="headpage"><span>Contact : 01 77 16 87 68</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
    <?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>    
    <div id="contenu">
		<div id="imagecentrale">
			<a><img src="images/bicycle.jpg" width=1000 height=220</img></a>
		</div>
		
<?php					
		if(isset($_SESSION["id_membre"])){
		
			$nom = (isset($_SESSION["nom"])) ? $_SESSION["nom"] : null;
			$prenom = isset($_SESSION["prenom"]) ? $_SESSION["prenom"] : null;
			$raison = (isset($_SESSION["raison"])) ? $_SESSION["raison"] : null;
			$poste = (isset($_SESSION["poste"])) ? $_SESSION["poste"] : null;
			$adresse = (isset($_SESSION["adresse"])) ? $_SESSION["adresse"] : null;
			$tel = (isset($_SESSION["tel"])) ? $_SESSION["tel"] : null;
			$codepostal = (isset($_SESSION["codepostal"])) ? $_SESSION["codepostal"] : null;
			$ville = (isset($_SESSION["ville"])) ? $_SESSION["ville"] : null;
			$pass = '';
			$count_pass = strlen($_SESSION["mdp"]);
			while($count_pass > 0){
				$pass .= '*';
				$count_pass --;
			}?>
			<div id="account_menu">
				<ul>
					<li><a href="espace-infos.html">Mes Informations</a></li>
					<li><a href="demande.html">Demande de collecte</a></li>
					<li><a href="espace-devis.html">Mes devis en cours</a></li>
					<li><a href="espace-factures.html">Mes factures</a></li>
				</ul>
			</div>
			<div id="account_center">
			<?php
			
			if(isset($page) && $page=='modify'){
				if(isset($id) && $id==1){
			?>
				<form action="espace-modify-1.html" method="post">
				<p class="change">Changer mon adresse mail</p>
				<div class="new">
				<table>
				<tr><td style="padding-bottom:5px;">Votre adresse mail actuelle :</td><td style="font-weight:bold;"><?php echo $_SESSION['mail']; ?></td></tr>
				<tr><td style="padding-bottom:5px;">Nouvelle adresse mail :</td><td><input type="text" name="new_mail" /></td></tr>
				<tr><td style="padding-bottom:20px;">Confirmer nouvelle adresse mail :</td><td><input type="text" name="new_mail2" /></td></tr>
				<tr><td>Mot de passe pour confirmation :</td><td><input type="password" name="confirm_pass" /></td></tr>
				<tr><td colspan=2 style="text-align:center;"><input type="submit" name="change_mail_ok" value="Ok" /></td></tr>
				</table>
				</div>
				<?php 
				if(isset($alert_mail))
						echo '<div id="error_msg">'.$alert_mail.'</div>';
				?>
				</form>
				<?php
				}elseif(isset($id) && $id==2){
				?>
				<form action="espace-modify-2.html" method="post">
				<p class="change">Changer mon mot de passe</p>
				<div class="new">
				<table>
				<tr><td style="padding-bottom:20px;">Saisissez votre ancien mot de passe :</td><td><input type="password" name="former_pass" /></td></tr>
				<tr><td style="padding-bottom:5px;">Tapez le nouveau mot de passe :</td><td><input type="password" name="new_pass" /></td></tr>
				<tr><td>Retapez le nouveau mot de passe :</td><td><input type="password" name="new_pass2" /></td></tr>
				<tr><td colspan=2 style="text-align:center;"><input type="submit" name="change_pass_ok" value="Ok" /></td></tr>
				</table>
				</div>
				<?php
				if(isset($alert_pass))
						echo '<br><div id="error_msg">'.$alert_pass.'</div>';
				?>
				</form>
				<?php
				}else{
					header('Location:espace.php');
					exit;
				}
			}elseif(isset($page) AND $page=='devis'){
				echo '<span style="position:relative;top:10px;left:5px;color:red;">Vous n\'avez aucun devis.</span>';
			}elseif(isset($page) AND $page == 'factures'){
				echo '<span style="position:relative;top:10px;left:5px;color:red;">Vous n\'avez aucune facture.</span>';
			}elseif(isset($page) AND $page == 'infos'){
			?>
				<form action="espace.html" method="post">
				<span id="account_raison"><?php echo $raison; ?></span>
				<?php if($nom == null OR $prenom == null OR $adresse == null OR $codepostal == null OR $ville == null OR $tel == null OR $poste == null){
					echo '<span id="profil_incomplet">Votre profil n\'est pas complet<img src="images/incomplet.jpg" /></span>';
					} ?>
				<div id="mes_idents">
				<table>
				<caption>Mes identifiants</caption>
				<tr><td class="idents_td"><span class="mes_infos">Adresse mail :</span></td><td><?php echo $_SESSION["mail"]; ?><span class="change_pass">[<a href="espace-modify-1.html">modifier</a>]</span></td></tr>
				<tr><td class="idents_td"><span class="mes_infos">Mot de passe :</span></td><td><?php echo $pass; ?><span class="change_pass">[<a href="espace-modify-2.html">modifier</a>]</span></td></tr>
				</table>
				</div>
				<div id="mes_infos">
				<table>
				<caption>Mes informations<span>[<a class="change_pass" href="espace-infos-change.html">modifier/compléter</a>]</span></caption>
				<tr><td class="idents_td"><span class="mes_infos">Nom :</span></td><td>
				<?php if(isset($id) && $id=='change'){echo '<input type="text" name="nom_changed" value="'.$nom.'" placeholder="Nom" />';
				}else{
					if($nom != NULL){echo $nom;}else{echo 'NC';}
				}
				?></td></tr>
				<tr><td class="idents_td"><span class="mes_infos">Prénom :</span></td><td>
				<?php if(isset($id) && $id=='change'){echo '<input type="text" name="prenom_changed" value="'.$prenom.'" placeholder="Prénom" />';
				}else{
					if($prenom != NULL){echo $prenom;}else{echo 'NC';}
				}
				?></td></tr>
				<tr><td class="idents_td"><span class="mes_infos">Adresse :</span></td><td colspan=2>
				<?php if(isset($id) && $id=='change'){
				echo '<input type="text" name="adresse_changed" value="'.$adresse.'" placeholder="N° + nom de rue" />';
				}else{
					if($adresse != NULL){echo $adresse;}else{echo 'NC';}
				}
				?></td></tr>
				<tr><td class="idents_td"></td><td><?php if(isset($id) && $id=='change'){
				echo '<input type="text" name="codepostal_changed" value="'.$codepostal.'" placeholder="Code Postal" /><input type="text" name="ville_changed" value="'.$ville.'" placeholder="Ville" />';
				}else{
					if($codepostal != NULL){echo $codepostal;}else{ echo 'NC';}
					echo ' - ';
					if($ville != NULL){echo $ville;}else{echo 'NC';}
				}
				?></td><td></td></tr>
				<tr><td class="idents_td"><span class="mes_infos">Téléphone :</span></td><td>
				<?php if(isset($id) && $id=='change'){
				echo '<input type="text" name="tel_changed" value="'.$tel.'" placeholder="Téléphone" />';
				}else{
					if($tel != NULL){echo $tel;}else{echo 'NC';}
				}
				?></td></tr>
				<tr><td class="idents_td"><span class="mes_infos">Responsabilité :</span></td><td>
				<?php if(isset($id) && $id=='change'){echo '<input type="text" name="poste_changed" value="'.$poste.'" placeholder="Poste" />';
				}else{
					if($poste != NULL){echo $poste;}else{echo 'NC';}
				}
				?></td></tr>
				<?php if(isset($id) && $id=='change'){
				echo '<tr><td colspan=2 id="mes_coords_submit"><input type="submit" name="change2ok" value="Ok" /></td></tr>';
				}
				?>
				</table>
				</form>
				</div>
			<?php 
			}else{
		
				echo '<div id="account_collecte"><table><tr><td>Statut</td><td>Date</td><td>Heure</td><td>Commentaire</td><td>CRI</td><td>BSD</td><td>Facture</td><td>Numéro</td><td>Etat</td></tr>';
				$bdd = connexion_bdd();
				$reponse = $bdd->prepare('SELECT * FROM `collecte` WHERE ID_CLIENT='.$_SESSION["id_membre"]);
				$reponse->execute();
				if($reponse){
					if($reponse->rowCount() == 0){
						echo '<tr><td colspan="9">Vous n\'avez aucune collecte</td></tr>';
					}else{
						while($data = $reponse->fetch()){
						$datetime = explode(' ',$data["DATE"]);
						$date = explode('-',$datetime[0]);
						echo '<tr>
								<td>'.$data["STATUT"].'</td>
								<td>'.$date[2].'/'.$date[1].'/'.$date[0].'</td>
								<td>'.$datetime[1].'</td>
								<td>'.$data["COMMENTAIRE"].'</td>
								<td><a href="get_file.php?client='.$_SESSION['id_membre'].'&id='.$data['CRI'].'">Download</a></td>
								<td><a href="get_file.php?client='.$_SESSION['id_membre'].'&id='.$data['BSD'].'">Download</a></td>
								<td><a href="get_file.php?client='.$_SESSION['id_membre'].'&id='.$data['FACTURE'].'">Download</a></td>
								<td>'.$data["NUMERO"].'</td>
								<td>'.$data["ETAT"].'</td>
							</tr>';
						}
						$reponse->closeCursor();
					}
				}
				echo '</table></div>';
			}
			echo '</div>';
		}else{
			/*include('include/formulaire.php');*/			
			?>
			<div id="center2">
			<?php
			if($page=='forgotten'){
			?>	<div id="pass_forgot">
				<p class="change">Mot de passe oublié ?</p>
				<form action="espace-forgotten.html" method="post">
					<label>Entrez votre adresse mail : <input type="text" name="mail_forgot" placeholder="Adresse mail" /></label>
					<input type="submit" name="forgot_pass_ok" value="Envoyer" />
					<?php if(isset($alert_forgot))
							echo '<div id="error_msg">'.$alert_forgot.'</div>';
					?>
				</form>
				</div>
<?php
			}else{
?>
				<!--<a href="service-avantages-recyclees.html"><img src="images/pub.png" style="position:absolute;top:60px;right:20px;" width="300px;" /></a>-->
				<div id="not_logged">Vous devez vous connecter pour accéder à l'Espace Adhérent.<br>
				<a href="#login-box" onclick="javascript:document.getElementById('logina').click();" class="clique_connect" >Cliquez ici</a> pour vous connecter
				<br><br>Si vous n'avez pas de compte, <a href="inscription.html" class="clique_connect" >cliquez ici</a> pour vous inscrire.</div>
<?php
				if(isset($alert))
					echo '<br/><div id="error_msg">'.$alert.'</div>';
			}
?>
			</div>
<?php
		}
?>
	<div id="imagebas">
			<a><img src="images/bicyclebas.jpg" width=1000 height=80</img></a>
		</div>
	</div>
	<?php include('include/contact.php'); ?>

</div>
<div id="footer">
	<a class="fd" href="./index.html" title="Accueil">Accueil</a>  <a class="fd" href="footer-mentions.html" title="Mentions legales">Mentions legales</a>  <a class="fd" href="footer-plan.html" title="Plan du site">Plan du site</a>
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
