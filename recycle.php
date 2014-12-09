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
<body onLoad="check_infos();">
<div id="headpage"><span>Collectus@</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
    <?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>    
    <div id="contenu">
	<?php $menu = isset($_GET['menu']) ? $_GET['menu'] : null; $page = isset($_GET['page']) ? $_GET['page'] : null; ?>
		<div id="imagecentrale">
			<a><img src="images/greenwall.jpg" width=1000 height=100</img></a>
		</div>
		<!--<div id="head_title2">
			<span>Solutions de tri et recyclage de déchets bureautiques</span>
		</div>-->
		<div id="account_menu">
		<?php 
			if($menu == "besoinponctuel")
			{
				echo '
					<ul>
					<li><a href="recycle-besoinponctuel-destruction.html">Archives & bureautique</a></li>
					<li><a href="recycle-besoinponctuel-urne.html">Outils spécialisés</a></li>
					<li><a href="recycle-besoinponctuel-tracabilite.html"> Suivi et tracabilité</a></li>
					<li><a href="recycle-besoinponctuel-complete.html">Un service complet</a></li>
					
				
					</ul>';
			}else if($menu == "besoinmaintenance")
			{
				echo '
					<ul>
					<li><a href="recycle-besoinmaintenance-volumineux.html">Equipement volumineux</a></li>
					
					<li><a href="recycle-besoinmaintenance-processus.html">Procedure d\'intervention</a></li>
					<li><a href="recycle-besoinmaintenance-demantelement.html">Nos interventions</a></li>
					
					</ul>';
			}else if($menu == "besoinconseil")
			{
				echo '
					<ul>
					<li><a href="recycle-besoinconseil-audit.html"> L\'offre</a></li>
					<li><a href="recycle-besoinconseil-auditenvironnementale.html"> Audit Environnemental</a></li>
					<li><a href="recycle-besoinconseil-accompagner.html"> Accompagnement</a></li>
					<li><a href="recycle-besoinconseil-performance.html"> Performance</a></li>
					
					</ul>';
			}else{
				header("Status: 301 Moved Permanently", false, 301);
				header("Location: ./");
				exit;
			}
		?>
		</div>		
		<div id="center">
			<?php					
				include('include/chemin.php');
				include('include/title.php');
	
				echo '<div id="text">';
				
				
				if($menu == "besoinponctuel")
				{				
					/* PAGE Cartouche laser et toner d'origine */
				
					
					if($page == "ponctuelle")
					{
						echo '
						
						Vous désirez faire évacuer du matériel et déchets afin d\'optimiser votre espace ou détruire vos supports confidentiels :
						<br><br>
					    <strong>Comment ça marche ?  </strong>
						<br>	
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>1.</strong> Effectuez votre inventaire <a class="bd" href="devis.html" target="_blank">en ligne </a>  ou contactez nous au <a class="bd">01.79.72.33.38</a> pour un audit personnalisé.				
						<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>2.</strong> Nous sommes votre unique interlocuteur pour prendre en charge votre problématique.
						<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>3.</strong> Toutes les opérations sont éffectuées en cercle fermé par nos agents afin d\'assurer confidentialité et traçabilité
						<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>4.</strong> Nous définissons ensemble la date de collecte selon vos convenances et contraintes.
						<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>5.</strong> Certificats de Destruction et Bordereaux de Suivi des Déchets vous sont délivrés après chaque intervention
							<br><br><br>
					<img src="images/technicien.jpg" width="22%" style="float:left;margin:0px 50px 0px 50px;" />
					
				
							';
					}
					
					elseif($page == "complete")
					{
						?>
						
				<div id="corps_prestation"><br><br><br>
				<table>
				<tr style="text-align:left">
					
						<span id="picvide"><strong>UNE QUALITE DE SERVICES</strong><br><br>
						</span>
						
					<td style="padding-bottom:22px"><a><img src="./images/recyclage_deee.png" width="90%" onmouseover="this.src='images/recyclage_deee.png';MasquerInfoBulle('picsecurite');MasquerInfoBulle('picsite');MasquerInfoBulle('picsuivi');MasquerInfoBulle('picconseil');MasquerInfoBulle('picaudit');AfficherInfoBulle('picassistance')" onmouseout="" /></a></td>
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
				<br><br><br><br><br>
				</div>	
				
					<?php
				echo'<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br<br><br><br><br><br><br>
				';
					}
					
					elseif($page == "urne")
					{
						echo ' 	
						
						
						Nous vous accompagnons dans la gestion de vos déchets au quotidien. Contenants et matériel personnalisé, des moyens pour aider dans le tri et le conditionnement de votre matériel et déchets.
						
						<br>
							<table border=0>
						
						</table>
						
						<br>
						<br><table border=0>
						 <span style="font-size:12px;text-align:center"></span>
						
						<tr>
							<td id="picto3"><img src="images/collectus_collecteur_papier.jpg" width=80%/></td>
							<td id="picto3"><img src="images/collectus_boxbi.jpg" width=90%/></td>
							<td id="picto6"><img src="images/conteneurdeee.jpg" width=98%/></td>
						<td id="picto6"><img src="images/boxsecurisee.jpg" width=90%/></td>
							<td id="picto3"><img src="images/collecteur_pile.png" width=50%/></td>
							
						</tr>
						<tr style="font-weight:bold;font-size:11px; text-align:center;">
							<td style="padding-top:5px;">Urne de bureau</td>
						<td style="padding-top:5px;">Urne individuelle</td>
						<td style="padding-top:5px;">Gros volume</td>
							<td>Support sécurisé</td>
							<td>Pile et Batterie</td>
							
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>Papier, DIB</td>
							<td>Papier, DIB</td>
							<td>Informatique, bureautique</td>
							<td>Papier, Disques Durs</td>
							<td>Pile</td>
							</td>
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>30x30x40 cm</td>
							<td>60x30x60 cm</td>
							<td>800 à 1200L</td>
							<td>120 à 240L</td>
							<td>25x25x70 cm</td>
							</td>
						</tr>
						</table>
						<br>
						
						
						<br><br>
							<table border=0>
						<tr>
							<td id="picto6"><img src="images/collectus_collecteur_gobelet.jpg" width=80%/></td>
							<td id="picto6"><img src="images/collectus_collecte_neon.jpg" width=105%/></td>
							
							<td id="picto7"><img src="images/boxramassage.jpg" width=100%/></td>
							<td id="picto7"><img src="images/kakemono2.jpg" width=70%/></td>
							
						</tr>
						<tr style="font-weight:bold;font-size:11px;text-align:center;">
							<td style="padding-top:5px;">Gobelet</td>
							<td>Néon</td>
							
							<td>Collecte</td>
							<td>Kakemono</td>
							
							
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>1200 gobelets</td>
							<td>50 à 1000L</td>
							
							<td>120L à 660L</td>
							<td> personnalisable</td>
							<td>.</td>
						</tr>
						</table>
						
						';
						
						
					}
						elseif($page == "destruction")
					{
						echo ' 	
						
						<br>
	Nos agents interviennent pour vos déchets bureautiques et archives papiers en étage ou sur quai.
	Le matériel que nous collectons est traité et revalorisé auprès de nos partenaires en recyclage et traitement de déchets : Veolia, Recylum, Derichebourg...
	Pour les archives, nous proposons une solution de destruction sur site par camion broyeur ou de destruction en entrepot.
	
	<br><br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong> Archives et papiers :</strong> Opération de désarchivages, conditionnement, transport et destruction avec Certificat.
	<br><br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>DEEE Déchet d\'Equipements Electriques et Eletroniques :</strong> PC, imprimante, écran, serveur, collecte ordinateur.
	<br><br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>DIS Déchets Industriels Spéciaux : </strong>Piles et batteries, toners et cartouches d\'impression, néons et lampes
	
	<br><br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>DIB Déchets Industriels Banals :</strong> Mobilier, films plastiques, consommables.	<br>
					
					


					<br><br><br>

						<img src="images/destruction-des-archives-collectus.JPG" width=200 height=170  alt="destruction archives papier desarchivage"/>
						<img src="images/destruction_ordinateurs.JPG" width=200 height=170 alt="destruction confidentielle ordinateur disque dur"/>
						<img src="images/recyclage-copieur.JPG" width=200 height=170 alt="demontage demantelement decablage machine outil industriel"/>
<br><br>
					<div id="destruction-info">
						<br><br>
						<strong>Prestations prises en charge :</strong>
						<br>Intervention en étage ou sur quai. Matériel en vrac ou conditionné sur palette.					
						
						<br> <br>
						<span style="font-weight:bold;color:rgb(32,162,118);font-size:15px">Contactez nous au 01.79.72.33.38 </span>
					</div>
					<br>
					<br>
						
						';
						
						
					}
					elseif($page == "tracabilite")
					{
						echo ' 	
						
						La traçabilité est aujourd’hui un élément primordiale pour les entreprises, c’est pourquoi Collect’us vous met a disposition un service de gestion complet et précis. 
								Après chaque intervention, nous vous délivrons les documents et certificats pour le suivi et traçabilité de vos déchets ainsi que des Reporting :
								
								<br><br>
								<strong><u>Bordereaux de Suivi des Déchets</u></strong>
								<br><br>
								<img src="images/BSD.png" width="22%" style="float:left;margin:0px 25px 0px 0;" />
								Sous un délai maximal de 30 jours à compter de la date d\'enlèvement, nous vous fournissons un exemplaire <strong>du BSD Cerfa</strong>  afin d\'assurer la traçabilité de vos déchets. Il devra être conservé 5 ans par l\'entreprise.
								
								<br><br><br>	<br><br><br>	<br><br><br> <br> <br><br><br>
								<strong><u>Certificats de Destruction :</u></strong>
								<br><br>
								<img src="images/certificat-destruction.png" width="22%" style="float:left;margin:0px 25px 0px 0;" />
								Afin d’assurer une destruction totale de vos différents supports confidentiels, nous fournissons un  <strong>Certificat de Destruction</strong>.
								Celui-ci est délivré sous 30 jours à compter de la date d\'intervention. Il accompagne le suivi photographique du traitement de vos support.								
								<br><br><br>	<br><br><br>	<br><br><br> <br> <br><br>
								
						
								<strong><u>Reportings annuels par site :</u></strong>
								<br><br>
								<img src="images/reporting.png" width="22%" style="float:left;margin:0px 25px 0px 0;" />
								Afin d’assurer un suivi régulier et détaillé mais aussi et surtout <strong>l’évolution de votre production</strong> de déchets, les axes de progression et éventuellement de nouveaux besoins de collecte ou de traitement. 
								Vos reportings vous permettront d\'avoir une vision global et synthétique de vos actions de tri, collecte et recyclage. 
								Ainsi vous pouvez évaluer concrètement votre empreinte écologique et les bénéfices sur l’environnement.
								<br><br><br>	<br><br><br>	<br><br><br> <br> <br>
																
								<strong><u>Certificats de Retour d\'Intervention</u></strong>
								<br><br>
								<img src="images/CRI.png" width="22%" style="float:left;margin:0px 25px 0px 0;" />
								Après chaque collecte, un Certificat de Retour d’Intervention est mis à votre disposition. 
								Ce document sous forme de listing comporte les informations sur le type, les quantités et les réferences du matériel collécté. Il permet de valider la traçabilité totale des déchets remis, notamment <strong>pour vos inventaires.</strong>
								<br>
								';
					
					}
					
					elseif($page == "revalorisation")
					{
						echo 'Non appliquons le principe de revalorisation afin de vous aider à diminuer vos factures de traitement des déchets.<br>
						<img src="images/retribution.png" width="100%" />';
					}
					/*elseif($page == "option")
					{
						echo 'En plus vous avez le choix des options';
					}*/
					else
					{
						header("Status: 301 Moved Permanently", false, 301);
						header("Location: ./");
						exit;
					}
				}else if($menu == "besoinmaintenance")
				{	
					
					if($page == "maintenance")
					{
						echo '
								Pour un service régulier de récupération, destruction et/ou recyclage de vos déchets bureautiques.  
					<br>
					<br>
					<strong>Comment ça marche ?  </strong>
						<br>	
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>1.</strong> Contactez nous au 01.79.72.33.38, nous vous rencontrons et faisons un audit personnalisé de vos besoins.				
						<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>2.</strong> Nous vous accompagons : Un unique contrat pour l\'ensemble de vos déchets.
						<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>3.</strong> Nous réalisons des outils de communication sur mesure : Campagnes, affiches, kakemonos, etc.
						<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>4.</strong> Vous avez un contact attitré chez Collectus pour toutes questions téchinques ou légales.
						<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>5.</strong> Vous avez accès à votre espace adhérent en ligne pour télécharger vos suivis et documents de traçabilité
						<br><br><br>
						<img src="images/technicien.jpg" width="22%" style="float:left;margin:0px 50px 0px 50px;" />
					
					';
							
					}
					
					
					
					
					elseif($page == "volumineux")
					{
						echo ' 	
					
					
						
					
					
	<br>
	Nous travaillons en étroite collaboration avec les grands groupes comme VEOLIA, GDE afin de vous accompagner dans les opérations les plus importantes. Nos experts prennent en charge le démentellement, le transport et le traitement de toutes vos machines industrielles ou de gros volume.
	<br><br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>DEEE Déchet d\'Equipements Electriques et Eletroniques :</strong> Machine outils, usinage, informatique, grand froid.
	<br><br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>DIS Déchets Industriels Spéciaux : </strong>DTQD, huiles claires, huiles solubles, aérosols.
	
	<br><br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>DIB Déchets Industriels Banals :</strong> Chute de matière , bois, métaux ferreux/non ferreux.
	<br>
					
					
					<br><br><br>

						<img src="images/desinstallation_medical.JPG" width=200 height=170  alt="destruction archives papier desarchivage"/>
						<img src="images/decablage-industriel.png" width=200 height=170 alt="destruction confidentielle ordinateur disque dur"/>
						<img src="images/demantelement-machine.png" width=200 height=170 alt="demontage demantelement decablage machine outil industriel"/>
<br><br>
					<div id="destruction-info">
					<br><br>
						<strong>Prestations prises en charge :</strong>
					<br>Démontage sur site, travail en hauteur, évacuation en étage par façade, désinstallation éléctrique...
					<br><br>
					<strong>Autre :</strong> <br>Machine outils, télécom, armoire énérgie, faux plancher, data center, groupe électrogène, cables, grand froid, ventilation.

					<br> <br>
					<span style="font-weight:bold;color:rgb(32,162,118);font-size:15px">Contactez nous au 01 79.72.33.38. </span>
					</div>
					<br>
					<br>
					



									
									';
					
					}
					elseif($page == "demantelement")
					{
						echo ' 	
				
	<br>
	

						<img src="images/collectus-machine-lourde.JPG" width=215 height=170  alt="demontage demantelement debarras machine outillage outil industriel"/>
						<img src="images/collectus_dtqd.JPG" width=215 height=170 alt="demontage demantelement decablage machine outil industriel"/>
						<img src="images/collectus-chantier.JPG" width=215 height=170 alt="demontage demantelement decablage machine outil industriel"/>
						<br><img src="images/collectus-desinstallation.JPG" width=215 height=170 alt="demontage demantelement decablage machine outil industriel"/>
						<img src="images/collectus-dtqd.JPG" width=215 height=170 alt="demontage demantelement decablage machine outil industriel"/>
						<img src="images/collectus-demontage.JPG" width=215 height=170 alt="demontage demantelement decablage machine outil industriel"/>
						<br><img src="images/collectus-recuperation-chute.JPG" width=215 height=170 alt="demontage demantelement decablage machine outil industriel"/>
					<br>
					
									
									';
					
					}


					elseif($page == "processus")
					{
						echo ' 	
						
				
					<strong>Une prestation dédiée partout en france :</strong><br>
	<br>Notre procédure est détaillée pour fournir un suivi des opérations et respect des engagements contractuels. Avec une stratégie organisée en plusieurs phases nous assurons le processus depuis l\'audit jusqu\'au traitement
	<br><br>
					<br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>Phase 1 :</strong> Planification des opérations, respect du chemin critique, sécurisation de l\'environnement. <br>
					<br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>Phase 2 :</strong> Recherche des solutions, plan d\'intervention, constitution des équipes spécialisées et qualifiées.<br>
					<br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp <strong>Phase 3 :</strong> Désinstallation, transport et traitement avec délivrance de Bordereau de Suivi des Déchets.

					
					<br><br><br>
					<strong><u>Les différentes phases du processus de collecte :</u></strong>
					<br><br>&nbsp&nbsp<img src="images/ico.png" width="1%"/>&nbsp&nbsp Parce que la sécurité est primordiale, COLLECTUS protège le site avant toute intervention.
					<br><br>
					<img src="images/organisation.png" width=680 height=361 alt="recyclage collecte debarras deee d3e informatique bureautique dechets"/>	<br><br><br>
	
									
									';
					
					}
					
					elseif($page == "tracabilite")
					{
						echo ' 	
						
						La traçabilité est aujourd’hui un élément primordiale pour les entreprises, c’est pourquoi Collect’us vous met a disposition un service de gestion complet et précis. 
								<strong>Depuis votre espace adhérent</strong>, vous pouvez gérez non seulement vos demandes de collectes, mais disposez également de reportings et de documents pour le suivi et traçabilité de vos déchets. Ceux-ci sont accessibles et téléchargeables sur votre espace :
								<br><br>
								<strong><u>Bordereaux de Suivi des Déchets</u></strong>
								<br><br>
								<img src="images/BSD.png" width="22%" style="float:left;margin:0px 25px 0px 0;" />
								Sous un délai maximal de 30 jours à compter de la date d\'enlèvement, nous vous fournissons un exemplaire <strong>du BSD Cerfa</strong>  afin d\'assurer la traçabilité de vos déchets. Il devra être conservé 5 ans par l\'entreprise.
								
								<br><br><br>	<br><br><br>	<br><br><br> <br> <br><br><br>
								<strong><u>Certificats de Destruction :</u></strong>
								<br><br>
								<img src="images/certificat-destruction.png" width="22%" style="float:left;margin:0px 25px 0px 0;" />
								Afin d’assurer une destruction totale de vos différents supports confidentiels, nous fournissons un  <strong>Certificat de Destruction</strong>.
								Celui-ci est délivré sous 30 jours à compter de la date d\'intervention. Il accompagne le suivi photographique du traitement de vos support.								
								<br><br><br>	<br><br><br>	<br><br><br> <br> <br><br>
								
						
								<strong><u>Reportings annuels par site :</u></strong>
								<br><br>
								<img src="images/reporting.png" width="22%" style="float:left;margin:0px 25px 0px 0;" />
								Afin d’assurer un suivi régulier et détaillé mais aussi et surtout <strong>l’évolution de votre production</strong> de déchets, les axes de progression et éventuellement de nouveaux besoins de collecte ou de traitement. 
								Vos reportings vous permettront d\'avoir une vision global et synthétique de vos actions de tri, collecte et recyclage. 
								Ainsi vous pouvez évaluer concrètement votre empreinte écologique et les bénéfices sur l’environnement.
								<br><br><br>	<br><br><br>	<br><br><br> <br> <br>
																
								<strong><u>Certificats de Retour d\'Intervention</u></strong>
								<br><br>
								<img src="images/CRI.png" width="22%" style="float:left;margin:0px 25px 0px 0;" />
								Après chaque collecte, un Certificat de Retour d’Intervention est mis à votre disposition. 
								Ce document sous forme de listing comporte les informations sur le type, les quantités et les réferences du matériel collécté. Il permet de valider la traçabilité totale des déchets remis, notamment <strong>pour vos inventaires.</strong>
								<br>
								';
					
					}
					elseif($page == "complete")
					{
						?>
						
				<div id="corps_prestation"><br><br><br>
				<table>
				<tr style="text-align:left">
					
						<span id="picvide"><strong>UNE QUALITE DE SERVICES</strong><br><br>
						</span>
						
					<td style="padding-bottom:22px"><a><img src="./images/recyclage_deee.png" width="90%" onmouseover="this.src='images/recyclage_deee.png';MasquerInfoBulle('picsecurite');MasquerInfoBulle('picsite');MasquerInfoBulle('picsuivi');MasquerInfoBulle('picconseil');MasquerInfoBulle('picaudit');AfficherInfoBulle('picassistance')" onmouseout="" /></a></td>
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
				<br><br><br><br><br>
				</div>	
				
					<?php
				echo'<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br<br><br><br><br><br><br>
				';
					}
					elseif($page == "urne")
					{
						echo ' 	
						
						
						Nous vous accompagnons dans la gestion de vos déchets au quotidien. Contenants et matériel personnalisé, des moyens pour aider dans le tri et le conditionnement de votre matériel et déchets.
						
						<br>
							<table border=0>
						
						</table>
						
						<br>
						<br><table border=0>
						 <span style="font-size:12px;text-align:center"></span>
						
						<tr>
							<td id="picto3"><img src="images/collectus_collecteur_papier.jpg" width=80%/></td>
							<td id="picto3"><img src="images/collectus_boxbi.jpg" width=90%/></td>
							<td id="picto6"><img src="images/conteneurdeee.jpg" width=98%/></td>
						<td id="picto6"><img src="images/boxsecurisee.jpg" width=90%/></td>
							<td id="picto3"><img src="images/collecteur_pile.png" width=50%/></td>
							
						</tr>
						<tr style="font-weight:bold;font-size:11px; text-align:center;">
							<td style="padding-top:5px;">Urne de bureau</td>
						<td style="padding-top:5px;">Urne individuelle</td>
						<td style="padding-top:5px;">Gros volume</td>
							<td>Support sécurisé</td>
							<td>Pile et Batterie</td>
							
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>Papier, DIB</td>
							<td>Papier, DIB</td>
							<td>Informatique, bureautique</td>
							<td>Papier, Disques Durs</td>
							<td>Pile</td>
							</td>
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>30x30x40 cm</td>
							<td>60x30x60 cm</td>
							<td>800 à 1200L</td>
							<td>120 à 240L</td>
							<td>25x25x70 cm</td>
							</td>
						</tr>
						</table>
						<br>
						
						
						<br><br>
							<table border=0>
						<tr>
							<td id="picto6"><img src="images/collectus_collecteur_gobelet.jpg" width=80%/></td>
							<td id="picto6"><img src="images/collectus_collecte_neon.jpg" width=105%/></td>
							
							<td id="picto7"><img src="images/boxramassage.jpg" width=100%/></td>
							<td id="picto7"><img src="images/kakemono2.jpg" width=70%/></td>
							
						</tr>
						<tr style="font-weight:bold;font-size:11px;text-align:center;">
							<td style="padding-top:5px;">Gobelet</td>
							<td>Néon</td>
							
							<td>Collecte</td>
							<td>Kakemono</td>
							
							
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>1200 gobelets</td>
							<td>50 à 1000L</td>
							
							<td>120L à 660L</td>
							<td> personnalisable</td>
							<td>.</td>
						</tr>
						</table>
						
						';
						
						
					}
					elseif($page == "adherent")
					{
						echo '
							<h3 class="adherent">Optimiser votre temps et budget</h3>
							<span class="span_adherent">
							<br>
							
							Notre solution personnalisée vous offre trois atouts majeurs : Elle vous fait gagner du temps, de l\'espace, et vous pouvez réaliser plus de 50% d\'économie sur ce que vous coûterait le traitement de vos déchets par une autre filière. 
							Plutôt que de mobiliser une partie de vos locaux pour stocker du matériel bureautique devenu inutile, Collect’us permet de récupérer cet espace afin qu’il soit source de revenus, et non synonyme de coûts. 
														
							<br><br><br>
							</span>
							<h3 class="adherent">Assurer votre sécurité et respecter vos obligations de confidentialité.</h3>
							<span class="span_adherent">
							<br>
							Nous garantissons la confidentialité des informations de vos clients et de vos collaborateurs. Nos collecteurs Secure en acier sont sécurisés de telle sorte que personne ne peut avoir accès à vos données confidentielles dans vos locaux et durant l\'enlèvement.
							<br><br><br>
							</span>
							<h3 class="adherent">Etre en règle envers vos obligations de tri.</h3>
							<br>
							<span class="span_adherent">Chaque entreprise est responsable de l\'élimination de ses déchets.
							Elle doit s\'assurer que leur élimination est conforme à la réglementation.
							Nous distinguons plusieurs classes de déchets. Chacune de ces classes impliquent des obligations réglementaires et des tarifs d\'élimination différents.
							Attention aux mélanges !
							
							<br><br><br>
							</span>
							<h3 class="adherent">Engager votre entreprise dans une démarche écologique durable et citoyenne.</h3>
							<span class="span_adherent">
							<br>
							Diminuez vos coûts de gestion des déchets et votre impact sur l\'environnement en participant aux dons associatifs. Ancrez votre entreprise dans la vie citoyenne de votre ville, votre région et ce de façon durable.
							</span>
							<br>
							Le Collect’us est heureux de vous compter parmi nos futurs adhérents et de vous accompagner dans votre projet.';
					}
					
					/* PAGE par défaut (si utilisateur modifie URL) */
					
					else
					{
						header("Status: 301 Moved Permanently", false, 301);
						header("Location: ./");
						exit;
					}
				}else if($menu == "besoinconseil")
				{	
				
					if($page == "auditenvironnementale")
					{
						echo '
							Page Audit Environemental actuellement non disponible
							';
					}
					
					elseif($page == "audit")
					{
						echo '
							Page Conseil et Expertise actuellement non disponible';
					}
					elseif($page == "accompagner")
					{
						echo '
							Page accompagnement actuellement non disponible';
					}
					
					elseif($page == "performance")
					{
						echo '
							Page performance actuellement non disponible';
					}		
					else
					{
						header("Status: 301 Moved Permanently", false, 301);
						header("Location: ./");
						exit;
					}
				}
				
				
				
				/* MENU impression */
				
				elseif($menu == "consommables")
				{				
					/* PAGE Cartouche laser et toner d'origine */
					
					if($page == "classic")
					{
						echo '
						
						<table border=0>
						
						</table>
						
						<br>
						<strong><u>Pour une collecte ne nécessitant pas une protection de vos données personnelles.</u></strong><br><br/><table border=0>
						<tr>
							<td id="picto3"><img src="images/boxjaune.jpg" width=81%/></td>
							<td id="picto3"><img src="images/boxnoire.jpg" width=81%/></td>
							<td id="picto3"><img src="images/boxrougelogo.jpg" width=80%/></td>
							<td id="picto3"><img src="images/boxverte.jpg" width=80%/></td>
							<td id="picto3"><img src="images/boxbleue.jpg" width=80%/></td>
							<td id="picto3"><img src="images/boxorange.jpg" width=80%/></td>
							<td id="picto3"><img src="images/boxmobile.png" width=64%/></td>
						</tr>
						<tr style="font-weight:bold;text-align:center;">
							<td style="padding-top:5px;">Tel. Mobile</td>
							<td>Papier</td>
							<td>Cartouche</td>
							<td>Canette</td>
							<td>Gobelet</td>
							<td>Pile</td>
							<td>Papier</td>
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>40x40x60 cm</td>
							<td>40x40x60 cm</td>
							<td>40x40x60 cm</td>
							<td>40x40x60 cm</td>
							<td>40x40x60 cm</td>
							<td>40x40x60 cm</td>
							<td>30x30x50 cm</td>
							</td>
						</tr>
						</table>
						
						<br><br><br><br>
						<strong><u>Pour une collecte spécifique ou de gros volumes.</u></strong><br><br/><table border=0>
						<tr>
							<td id="picto6"><img src="images/conteneurdeee.jpg" width=98%/></td>
							<td id="picto6"><img src="images/conteneurneon.jpg" width=105%/></td>
							<td id="picto6"><img src="images/paper_secure2.jpg" width=63%/></td>
							<td id="picto7"><img src="images/secure_box.jpg" width=100%/></td>
							
						</tr>
						<tr style="font-weight:bold;text-align:center;">
							<td style="padding-top:5px;">DEEE</td>
							<td>Néon</td>
							<td>Papier sécurisé</td>
							<td>DEEE sécurisé</td>
							
							
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>120x80x120 cm</td>
							<td>160x100x100 cm</td>
							<td>40x40x60 cm</td>
							<td>30L à 350L</td>
							
							<td>.</td>
						</tr>
						</table>
						
						';
						
						
					}
					elseif($page == "toner")
					{
						echo '
							<img src="images/picto_cartouche_off.jpg" width="7%" style="float:left;" /><img src="images/boxrouge.jpg" width="17%" style="float:left;margin:0px 20px 10px 0;" />
							Nous vous mettons à disposition des urnes de collecte de différentes tailles
							pour la collecte de vos cartouches jet d\'encre, laser et toners d\'impression.
							Les cartouches collectées seront traitées pour réutilisation afin de leur donner une seconde vie lorsque cela est possible.
							<br><br>
							Les cartouches sont à déposer avec leur film plastique d\'origine, sans aucun emballage carton, 
							afin d\'éviter une émission de poussière dans vos locaux et d\'endommager celles-ci.
							
							Les cartouches neuves que vous n\'utilisez pas sont également recyclables et sont à conserver dans leur emballage d\'origine. <br/><br/>
														
						   	<br/><br><br><br>
							<strong><a style="color:black">Afin d\'aller plus loin dans le recyclage, Collect\'us vous propose également un</a>  <a href="service-collecte-recyclees.html" style="color:green" >service de vente de cartouches recyclées : </a>
							<a style="color:black">Vous préservez l\'environnement et réduisez considerablement le montant de votre facture de consommables.</a></strong>
							
							<br><br><br>
							<strong><a class="retrouve">Quel programme choisir pour la collecte de vos cartouches :</a> 
							<br><br>
							
							- <strong><a href="devis.php" style="color:red">Cliquez-ici pour demander une enlèvement unique.</a><br><br>
							- <a href="service-recyclage-entreprises.html" style="color:red">Pour une solution de collecte personnalisée et recurrente, cliquez sur ce lien.</a><br><br><br><br>						
							
							<u>NOUS RECYCLONS EGALEMENT</u>
							
							<br><br><br><br>
							';
							
					
					}
					
					/* PAGE Cartouche jet d'encre d'origine */
					
					elseif($page == "gobelet")
					{
						echo '<img src="images/picto_gobelet.png" width="6%" style="float:left;" /><img src="images/boxbleue.jpg" width="15%" style="float:left;margin-left:10px;margin-right:15px;"/><img src="images/boxverte.jpg" width="15.8%" style="float:left;margin-left:10px;margin-right:20px;"/>
							Vos gobelets plastiques sont économiques mais restent très polluants puisque certains plastiques sont inaltérables.
							Nous vous proposons une solution de récupération de vos gobelets plastiques afin d\'insiter vos collaborateurs à réduire leurs empreintes écologiques.
							<br/><br/>
							De même, Collect\'us vous propose une solution adaptée et complète afin de recycler vos canettes en aluminium. Vous pouvez disposer vos urnes prévues à cet effet dans les lieux stratégiques de votre entreprise : Accueil, cafétéria, distributeurs automatique...
							<br/><br/>
							Afin de completer le service et répondre aux nouveaux comportements des consommateurs, Collect\'us fournit maintenant un service de collecte de vos capsules café aluminium.
							<br>
							<br> Adoptez un comportement éco-responsable avec une solution aussi bien ésthetique qu\'écologique.<br>						
							<br><br><br>
							<strong><a class="retrouve">Quel programme choisir pour la collecte de vos gobelets, canettes et capsules :</a> 
							<br><br>
								- <a href="service-recyclage-entreprises.html" style="color:red"> Pour une solution de maintenance en recyclage, cliquez sur ce lien.</a></strong>
							<br><br><br><br>
							';
							
					}
					
					elseif($page == "clientele")
					{
						echo '
								client<br><br><br><br>
							';
							
					}
					
					
					
					elseif($page == "neons")
					{
						echo '<img src="images/picto_neon.png" width="3%" style="float:left;" />
							<img src="images/conteneurneon.jpg" width="24%" style="float:left;margin-left:10px;margin-right:20px;"/>
							Nous proposons un service de collecte de vos lampes et néons usagés. Une fois le néon usagé vous n\'avez qu\'à l\'inserer dans son urne correspondante et refermer son couvercle. <br>
							<br>
							Il faut savoir que plus de 90% du poids d\'une lampe se recycle. Le verre en représente l\'essentiel notamment dans les lampes de type néon. Ce verre permettra de refabriquer des tubes  neufs, des abrasifs et des isolants.
							<br>						
							<br><br><br><br>
							<strong><a class="retrouve">Quel programme choisir pour la collecte de vos lampes et néons:</a> 
							<br><br>
							- <a href="devis.php" style="color:red" >Cliquez-ici pour vous faire collecter votre stock</a><br><br>
							- <a href="service-recyclage-entreprises.html" style="color:red"> Pour une solution de maintenance personnalisée, cliquez sur ce lien.</a></strong>
							<br><br><br><br>
							';
							
					}
					
					
					/* Page Papiers confidentiels */
					
					elseif($page == "papiers")
					{
						echo '<img src="images/picto_papier.png" width="7%" style="float:left;" /><img src="images/paper_secure.jpg" width=18% style="float:left; margin-left:40px; margin-right:10px;" />La législation française contraint à la destruction 
						de tous les documents ou supports qui contiennent des informations à caractère personnel. 
						Avez-vous mesuré le risque pris par votre entreprise en ne sécurisant pas la destruction de vos données papiers.
						<br/><br/>Vous protègez vos locaux contre l\'intrusion, votre informatique contre les hackers, pensez à protéger vos informations confidentiels papiers et à les faire détruire. 
						<br><br>	<br><br>		<br><br>			
						
						<img src="images/picto_papier.png" width="7%" style="float:left;" /><img src="images/boxnoire.jpg" width=15% style="float:left; margin-left:40px; margin-right:10px;" /><img src="images/boxnoirebureau.jpg" width=11% style="float:left; margin-left:0px; margin-right:20px;margin-top:40px;" />
						
						De même que le papier confidentiel, nous proposons une collecte pour tout votre papier de façon plus simplifiée avec nos dispositifs de collecte classique. 
						
						<br><br><br><br><br><br><br><br><br><br>
						<strong><a class="retrouve">Quel programme choisir pour la collecte de vos papiers :</a> 
						<br><br>
						- <a href="devis.php" style="color:red" >Cliquez-ici pour faire collecter vos archives et documents. </a><br><br>
						- <a href="service-recyclage-entreprises.html" style="color:red"> Pour une solution de maintenance et recyclage dans vos bureaux, cliquez sur ce lien.</a></strong>
						<br><br><br><br>
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
				
				elseif($menu == "mobile")
				{
					/* PAGE Téléphone mobile */
					
					if($page == "telephone")
					{
						echo '<u><strong>Collecte et traitement  securisé des téléphones mobiles avec notre service sécure :</strong></u><br/>
							<img src="images/picto_tel_off.jpg" width="7%" style="float:left;margin-top:20px;margin-right:15px;"/>
							<img src="images/secure_box.jpg" width="21%" style="float:left;margin-top:20px;margin-right:15px;"/><br/>
							Nous proposons des urnes de collecte sécurisées et scellées de différentes tailles.
							Une fois pleine, l\'urne est récupérée et triée par nos soins.
							Un certificat de retour d’intervention vous sera remis,
							il répertorie  chacun de vos téléphones avec leur numéro unique d’immatriculation (IMEI).<br/><br/> 
							Nous veillons à la garantie de l’effacement de toutes vos données personnelles et ce suivant des normes strictes via nos partenaires en recyclage.  
							<br/><br/><br/><br/>							
							<u><strong>Collecte et traitement des téléphones mobiles avec notre service standard :</strong></u><br/>
							<img src="images/picto_tel_off.jpg" width="7%" style="float:left;margin-top:20px;margin-right:15px;"/>
							<img src="images/boxjaune.jpg" width=17%" style="float:left;margin-top:20px;margin-right:17px;"/><br/>
							Le traitement des téléphones mobiles peut également s’effectuer de façon plus simplifiée avec nos dispositifs de collecte standards.
							 <br/><br/>
							Nous ne prenons <strong>aucune</strong> responsabilité légale en cas de perte ou d’utilisation frauduleuse de données 
							<strong>avant récupération de l\'urne par nos collecteurs</strong>. Nous vous recommandons donc d’effectuer l’effacement de vos données ou de garder l\'urne dans un lieu surveillé. 
							<br><br><br><br><br><br>
							<a class="retrouve">Quel programme choisir pour la collecte de vos téléphones mobiles :</a> 
							<br><br>
							- <strong><a href="devis.php" style="color:red">Cliquez-ici pour faire collecter un inventaire unique.</a><br><br>
							- <a href="service-recyclage-entreprises.html" style="color:red">Pour une solution de collecte personnalisée et recurrente, cliquez sur ce lien.</a>
							<br><br><br><br>
							';
							
					}
					/* PAGE Pile / CD et DVD */
					
					elseif($page == "piles")
					{
						echo'<br><img src="images/picto_pile.png" width="7%" style="float:left;" /><img src="images/boxorange.jpg" width="15%" style="float:left;margin-right:20px;margin-left:10px;"/>
							Nous proposons une solution pour votre petit matériel éléctrique et éléctronique : Piles et batteries, circuits imprimés où cd sont à inserér dans leur urne dédiée respective.
							<br><br>
							<strong> Le saviez-vous : </strong> Les piles contiennent des métaux lourds toxiques et nocifs pour l\'Environnement : Nickel - Cadmium - Mercure - Plomb...  
							Trier permet d\'éviter de polluer, mais également d\'éviter l\'extraction de nouvelles matières premières.
							<br><br><br><br><br><br>
							<a class="retrouve">Quel programme choisir pour la collecte de vos piles et cd  :</a> 
							<br><br><strong>
							- <a href="devis.php" style="color:red" >Cliquez-ici pour faire collecter votre stock. </a><br><br>
							- <a href="service-recyclage-entreprises.html" style="color:red"> Pour une solution de maintenance récurrente dans vos bureaux, cliquez sur ce lien.</a></strong>
							<br><br><br><br>
							';
					}
					
					/* Page Circuits imprimés */
					
					elseif($page == "circuits")
					{
						echo '<font style="font-style:italic;color:red;">Page en construction</font>';
					}
					/* PAGE par défaut (si utilisateur modifie URL) */
					
					else
					{
						header("Status: 301 Moved Permanently", false, 301);
						header("Location: ./");
						exit;
					}
				}
				
				/* MENU DEEE */
				
				elseif($menu == "deee")
				{
					/* PAGE PC et matériel informatique */
					
					if($page == "informatique")
					{
						echo 'Notre service de récupération de matériel électrique et électronique usagé est mis en place de façon personnalisable. 
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
							<br><br><br>
							
							<br><br>
							<strong><a class="retrouve">Organiser ses collectes :</a>
							<br><br>
							- <a href="devis.php" style="color:red" >Cliquez-ici pour faire collecter votre inventaire unique. </a><br><br>
							- <a href="service-recyclage-entreprises.html" style="color:red"> Pour une solution de maintenance personnalisée, cliquez sur ce lien.</a></strong>
							<br><br><br><br>
							';
					}
					/* PAGE Autre matériel d'impression */					
					
					elseif($page == "autre")
					{
						echo '
							
							
							  ';
					}
					
					
					
					
					/* Page par défaut (si utilisateur modifie URL) */
					
					else
					{
						header("Status: 301 Moved Permanently", false, 301);
						header("Location: ./");
						exit;
					}
				}
				
				/* Ce que nous collectons */
				
				else
				{
					
				}
				echo '</div>';				
			?>				
		</div>
		<!--<div id="imagebas">
			<a><img src="images/greenwall_bas.jpg" width=1000 height=80</img></a>
		</div>-->
		
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
