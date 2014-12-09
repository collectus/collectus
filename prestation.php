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
		<!--<div id="head_title2">
			<span>Solutions de tri et recyclage de déchets<br> pour espaces de travail</span>
			</div>-->
			<div id="account_menu">
				<ul>
					
					<li><a href="guide_ademe_etre_ecocitoyen_au_bureau.pdf" target="_blank">Brochure : Etre éco-citoyen au bureau</a></li>
					
						
					
				</ul>
		</div>
			
		<!--<?php include('include/souspresentation.php'); ?>-->
		<div id="center">
			<div id="pricer_title2">
					Un service complet
			</div>
				<!--<div id="texte_corps_accueil">
				<span style="font-weight:;color:rgb(80,80,80);font-size:15px"><u>CE QUE NOUS COLLECTONS</u></span>
				</div>-->
				
				<!--<div id="eco_telethon">
					<div class="eco_telethon" id="eco"><img src="images/cartou.png" /><a href="service-collecte-revalorisation.html"><u>Payez moins cher !</u></a><a href="service-collecte-revalorisation.html" style="color:rgb(120,120,120)">Revalorisez votre matériel avec notre système de remise...</div>
					<div class="eco_telethon" id="ettelethon"><img src="images/telethon_accueil.png" /><a href="service-metier-telethon.html"><u>Téléthon et nous</u></a><a href="service-metier-telethon.html" style="color:rgb(120,120,120)">Chaque collecte compte. Soutenons ensemble le Téléthon...</div>
					</div>					
					<div id="gauche1"> <a href="service-recyclage-classic.html" style="color:blue">
					<img src="images/boxverte.jpg"/>
					<div id="gauche_quote"> <a href="service-recyclage-classic.html" style="color:blue"><u>Vos urnes de collecte :</u></a><br><br><a href="service-recyclage-classic.html" style="color:rgb(120,120,120)">Papier, gobelet, capsule, cartouche, mobile...<br>Chacun son urne !</a></div>			
				
				</div>-->
			
			
				<div id="corps_prestation"><br><br><br>
				<table>
				<tr style="text-align:left">
					
						<span id="picvide"><strong>UNE QUALITE DE SERVICES</strong><br><br>
						</span>
						
					<td style="padding-bottom:22px"><a><img src="./images/picto_assistance.png" width="90%" onmouseover="this.src='images/picto_assistance.png';MasquerInfoBulle('picsecurite');MasquerInfoBulle('picsite');MasquerInfoBulle('picsuivi');MasquerInfoBulle('picconseil');MasquerInfoBulle('picaudit');AfficherInfoBulle('picassistance')" onmouseout="" /></a></td>
					<span id="picassistance"><strong>DECHETS BUREAUTIQUES</strong><br><br>
						Nous sommes en mesure de traiter l'ensemble de vos déchets de bureau:<br><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- DEEE<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Papier et Carton<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Document Confidentiel<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Déchet Industriel Banal <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Mobilier de bureau<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Déchet de fonctionnement<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Déchet Industriel Spécial<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Désarchivage<br>
					
						
						</span>
					
				
					
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_securite.png" width="90%" onmouseover="this.src='images/picto_securite.png';MasquerInfoBulle('picassistance');MasquerInfoBulle('picsite');MasquerInfoBulle('picsuivi');MasquerInfoBulle('picconseil');MasquerInfoBulle('picaudit');AfficherInfoBulle('picsecurite')" onmouseout=""/></a></td>
						<span id="picsecurite"><strong>SECURITE</strong><br><br>
						Nous mettons en place une véritable stratégie de sécurité, depuis la collecte dans nos urnes en acier scellées jusqu'à la destruction auprès de nos partenaires agréés. 
						<br><br>
						Nous fournissons un certificat de destruction ainsi qu'un inventaire exact des pièces collectés.
						<br><br>
						Nous prenons en charge tous vos supports de données personnelles (cd, disque dur, téléphone mobile, papier confidentiel) pour une protection totale de vos informations.</span>
										
				</tr> 
				
				<tr>
					<td style="padding-bottom:22px"><a><img src="./images/picto_site.png" width="90%" onmouseover="this.src='images/picto_site.png';MasquerInfoBulle('picsecurite');MasquerInfoBulle('picassistance');MasquerInfoBulle('picsuivi');MasquerInfoBulle('picconseil');MasquerInfoBulle('picaudit');AfficherInfoBulle('picsite')" onmouseout=""/></a></td>
						<span id="picsite"><strong>INTERVENTION SUR SITE</strong>
						<br><br>Nos équipes interviennent pour l'installation et pour la collecte de votre matériel. Nous intervenons sous 72 heures maximum et de manière général dans un délais de 48h.
						<br><br> Pour tout autre question, notre asssistance téléphonnique est joignable tous les jours de 9h à 18h.
						</span>
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_administratif.png" width="90%" onmouseover="this.src='images/picto_administratif.png';MasquerInfoBulle('picsecurite');MasquerInfoBulle('picsite');MasquerInfoBulle('picassistance');MasquerInfoBulle('picconseil');MasquerInfoBulle('picaudit');AfficherInfoBulle('picsuivi')" onmouseout=""/></a></td>
					<span id="picsuivi"><strong>SUIVI et TRACABILITE</strong><br><br>
					
						Après chaque intervention, nous fournissons :
						<br><br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Un Bordereau de Suivi des Déchets BSD
						<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Un Certificats de Destruction 
						<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Un Listing détaillé de la collecte&nbsp (sur demande)
						<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Un Reporting annuel&nbsp (sur demande)
						
						<br><br>Ces documents sont accessibles et téléchargeables à tout moment sur votre espace adhérent.</span>
						
					
				</tr> 
				<tr>
					<td style="padding-bottom:0px"><a><img src="./images/picto_audit.png" width="90%" onmouseover="this.src='images/picto_audit.png';MasquerInfoBulle('picsecurite');MasquerInfoBulle('picsite');MasquerInfoBulle('picsuivi');MasquerInfoBulle('picconseil');MasquerInfoBulle('picassistance');AfficherInfoBulle('picaudit')" onmouseout=""/></a></td>
						<span id="picaudit"><strong>AUDIT</strong><br><br>
						Nous effectuons un audit complet de vos parcs et besoins avant la mise en place du service : Etat du matériel, inventaire, niveau de sécurité, locaux, accès, etc...
						<br><br>Cet audit nous permet de connaître votre fonctionnement afin d'assurer l'ensemble de nos prestations le plus efficacement possible. 
						<br><br>Cet audit donne lieu à un ensemble de recommandations qui vous aideront à mettre en application votre nouveau système de gestion des déchets.</span>
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_conseil.png" width="90%" onmouseover="this.src='images/picto_conseil.png';MasquerInfoBulle('picsecurite');MasquerInfoBulle('picsite');MasquerInfoBulle('picsuivi');MasquerInfoBulle('picassistance');MasquerInfoBulle('picaudit');AfficherInfoBulle('picconseil')" onmouseout=""/></a></td>
					<span id="picconseil"><strong>CONSEIL et ACCOMPAGNEMENT</strong><br><br>
						Afin de vous accompagner dans votre gestion quotidienne, des outils de communication personnalisés sont proposés pour sensibiliser au mieux vos collaborateurs :
						<br><br>Affiches, kakemos, campagnes mailing vous permettrons d'optimiser votre nouveau système de tri et permettre à vos prestataires de propreté de gagner du temps dans leur travail quotidien. 
						
						<br><br>
						Tout au long de votre contrat, nous vous tenons informés de l'évolution des reglementations en vigueur et vous accompagnons dans vos projets et vos choix stratégiques. 
						</span>
						
					
					
				</tr> 
				</table>
				</div>		
				
				<!--
				<div id="corps_prestation"><br><br>
				<table>
				<tr style="text-align:left">
					
					<td style="padding-bottom:22px"><a><img src="./images/picto_deee_new.png" width="90%" onmouseover="this.src='images/picto_assistance.png';AfficherInfoBulle('picassistance')" onmouseout="MasquerInfoBulle('picassistance')" /></a></td>
					<span id="picassistance"><strong>INFORMATIQUE et DEEE</strong><br><br>
						les Déchets d'Equipements Electriques et Electroniques (informatique, téléphones…) collectés sont transportés vers un centre de tri spécialisé.
						Un Bordereau de Suivi des Déchets (BSD) vous est remis après destruction, garantissant le respect des normes pour le traitement de ces déchets et vous assurant la traçabilité. 
						Sur demande de votre part, collect'us fournit egaement un relevé des numero de serie pour vos inventaire. <br>
										
						</span>
					
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_cartouche_new.png" width="90%" onmouseover="this.src='images/picto_cartouche_new.png';AfficherInfoBulle('picsecurite')" onmouseout="MasquerInfoBulle('picsecurite')"/></a></td>
						<span id="picsecurite"><strong>DIB et CARTOUCHE</strong><br><br>
						  Les « Déchet Industriel Banal » notamment cartouches d'impression, gobelets plastiques, canettes aluminium, sont collectés et triés à la base où ils seront traités par réutilisation matière.  </span>
										
				</tr> 
				
				<tr>
					<td style="padding-bottom:22px"><a><img src="./images/picto_papier_new.png" width="90%" onmouseover="this.src='images/picto_papier_new.png';AfficherInfoBulle('picsite')" onmouseout="MasquerInfoBulle('picsite')"/></a></td>
						<span id="picsite"><strong>PAPIER</strong><br><br>
						Nous séparons le papier blanc, l'écrit couleur, les journaux, les magazines et le carton pour envoyer chaque matériau dans la filière appropriée (papeteries, cartonneries, etc…), 
						 permettant une déperdition minimum et un recyclage maximum.
						</span>
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_secure_new.png" width="90%" onmouseover="this.src='images/picto_secure_new.png';AfficherInfoBulle('picsuivi')" onmouseout="MasquerInfoBulle('picsuivi')"/></a></td>
					<span id="picsuivi"><strong>SUPPORT CONFIDENTIEL</strong><br><br>
						Pour vos documents confidentiels, Papiers, Disques dur, Cd de données, repertoires téléphoniques,
						Collect'us garantit une collecte ainsi qu'une destruction sécurisée (contenants verrouillés et destruction par broyage) et vous fournit un certificat de destruction.</span>
						
					
				</tr> 
				<tr>
					<td style="padding-bottom:0px"><a><img src="./images/picto_pile_new.png" width="90%" onmouseover="this.src='images/picto_pile_new.png';AfficherInfoBulle('picaudit')" onmouseout="MasquerInfoBulle('picaudit')"/></a></td>
						<span id="picaudit"><strong>PILE et NEON</strong><br><br>
						Les Déchets Industriels Spéciaux (piles, néons, ampoules) sont collectés et transportés vers un centre de tri spécialisé. Un Bordereau de Suivi des Déchets (BSD) 
						vous est remis après destruction, garantissant le respect des normes pour le traitement de ces déchets et vous assurant la traçabilité. .</span>
					
					<td style="padding:0px 0px 0px 30px"><a><img src="./images/picto_archive_new.png" width="90%" onmouseover="this.src='images/picto_archive_new.png';AfficherInfoBulle('picconseil')" onmouseout="MasquerInfoBulle('picconseil')"/></a></td>
					<span id="picconseil"><strong>ARCHIVE</strong><br><br>
						Collect'us vous accompagne pour vos opérations de désarchivage par la collecte, le tri et le recyclage de vos archives.  Les emcombrants sont orientés vers les déchetteries en vue de leur destruction.
					</span>
					
					
				</tr> 
				</table>
				</div>-->
				
			<div id="contenu_prestation">
					
					 
					
					
			<?php			
				$menu = null;
				$page = null;
				if(isset($_GET['menu']))
					$menu = $_GET['menu'];
				if(isset($_GET['page']))
					$page = $_GET['page'];
					
				
	
				echo '<div id="text">';
				
				/* MENU impression */
				
				if($menu == "presta")
				{				
					if($page == "audit")
					{
						echo '<a class="cd"></a><br><br>
						
						
						';
					}
					elseif($page == "securite")
					{
						echo '<a class="cd"></a><br><br>
					
							
							';
							
					
					}
					
					/* PAGE Cartouche jet d\'encre d\'origine */
					
					elseif($page == "site")
					{
						echo '<a class="cd"></a><br><br>
						
						';
							
					}
					
					elseif($page == "accompagnement")
					{
						echo '<a class="cd"></a><br><br>
						
							';
							
					}
					elseif($page == "assistance")
					{
						echo '<a class="cd"></a><br><br>
						
							';
							
					}
					elseif($page == "suivi")
					{
						echo '<a class="cd"></a><br><br>
						
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
				else
				{
					
				}
				echo '</div>';	
							
			?>	
			</div>
			</div>
		
		<div id="imagebas">
			<a><img src="images/greenwall_bas.jpg" width=1000 height=80</img></a>
		</div>
		
	</div>
	
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a class="fd" href="accueil.html" title="Accueil">Accueil</a>  <a class="fd" href="footer-mentions.html" title="Mentions legales">Mentions legales</a>  <a class="fd" href="footer-plan.html" title="Plan du site">Plan du site</a>
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

prestation.onmouseout = function() {
	this.style.backgroundColor='';
	this.style.color='';
	this.style.height='55px';
	this.style.borderRadius='0px';
	document.getElementById('nav').style.borderBottomColor='white';
}

prestationbis.onmouseout = function() {
	document.getElementById('prestation').style.backgroundColor='';
	document.getElementById('prestation').style.color='';
	document.getElementById('prestation').style.height='55px';
	document.getElementById('prestation').style.borderRadius='0px';
	document.getElementById('nav').style.borderBottomColor='white';
}
-->
</script>
</body>
</html>
