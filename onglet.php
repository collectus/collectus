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
	<title>Matériel d'impression usagé, téléphone mobile et matériel bureautique usagé</title>
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
<body onLoad="check_infos();">
<div id="headpage"><span>Contact : 01 77 16 87 68</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
    <?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>    
    <div id="contenu">
		<?php include('include/formulaire.php'); ?>
		<div id="center">
			<?php
				$page = null;
				if(isset($_GET['page']))
					$page = $_GET['page'];
				
				echo '<div id="onglets">';
				if($page == "toner"){
					echo '<h2>Matériel d\'impression</h2>';
					echo '<br/><br/> ';
					echo 'En France 19 tonnes de cartouches sont consommées chaque année soit plus de 81 millions d\'unités : 
					70 millions de cartouches jet d’encre - 11 millions de cartouches laser. 90% de ces cartouches ne sont ni triées,
					ni recyclées mais tout simplement jetées aux ordures.
					<br><br>
					Pour faciliter l\'élimination de vos cartouches d\'impression obsolètes ou usagées,
					le Collectus vous propose un service de récupération des cartouches vides et pleines sous forme de collecte.
					<br> <br>
					Une fois collectées, les cartouches valorisables par réemploi seront acheminées à nos partenaires recycleurs
					qui les reconditionnent afin de les remettre sur le marché. Celles qui ne le sont pas seront démantelées de façon
					à en recycler les matériaux constituant (plastique et résine). Elles deviendront, à l’issu du processus,
					des matières premières secondaires entrant dans la fabrication de produits neufs.
					<br><br><br>
					<img src="images/saviezvous.png" style="float:left;padding-right:15px;margin-top:6px;" />
					3.5 litres de pétroles sont nécessaires pour fabriquer une cartouche laser.
					De plus, les résidus contenus dans la cartouche sont constitués de produits chimiques et substances 
					qui doivent être traitées impérativement dans des installations spécialisées qui respectent les contraintes strictes environnementales.
					Par le recyclage vous évitez donc l’extraction de nouveaux minerais et hydrocarbure.
					<br><br><br>
					<span style="border-bottom: 2px solid rgb(12,60,108);font-size:16px;">Nous collectons...</span><br/>
					<a  style="display:inline-block;margin:10px 0;color:rgb(14,83,152)">Cartouche laser et toner d\'origine</a><br/>
					<a  style="display:inline-block;margin:0 0;color:rgb(14,83,152)">Cartouche jet d\'encre d\'origine</a><br/>
					<a  style="display:inline-block;margin:10px 0;color:rgb(14,83,152)">Autre matériel d\'impression</a>';
				}elseif($page == "mobile"){
					echo '<h2>Téléphone mobile</h2>';
					echo '<br/><br/>';
					echo 'En 2011 plus de 20 millions de téléphones mobiles ont été vendus en France. 
					Ceux sont quasiment autant de téléphones usagés qui ne sont plus en circulation.
					Pour faciliter l\'élimination de ces téléphones obsolètes ou usagés, 
					nous proposons un service de collecte et de traitement . 
					Ainsi vos téléphones  seront soient réinitialisés, 
					réparés et reconditionnés pour être remis en circulation soient ils seront démantelés de façon à en recycler le contenu.
					<br><br>
					Le Collect’us récupère tous les téléphones portables/tablettes pour être triés stockés et réacheminé vers nos prestataires
					de démentiellement agréés dans le respect des réglementations en vigueur en matière de respect de l\'environnement
					<br><br><br>					
					<img src="images/saviezvous.png" style="float:left;padding-right:15px;" />
					Plus de 70% du contenu des téléphones portables peut être recyclé  pour leur plastique, aluminium, acier.
					Par le recyclage vous préservez votre planète et évitez donc l’extraction de nouveaux minerais 
					mais également vous permettez une réduction de l’émission de CO2 nécessaire à cette extraction.
					<br/><br/><br>
					<span style="border-bottom: 2px solid rgb(12,60,108);font-size:16px;">Nous collectons...</span><br/>
					<a href="recycle.php?menu=mobile&page=mobile" style="display:inline-block;margin:10px 0;color:rgb(14,83,152)">Téléphone mobile</a>';
				}elseif($page == "informatique"){
					echo '<h2 style="text-align:left;">Déchets d\'équipements éléctriques et éléctroniques</h2>';
					echo '<br/><br/>';
					echo 'En 2012 plus de 1 million d’ordinateur de bureau, 5 millions d’ordinateurs portables et 1,5 millions de tablettes ont été vendus en France.
					Ceux sont quasiment autant d’ordinateurs usagés qui ne sont plus en circulation. 
					<br><br>
					Pour faciliter leur élimination, nous proposons un service de collecte et de traitement des DEEE (Déchets d\'Equipements Electriques et Electroniques).
					Dans certain cas ce matériel sera réinitialisé, réparé et reconditionné pour être remis en circulation. 
					Dans d’autres cas, il sera detruit façon à en recycler le contenu.
					<br><br>
					Le Collect’us récupère vos DEEE Déchets d’Equipements Electrique et Electroniques
					pour être triés stockés et réacheminé vers nos prestataires de démentiellement agréés 
					dans le respect des réglementations en vigueur en matière de respect de l\'environnement.
					<br><br><br>					
					<img src="images/saviezvous.png" style="float:left;padding-right:15px;" />
					Plus de 75% du contenu des ordinateurs peut être recyclé. Les produits chimiques contenus dans les écrans,
					notamment le mercure et le plomb, sont dangereux et nocifs. 
					Ces substances doivent être traitées impérativement dans des installations spécialisées qui respectent les contraintes strictes environnementales.
					<br/><br/><br>
					<span style="border-bottom: 2px solid rgb(12,60,108);font-size:15px;">Nous collectons...</span><br/>
					<a href="recycle.php?menu=deee&page=pc" style="display:inline-block;margin:10px 0;color:rgb(14,83,152)">PC et matériel informatique</a><br/>
					<a href="recycle.php?menu=deee&page=piles" style="display:inline-block;margin:0 0;color:rgb(14,83,152)">Piles / Cd / Circuits imprimés</a><br/>
					<a href="recycle.php?menu=deee&page=papiers" style="display:inline-block;margin:10px 0;color:rgb(14,83,152)">Papiers confidentiels</a>';
				}elseif($page == "gobelet"){
					echo '<h2 style="text-align:left;">Gobelet plastique</h2>';
					echo '<br/><br/>';
					echo 'En 2012 plus de 4 milliards de gobelets plastiques et de canettes de boissons  ont été consommés en France. 
					De même, 500 millions de capsules café sont vendus année.
					<br><br>
					Pour faciliter l\'élimination de ces déchets de grande consommation, nous proposons un service de collecte et de traitement vertueux de façon à optimiser le cycle de recyclage :
					<br><br>

					Les gobelets seront transformés en produits de lestages utilisés principalement dans l\'éléctroménager. Les capsules café et canettes de boissons sont quant à elles recyclés pour leur l’aluminium, l’acier.
					
					<br><br><br>					
					<img src="images/saviezvous.png" style="float:left;padding-right:15px;" />
					-	Moins de 1% des gobelets plastiques sont aujourd’hui recyclés en France.
					<br>
					-	Le taux de recyclage des capsules café est de 2% en France contre 50% en Allemagne
					<br>
					-	La canette est l\'emballage boisson le plus recyclé au monde : En France 57% des canettes sont recyclées contre 96% et 91% respectivement en Allemagne et en suisse.
					
					

					<br/><br/><br>
					<span style="border-bottom: 2px solid rgb(12,60,108);font-size:15px;">Nous collectons...</span><br/>
					<a href="recycle.php?menu=consommables&page=gobelet" style="display:inline-block;margin:10px 0;color:rgb(14,83,152)">Gobelet et bouteille plastique, canette, capsule café</a>';
				}elseif($page == "papier"){
					echo '<h2 style="text-align:left;">Papier</h2>';
					echo '<br/><br/>';
					echo 'La France recycle environ les deux tiers de sa production de papier, soit environ 190 kilos de papier recyclés par seconde ou encore 6 millions de tonnes.
					Pour participer à l’élimination de ces déchets, nous proposons un service de collecte et de recyclage de vos papiers.
					Le Collect’us récupère vos papiers qui seront traités dans le respect des réglementations en vigueur en matière environnementale. 
					Collecter c’est aussi prendre conscience que vous pouvez éviter de gaspiller.
					<br><br><br>					
					<img src="images/saviezvous.png" style="float:left;padding-right:15px;" />
					La France, où 4,1 millions de tonnes de papier sont consommées chaque année, n\'est pas très performante en matière de recyclage : 47 %, contre 75 % en Allemagne ou 69 % au Royaume-Uni
					<br/><br/><br><br/><br>
					<span style="border-bottom: 2px solid rgb(12,60,108);font-size:15px;">Nous collectons...</span><br/>
					<a href="recycle.php?menu=consommables&page=papiers" style="display:inline-block;margin:10px 0;color:rgb(14,83,152)">Papier et papiers confidentiels</a>';
				}else{
					header("Status: 301 Moved Permanently", false, 301);
					header("Location: ./");
					exit();
				}
				echo '</div>';
			?>				
		</div>
	</div>
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a href="./" title="Accueil">Accueil</a> - <a href="" title="Mentions legales">Mentions legales</a>
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
}
);
-->
</script>
</body>
</html>
