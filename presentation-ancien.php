<?php
session_start();
include('include/fonctions.php');
include('include/connexion.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?25f9E9tv9SR1QF40RtZl7pP3Jh2K7WIZ';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->

	<meta charset="UTF-8">
	<meta name="description" content="Collectus" /> 
	<meta name="keywords" content="Collecte, cartouches" /> 
	<title>Collect'us, ce que nous collectons</title>
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
<div id="headpage"><span>Collectus@</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
    <?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>
    
    <div id="contenu">
	
	<div id="imagecentrale">
			<a><img src="images/greenwall.jpg" width=1000 height=100</img></a>
		</div>
		
		<div id="account_menu">
		<ul>
					<li><a href="guide_ademe_etre_ecocitoyen_au_bureau.pdf" target="_blank">&nbspBrochure : Etre éco-citoyen au bureau</a></li>
				
		</ul>
		</div>
		
			
		<div id="center">		
			<?php			
				$menu = isset($_GET['menu']) ? $_GET['menu'] : null;
				$page = isset($_GET['page']) ? $_GET['page'] : null;
					
				include('include/chemin.php');
				include('include/title.php');
				
				
				

				echo '<div id="text">';
				
				/* MENU impression */
				
				if($menu == "premierepage")
				{				
					if($page == "collectons")
					{
						?>
						
						<!--<div id="eco_telethon">
					<div class="eco_telethon" id="eco"><img src="images/cartou.png" /><a href="service-collecte-revalorisation.html"><u>Payez moins cher !</u></a><a href="service-collecte-revalorisation.html" style="color:rgb(120,120,120)">Revalorisez votre matériel avec notre système de remise...</div>
					<div class="eco_telethon" id="ettelethon"><img src="images/telethon_accueil.png" /><a href="service-metier-telethon.html"><u>Téléthon et nous</u></a><a href="service-metier-telethon.html" style="color:rgb(120,120,120)">Chaque collecte compte. Soutenons ensemble le Téléthon...</div>
					</div>					
					<div id="gauche1"> <a href="service-recyclage-classic.html" style="color:blue">
					<img src="images/boxverte.jpg"/>
					<div id="gauche_quote"> <a href="service-recyclage-classic.html" style="color:blue"><u>Vos urnes de collecte :</u></a><br><br><a href="service-recyclage-classic.html" style="color:rgb(120,120,120)">Papier, gobelet, capsule, cartouche, mobile...<br>Chacun son urne !</a></div>			
				-->
				
				<a class="id"><em>Un unique interlocuteur, pour l'ensemble de vos déchets</em></a><br><br><br>

						<a class="bd">DEEE : Déchet Electronique</a><br><br>
						<img src="images/collectus_materiel_informatique_deee.png"  width="10%" style="float:left;padding-right:20px;padding-bottom:10px;" />
						les Déchets d'Equipements Electriques et Electroniques (informatique, téléphones…) collectés sont transportés vers un centre de tri spécialisé.
						Un Bordereau de Suivi des Déchets (BSD) vous est remis après destruction, garantissant le respect des normes de traitement et vous assurant la traçabilité.
						Sur demande, collect'us fournit egaement un relevé des numeros de serie pour vos inventaires.
						<br><br><br>
						
						<a class="bd" >PAPIER et CARTON</a><br><br>
						<img src="images/collectus_destruction_archives_papier.png" width="10%" style="float:left;padding-right:20px;" />
						Nous séparons le papier blanc, l'écrit couleur, les journaux, les magazines et le carton pour envoyer chaque matériau dans la filière appropriée (papeteries, cartonneries, etc…), 
						permettant une déperdition minimum et un recyclage maximum.
						<br><br><br><br>
						
						<a class="bd">SUPPORT CONFIDENTIEL</a><br><br>
						<img src="images/picto_secure_new.png" width="10%" style="float:left;padding-right:20px;" />
						Pour vos documents confidentiels, Papiers, Disques dur, Cd de données, repertoires téléphoniques, Collect'us garantit une collecte ainsi qu'une destruction sécurisée (contenants verrouillés et destruction par broyage) et vous fournit un certificat de destruction.
						<br><br><br><br>
												
						<a class="bd">DIB - CARTOUCHES - TONERS</a><br><br>
						<img src="images/collectus_cartouche_toner.png" width="10%" style="float:left;padding-right:20px;" />
						Les « Déchet Industriel Banal » notamment cartouches d'impression, gobelets plastiques, canettes aluminium, sont collectés et trier à la base où ils seront traités par réutilisation matière.
						<br><br><br><br><br>
						<a class="bd">DESARCHIVAGE</a><br><br>
						<img src="images/collectus_desarchivage_papier.png" width="10%" style="float:left;padding-right:20px;padding-bottom:10px;" />
						Collect'us vous accompagne pour vos opérations de désarchivage par la collecte, le tri et le recyclage de vos archives.	
						<br><br><br><br><br><br>
						<a class="bd">DECHET de FONCTIONNEMENT</a><br><br>
						<img src="images/picto_fonctionnement_new.png" width="10%" style="float:left;padding-right:20px;" />
						Les palettes, films plastiques et autres déchets d'emballages sont récupérés et triés dans des centres spécialisés
						<br><br><br><br><br>
						
					
						<a class="bd">DIS</a><br><br>
				    	<img src="images/picto_pile_new.png" width="10%" style="float:left;padding-right:20px;" />
					    Les Déchets Industriels Spéciaux (piles, néons, ampoules) sont collectés et transportés vers un centre de tri spécialisé.
						Un Bordereau de Suivi des Déchets (BSD) vous est remis après destruction, garantissant le respect des normes pour le traitement de ces déchets et vous assurant la traçabilité.
						<br><br><br><br>
						<a class="bd">MOBILIER de BUREAU</a><br><br>
						<img src="images/picto_encombrant_new.png" width="10%" style="float:left;padding-right:20px;" />
						Le mobilier de bureau, suivant son état, sera reconditionné pour être remis sur le marché ou orienté vers les déchetteries en vue de sa destruction.
						
						
				
				</div>
			
			
			
			
				<!--<div id="corps_prestation"><br>
				<table>
				<tr style="text-align:left">
					
					<td style="padding-bottom:22px"><a><img src="./images/picto_assistance.png" width="90%" onmouseover="this.src='images/picto_assistance.png';AfficherInfoBulle('picassistance')" onmouseout="MasquerInfoBulle('picassistance')" /></a></td>
					<span id="picassistance"><strong>DECHETS BUREAUTIQUES</strong><br><br>
						Un unique interlocuteur pour traiter l'ensemble de vos déchets de bureau:<br><br>
						- DEEE<br>
						- Papier et Carton<br>
						- Document Confidentiel<br>
						- Déchet Industriel Banal <br>
						- Encombrant<br>
						- Déchet de fonctionnement<br>
						- Déchet Industriel Spécial<br>
						- Désarchivage<br>
					
						
						</span>
					
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_securite.png" width="90%" onmouseover="this.src='images/picto_securite.png';AfficherInfoBulle('picsecurite')" onmouseout="MasquerInfoBulle('picsecurite')"/></a></td>
						<span id="picsecurite"><strong>SECURITE</strong><br><br>
						Destruction de vos données pour une protection totale de vos informations.</span>
										
				</tr> 
				
				<tr>
					<td style="padding-bottom:22px"><a><img src="./images/picto_site.png" width="90%" onmouseover="this.src='images/picto_site.png';AfficherInfoBulle('picsite')" onmouseout="MasquerInfoBulle('picsite')"/></a></td>
						<span id="picsite"><strong>SITE</strong><br><br>
						Nos techniciens de collecte interviennent sur site sous 48h.</span>
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_administratif.png" width="90%" onmouseover="this.src='images/picto_administratif.png';AfficherInfoBulle('picsuivi')" onmouseout="MasquerInfoBulle('picsuivi')"/></a></td>
					<span id="picsuivi"><strong>SUIVI et TRACABILITE</strong><br><br>
						Certificats de collecte, Bordereau de Suivi des Déchets et Reporting sont disponibles sur votre espace adhérent.</span>
						
					
				</tr> 
				<tr>
					<td style="padding-bottom:0px"><a><img src="./images/picto_audit.png" width="90%" onmouseover="this.src='images/picto_audit.png';AfficherInfoBulle('picaudit')" onmouseout="MasquerInfoBulle('picaudit')"/></a></td>
						<span id="picaudit"><strong>AUDIT</strong><br><br>
						Audit complète de vos besoins et de vos sites avant la mise en place du service.</span>
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_conseil.png" width="90%" onmouseover="this.src='images/picto_conseil.png';AfficherInfoBulle('picconseil')" onmouseout="MasquerInfoBulle('picconseil')"/></a></td>
					<span id="picconseil"><strong>CONSEIL et ACCOMPAGNEMENT</strong><br><br>
						Nous réalisons des études et mettons notre expertise à votre service.</span>
					
					
				</tr> 
				</table>
				</div>	-->	
				
						<?php
						echo '
						
						
						
    
						
						';
					}
					elseif($page == "equipe")
					{
					
					
					/*<br>
							<br>
							<br>
							<br>
							<video controls src="video/collectusbas.mp4" width="380" height="270" poster="images/logo.png" style="margin-left:150px">Vidéo de présentation</video>
							<br>
							<br>
							<br>*/
					
					
					
						echo '
							Situé au centre de Paris, Collect’us est une <strong>société de services de maintenance spécialisée dans la collecte et le tri-selectif de déchets bureautiques</strong>. Collect\'us s\'adresse aux entreprises,
							adimistrations, mais aussi aux prestataires de nettoyage et de l\'informatique souhaitant trouver des alternatives éfficaces pour le traitement de leurs déchets et de ceux de leurs clients.
							<br><br>Notre structure permet à nos clients de <strong>diminuer leurs coûts par le recyclage et la revalorisation</strong> de leurs déchets.
							<br>
							
							<br>
							<br>
							Vous avez besoin d’une solution de <strong>maintenance</strong> ou <strong>ponctuelle</strong> ainsi que de conseils pour la gestion de vos déchets de bureaux -
							Nous vous accompagnons dans votre projet de développement durable et mettons à votre disposition des solutions dédiées dans le respect des règlementations en vigueur (traçabilité des déchets et délivrance de bordereaux de suivi de déchets BSD).  
							<br><br>
							Toutes les trois heures, un point de collecte "Collect’us" supplémentaire est installé afin de vous fournir un réseau dense et des solutions de recyclage où que vous soyez.
							<br><br><br>
							<span style="font-style:italic;">"Nous vous remercions de la confiance que vous accordez dans la fiabilité et la compétence de l’exercice de notre métier."</span> 
							<br>
							
							
							';
							
					
					}
					
					/* PAGE Cartouche jet d\'encre d\'origine */
					
					elseif($page == "certif")
					{
						echo '	
						<h3 class="adherent">Autorisation de transport et négoce de déchets non dangereux</h3>
						<a class="bd" href="autorisation-non-dangereux.pdf" target="_blank"><img src="images/dechets dangereux.png" width="18%" style="float:left;margin: 18px 20px 0px 20px;" /></a>
						<br>
						Délivre à la SARL « COLLECT\'US », dont le siège social est situé 86 avenue du Docteur Arnold Netter à Paris l2è, 
						enregistrée au greffe du tribunal dè commerce de Paris sous le numéro 790 139 463, récépissé de ses déclarations du 07 janvier 2013,
						relatives à ses <strong>activités de collecte et de transport par route et de négoce et de courtage de <u>déchets non dangereux</u>.</strong>
						<br><br><br><br><br><br><br><br><br>
						<h3 class="adherent">Autorisation de transport et négoce de déchets dangereux</h3>
						<a class="bd" href="autorisation-dangereux.pdf" target="_blank"><img src="images/dechets non dangereux.png" width="18%" style="float:left;margin: 18px 20px 0px 20px;" /></a>
						<br>
						Délivre à la SARL « COLLECT\'US », dont le siège social est situé 86 avenue du Docteur Arnold Netter à Paris l2è, 
						enregistrée au greffe du tribunal dè commerce de Paris sous le numéro 790 139 463, récépissé de ses déclarations du 07 janvier 2013,
						relatives à ses <strong>activités de collecte et de transport par route et de négoce et de courtage de <u>déchets dangereux</u>.</strong>
							';
							
					}
					
					elseif($page == "documents")
					{
						echo '
								notre domuentation
							';
							
					}
					
					
					/* PAGE par défaut (si utilisateur modifie URL) */
					
					else
					{
						header("Status: 301 Moved Permanently", false, 301);
						header("Location: ./");
						exit;
					}
				}
				
				/* MENU Téléphone mobile */

				/*}*/
				
				/* Ce que nous collectons */
				
				
				
				
				if($menu == "secondepage")
				{
				
				if($page == "landingdeee")
					{
						echo '
						Notre service de récupération de matériel électrique et électronique usagé est mis en place de façon personnalisable. 
						Quelque soit le parc dont vous disposez, nous récupérons les PC de bureau, PC portables, écrans, imprimantes, etc...<br/><br/>
						<br>
						<u><strong>Collecte et traitement du matériel informatique avec notre service sécurisé :</strong></u><br/>
						<img src="images/picto_electronique_off.jpg" width="7%" style="float:left;margin-top:20px;margin-right:10px;" />
						<img src="images/secure_box.jpg" width="22%" style="float:left;margin-top:20px;margin-right:15px;margin-bottom:20px;" /><br/>
						Pour un service sécurisé, nous mettons à votre disposition des bacs de collecte de 50 à 350 litres. 
						Une fois rempli, fermé et scellé, votre bac est récupéré et trié  par nos soins. <br/><br/>
						Nous veillons à la garantie de l’effacement de toutes vos données personnelles et ce suivant des normes strictes. Le certificat de retour d’intervention mis à votre disposition répertoriera chacune de vos machines avec leur numéro unique d’immatriculation.<br/><br/>
						<br><br>
						<u><strong>Collecte et traitement du matériel informatique avec notre service standard :</strong></u><br/>
						<img src="images/picto_electronique_off.jpg" width="7%" style="float:left;margin-top:20px;margin-right:15px;"/>
						<img src="images/conteneurdeee.jpg" width=24%" style="float:left;margin-top:20px;margin-right:17px;"/><br/>
						Le traitement du matériel informatique et éléctronique peut également s’effectuer de façon plus simplifiée avec nos dispositifs de collecte standards.
						 <br/><br/>
						Nous ne prenons <strong>aucune</strong> responsabilité légale en cas de perte ou d’utilisation frauduleuse de données 
						<strong>avant récupération de la caisse grillagée par nos collecteurs</strong>. Nous vous recommandons donc d’effectuer l’effacement de vos données ou de garder l\'urne dans un lieu surveillé. 
						';
						
							
					}
					if($page == "landingpapier")
					{
						echo '
						<img src="images/picto_papier.png" width="7%" style="float:left;" /><img src="images/paper_secure.jpg" width=18% style="float:left; margin-left:40px; margin-right:10px;" />La législation française contraint à la destruction 
						de tous les documents ou supports qui contiennent des informations à caractère personnel. 
						Avez-vous mesuré le risque pris par votre entreprise en ne sécurisant pas la destruction de vos données papiers.
						<br/><br/>Vous protègez vos locaux contre l\'intrusion, votre informatique contre les hackers, pensez à protéger vos informations confidentiels papiers et à les faire détruire. 
						<br><br>	<br><br>		<br><br>			
						
						<img src="images/picto_papier.png" width="7%" style="float:left;" /><img src="images/boxnoire.jpg" width=15% style="float:left; margin-left:40px; margin-right:10px;" /><img src="images/boxnoirebureau.jpg" width=11% style="float:left; margin-left:0px; margin-right:20px;margin-top:40px;" />
						
						De même que le papier confidentiel, nous proposons une collecte pour tout votre papier de façon plus simplifiée avec nos dispositifs de collecte classique. 
						
						';
						
							
					}
				
				}
				
				
				
				
				
				else
				{
					
				}
				echo '</div>';	
							
			?>				
		</div>
		<div id="imagebas">
			<a><img src="images/greenwall_bas.jpg" width=1000 height=80</img></a>
		</div>
		
	</div>
	
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a class="fd" href="index.html" title="Accueil">Accueil</a>  <a class="fd" href="footer-mentions.html" title="Mentions legales">Mentions legales</a>  <a class="fd" href="footer-plan.html" title="Plan du site">Plan du site</a>
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
