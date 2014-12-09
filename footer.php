<?php
session_start();
include('include/fonctions.php');
include('include/connexion.php');
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
<body onLoad="check_infos();currentPage('home');">
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
				$option=null;
				if(isset($_GET['opt']))
				$option = $_GET['opt'];
				
							
				if($option == "mentions")
				{
					echo '<div id="option">
							<strong>Copyright</strong>
							<br>
							L\'ensemble de ce site relève de la législation française et internationale sur le droit d\'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents en téléchargement et les représentations iconographiques et photographiques.
							La reproduction de toute ou partie de ce site sur un support électronique quel qu\'il soit est formellement interdite sauf autorisation express de Collect’us Sarl.
							Toute reproduction ou représentation de tout ou partie de ce site effectuée sans autorisation constitue une contrefaçon au sens des articles L 335-2 et suivants du code de la propriété intellectuelle.
							<br><br>
							<strong>Garantie</strong>
							<br>
							Toutes les informations sur notre site sont correctes. Toutefois, elles peuvent contenir des erreurs ou des inexactitudes. Collect’us Sarl se décharge de toute responsabilité quant à l\'exactitude ou l\'exhaustivité.
							Les éventuels prix que nous communiquons sur le site sont à titre indicatifs et non contractuels. Merci de prendre en compte nos conditions de reprise (logistique, quantités minimales…) afin d´étudier nos différentes offres.
							<br><br>
							<strong>Confidentialité</strong>
							<br>
							Collect’us Sarl respecte votre vie privée. Toutes vos données personnelles sur notre site internet seront soumises à la protection des données en conformité avec les réglementations en vigueur en France.
							<br><br>
							<strong>Entreprise</strong>
							<br>
							Collect’us Sarl
							<br>86 av du Docteur Arnold Netter
							<br>75012 Paris
							<br><br>
							<strong>Numéro d\'identification Intracommunautaire</strong>
							<br>FR10790139463
							<br><br>
							<strong>Numéro de Siret</strong>
							<br>79013946300018
							<br><br>
							<strong>Code APE</strong>
							<br>4779Z
							<br><br>
							<strong>Contact</strong>
							<br>Téléphone: +33 (0) 1 77 16 87 68
							<br>Mail: collectus@collectus.fr
							<br><br>
							<strong>Conception du site</strong>
							<br>Gaillot A.
							</div>';
				}else if($option == "plan"){
					echo'<div id="option"><table><tr><th><u><strong><a href="./" style="color:black;">Accueil</a></u></strong></th></tr></table>
							<table>
							<tr><td><a href="pageboutique.php">la boutique</a></td><td><a href="pageart.php">Art Gallery</a></td><td><a href="pagefranchise.php">Franchise</a></td><td><a href="pagecontact.php">Contact</a></td></tr>
							</table>
							<table>
							<br>
							<tr><th colspan=4><u><strong>Notre service</strong></u></th></tr>
							<tr style="font-weight:bold;"><td style="padding-bottom:10px;">Collect\'us</td><td>Service</td><td>Offre</td><td>Espace adhérent</td></tr>
							<tr><td><a href="presentation-premierepage-equipe.html">La société</a></td><td><a href="service-recuperation-entreprise.html">PME</a></td><td><a href="recycle-besoinponctuel-ponctuelle.html">Besoins ponctuels</a></td><td><a href="espace.html">Mon suivi</a></td></tr>
							<tr><td><a href="presentation-premierepage-collectons.html">Ce que nous collectons</a></td><td><a href="service-recuperation-grandcompte.html">Grand Compte</a></td><td><a href="recycle-besoinmaintenance-maintenance.html">Service de maintenance</a></td><td><a href="espace.html">Mes factures</a></td></tr>
							<tr><td><a href="prestation-presta-securite.html">Notre savoir faire</a></td><td><a href="service-recuperation-prestainfo.html">Prestataire informatique</a></td><td></td><td><a href="espace.html">Prevoir une collecte</a></td></tr>
							<tr><td><a href="presentation-premierepage-certif.html">Nos certifications</a></td><td><a href="service-recuperation-nettoyage.html">Société de nettoyage</a></td><td></td><td></td></tr>
							<tr><td></td><td><a href="service-recuperation-facilitymanagement.html">Facility Management</a></td></tr>
							<tr><td></td><td><a href="service-recuperation-evenementiel.html">Société de l\'évènementiel</a></td><td></tr>
							<tr><td></td><td><a href="service-recuperation-administration.html">Administration et école</a></td></tr>
							
							
							
							</table>
							
							
							</div>';
				}else if($option == "connexion"){
					echo '<div id="sign_up">
							<h3 id="see_id" class="sprited" >Formulaire de connexion</h3>
							<span>Veuillez remplir les champs</span>
							<div id="sign_up_form">
								<label><strong>Nom d\'utilisateur:</strong> <input class="sprited"/></label>
								<label><strong>Mot de passe:</strong> <input class="sprited"/></label>
								<div id="actions">
									<a class="close form_button sprited" id="cancel" href="#">Annuler</a>
									<a class="form_button sprited" id="log_in" href="#">Connexion</a>
								</div>
							</div>
							<h3 id="left_out" class="sprited">Pas encore inscrit ?</h3>
							<span><a href="#">Cliquer ici</a>pour vous inscrire !</span>
							<a id="close_x" class="close sprited" href="#">Fermer</a>
							</div>';
				}else{
					header("Status: 301 Moved Permanently", false, 301);
					header("Location: ./");
					exit();
				}
			?>
		</div>
		<div id="imagebas">
			<a><img src="images/bicycle_bas.jpg" width=1000 height=80</img></a>
		</div>
	</div>
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a href="./" title="Accueil">Accueil</a> - <a href="footer-mentions.html" title="Mentions legales">Mentions legales</a> - <a href="footer-plan.html" title="Plan du site">Plan du site</a>
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
