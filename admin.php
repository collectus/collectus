<?php

session_start();
include('include/fonctions.php');
require('include/connexion.php');

if(!isset($_SESSION["mail"]) OR $_SESSION["mail"] != "admin@collectus.fr"){
	header('Location: ./index.html');
	exit;
}
if(isset($_POST["select_raison"])){
	$_SESSION["select_raison"] = $_POST["select_raison"];
}

if(isset($_POST["submit_form_change_collecte"])){
	$statut = $_POST["statut"];
	$jour = $_POST["jour"];
	$mois = $_POST["mois"];
	$annee = $_POST["annee"];
	$heure = $_POST["heure"];
	$minute = $_POST["minute"];
	$com = $_POST["com"];
	$cri = $_POST["cri"];
	$bsd = $_POST["bsd"];
	$facture = $_POST["facture"];
	$numero = $_POST["num"];
	$etat = $_POST["etat"];
	
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
<body>
<div id="headpage"><span>Copyright © Collect'us</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
    <?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>    
    <div id="contenu">
		<div id="admin_center">
			<form name="form_select_raison" action="admin.php" method="post">
			<select name="select_raison" id="select_raison">
			<option value="0">Sélectionner un client</option>
			<?php
				$bdd = connexion_bdd();
				$id = $bdd->prepare('SELECT * FROM `collectus_user`');
				$id->execute();
				while($data = $id->fetch()){
					echo '<option value="'.$data["ID"].'"';
					if(isset($_SESSION["select_raison"]) AND $data["ID"] == $_SESSION["select_raison"]){
						echo 'selected';
					}
					echo '>'.$data["ID"].' - '.$data["RAISON"].'</option>';
				}
				$id->closeCursor();
			?>
			</select>
			<input hidden type="submit" id="submit_form_select_raison" />
			</form>
			<?php
			if(isset($_SESSION["select_raison"]) AND $_SESSION["select_raison"] != 0)
			{
				echo '<div id="admin_collecte">
				<form name="form_change_collecte" action="admin.php" method="post">
				<table><tr><td>Statut</td><td>Date</td><td>Heure</td><td>Commentaire</td><td>CRI</td><td>BSD</td><td>Facture</td><td>Numéro</td><td>Etat</td></tr>';
				$bdd = connexion_bdd();
				$reponse = $bdd->prepare('SELECT * FROM `collecte` WHERE ID_CLIENT='.$_SESSION["select_raison"]);
				$reponse->execute();
				if($reponse){
					if($reponse->rowCount() == 0){
						echo '<tr><td colspan="9" style="text-align:center;">Ce client n\'a encore aucune collecte.</td></tr>';
					}else{
						while($data = $reponse->fetch()){
						$modify=false;
						if(isset($_GET["modify"]) AND $data["ID"] == $_GET["modify"]){$modify = true;}
						$datetime = explode(' ',$data["DATE"]);
						$date = explode('-',$datetime[0]);
						$heure = explode(':',$datetime[1]);
						if($modify){
						echo '<tr>
								<td><select name="statut"><option value="non">En attente</option><option value="oui">Effectué</option></select></td>
								<td><input type="text" name="jour" />/<input type="text" name="mois" />/<input type="text" name="annee" /></td>
								<td><input type="text" name="heure" />h<input type="text" name="minute" /></td>
								<td><input type="textarea" name="com" /></td>
								<td><input hidden type="file" name="cri" id="cri" /><a href="" id="click_cri"><img src="images/upload.png" /></a></td>
								<td><input hidden type="file" name="bsd" id="bsd" /><a href="" id="click_bsd"><img src="images/upload.png" /></a></td>
								<td><input hidden type="file" name="facture" id="facture" /><a href="" id="click_facture"><img src="images/upload.png" /></a></td>
								<td><input type="text" name="num" /></td>
								<td><select name="etat"><option value="non">Non Réglée</option><option value="oui">Réglée</option></select></td>
								<td><input type="submit" value="Valider" name="submit_form_change_collecte" /></td>
							</tr>';
						}else{
						echo '<tr>
								<td>'.$data["STATUT"].'</td>
								<td>'.$date[2].'/'.$date[1].'/'.$date[0].'</td>
								<td>'.$heure[0].'h'.$heure[1].'</td>
								<td>'.$data["COMMENTAIRE"].'</td>
								<td><a href="get_file.php?client='.$_SESSION["id_membre"].'&id='.$data["CRI"].'">Download</a></td>
								<td><a href="get_file.php?client='.$_SESSION["id_membre"].'&id='.$data["BSD"].'">Download</a></td>
								<td><a href="get_file.php?client='.$_SESSION["id_membre"].'&id='.$data["FACTURE"].'">Download</a></td>
								<td>'.$data["NUMERO"].'</td>
								<td>'.$data["ETAT"].'</td>
								<td><a href="admin.php?modify='.$data["ID"].'">Modifier</a></td>
							</tr>';
						}
						}
						$reponse->closeCursor();
					}
				}
				echo '</form></table></div>';
			}
			?>
		</div>
	</div>
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a href="./index.html" title="Accueil">Accueil</a> - <a href="footer-mentions.html" title="Mentions legales">Mentions legales</a> - <a href="footer-plan.html" title="Plan du site">Plan du site</a>
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
$(document).ready(function() {

	$('#select_raison').change(function(){
		$('#submit_form_select_raison').click();
	});

	$('#click_cri').click(function() {
	$('#cri').click();
	});
	
	$('#click_bsd').click(function() {
	$('#bsd').click();
	});
	
	$('#click_facture').click(function() {
	$('#facture').click();
	});

});
-->
</script>
</body>
</html>
