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
	<title>Notre service : logistique, nos solutions, vos avantages, notre métier</title>
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
		
		<?php include('include/sousoffre.php'); ?>
		<div id="center">
			<?php
				$menu = isset($_GET['menu']) ? $_GET['menu'] : null; $page = isset($_GET['page']) ? $_GET['page'] : null;
					
				include('include/chemin.php');
				include('include/title.php');
				
				echo '<div id="text">';
				
				/* Menu Logistique */
				
				if($menu == "recyclage")
				{					
					/* Pages Nos Box Classic */
					
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
							<td>Pile/CD/PCB</td>
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
					
					/* Page Nox Box Secure */
					
					elseif($page == "secure")
					{
						echo '<img src="images/picto_secure.png" width="17%" style="position:absolute;right:20px;top:50px;" />
						Pour une collecte nécessitant une protection de vos données personnelles.<br><br><br>
						<table border=0>
						<tr>
							<td id="picto6"><img src="images/secure_box180.jpg" width=100%/></td>
							<td id="picto7"><img src="images/secure_box180.jpg" width=100%/></td>
							<td id="picto8"><img src="images/secure_box180.jpg" width=100%/></td>
							<td id="picto9"><img src="images/secure_box180.jpg" width=100%/></td>
						</tr>
						<tr style="font-weight:bold;text-align:center;">
							<td style="padding-top:10px;">300 litres</td>
							<td>150 litres</td>
							<td>50 litres</td>
							<td>20 litres</td>
						</tr>
						<tr style="font-size:10px;text-align:center;">
							<td>100x60x50 cm</td>
							<td>70x50x40 cm</td>
							<td>50x30x30 cm</td>
							<td>40x30x20 cm</td>
							<td>.</td>
						</tr>
						<tr style="font-size:12px;text-align:center;font-style:italic;">
							<td>(sur palette)</td>
						</tr>
						</table>';
					}
					
					elseif($page == "evenements")
					{
						echo '
						
						
						<strong>Pour vos événements, salons, conférences, nous vous mettons un dispositif clé en main, éphémère et rapide à installer : </strong>
						Canettes, Bouteilles Plastiques, Gobelets, Capsules café, Papiers </strong><br><br/><table border=0>
						
						
						<img src="images/conditionne.png" width="15%" style="float:left;margin-top:18px;margin-right:25px;"/><br/>
						Les urnes de collecte vous sont présenter à plat pour une facilité de stockage. En carton et polypropylène recyclable, elles sont esthétiques, légères et peuvent être montées en moins de 20 secondes. Elles trouvent aisement leur place dans les allés et recoins des salles de réunion et salons.
						
					
						<br><br><br>
						
						<tr>
							<td id="picto2"><img src="images/boxnoire.jpg" width=73% style="margin-left:25px;"/></td>
							
							<td id="picto2"><img src="images/boxbleue.jpg" width=70% style="margin-left:25px;"/></td>
							<td id="picto2"><img src="images/boxverte.jpg" width=70% style="margin-left:25px;"/></td>
						
							<td id="picto2"><img src="images/boxnoirepetite.png" width=65%style="margin-left:10px;"/></td>
							
						</tr>
						<tr style="font-weight:bold;text-align:center;">
							<td style="padding-top:5px;">Papier & <br>Prospectus</td>
							<td>Bouteille & <br>Gobelet plastique</td>
							<td>Canette & <br>Capsule alu</td>
							
							<td>Papier Small</td>
							
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>40x40x70 cm</td>
							<td>40x40x70 cm</td>
							<td>40x40x70 cm</td>
						
							<td>30x30x50 cm</td>
							
							
						</tr>
						</table>';
					}
					
					
					/* Page Bea la petite sal*pe */
					
					elseif($page == "bea")
					{
						echo '<img src="images/bea.png" style="float:left;margin-right:20px;" width="25%"/><font style="font-style:italic">
							"Un système de collecte ludique adapté aux écoles et jardins d\'enfants"</font><br/><br/>
							L\'opération Béa vise à sensibiliser vos élèves via un projet pédagogique qui leurs permet de développer la réflexion écologique et solidaire.
							Vous sensibilisez non seulement les enfants au recyclage mais également aux dons associatifs  
							pour que les générations à venir soient pleinement conscientes du développement durable et de l\'avenir de notre planète.
							<br/><br/>Nous vous fournissons, sur demande, des boîtes en carton ainsi que des outils de communication sous formes de bandes dessinées, pour promouvoir votre collecte.<br/><br/> 
							<font style="font-weight:bold;text-transform:uppercase;">Cette opération est 100% gratuite pour les établissements scolaires !</font><br/><br/>
							Cette collecte génère un don au Téléthon, association reconnue d\'utilité publique.
							En tant qu’adhérent vous faites donc preuve non seulement d\'une responsabilité environnementale mais également d\'une responsabilité sociale à travers votre engagement.';
					}
					elseif($page == "entreprises")
					{				
					echo '
							Pour un service sur mesure et personnalisé. 
					
					';
					}
				elseif($page == "evenement")
					{				
					echo 'Pour un service simple et standardisé, nous proposons des formules de collecte: 
					<br>
					<br>
					<strong>Comment ça marche ?  </strong>
						<br>	
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1. Selectionnez la formule qui vous interèsse.					
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2. Nous vous envoyons les urnes de collecte par transporteur avec un guide d\'installation et de sensibilisation.
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 3. Installez et remplissez vos urnes.
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4. Une fois que toutes les urnes sont pleines, nous passons les collecter.
						<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 5. Nous vous délivrons un Bordereau de Suivi des Déchets pour la traçabilité.
						
						
					<br><br><br>
					<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">VOIR TOUTES LES FORMULES</a>
					' ;
									
					}		
				
				
				
				elseif($page == "audit")
					{				
					echo 'auditt
					' ;
									
					}		
				
				
				
				
				elseif($page == "formule")
					{				
					echo '<a class="cle"><u>Les formules Téléphone Mobile</u></a>
						<br><br>
						<a href="service-recyclage-formulemobilea.html" id="link3"><img src="images/formule_mobile1.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulemobileb.html" id="link3"><img src="images/formule_mobile2.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulemobilec.html" id="link3"><img src="images/formule_mobile3.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulemobiled.html" id="link3"><img src="images/formule_mobile4.png"  width=88%, style="margin-left:-5px;" /></a>
						
						<br><br><br>
						<a class="cle"><u>Les formules Papier</u></a>
						<br><br>
						<a href="service-recyclage-formulepapiera.html" id="link3"><img src="images/formule_papier1.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulepapierb.html" id="link3"><img src="images/formule_papier2.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulepapierc.html" id="link3"><img src="images/formule_papier3.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulepapierd.html" id="link3"><img src="images/formule_papier4.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulepapiere.html" id="link3"><img src="images/formule_papier5.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulepapierf.html" id="link3"><img src="images/formule_papier6.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulepapierg.html" id="link3"><img src="images/formule_papier7.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formulepapierh.html" id="link3"><img src="images/formule_papier8.png"  width=88%, style="margin-left:-5px;" /></a>
						
						<br><br><br>
						<a class="cle"><u>Les formules Consommable</u></a>
						<br><br>
						<a href="service-recyclage-formuleconsoa.html" id="link3"><img src="images/formule_consommable1.png"  width=88%, style="margin-left:-5px;" /></a>
						<br><br>
						<a href="service-recyclage-formuleconsob.html" id="link3"><img src="images/formule_consommable2.png"  width=88%, style="margin-left:-5px;" /></a>
						
						';
					}
					elseif($page == "formulemobilea")
					{				
					echo '
							<img src="images/boxjaune.jpg" width="9%" style="float:left;margin:10px 15px 10px 10px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>1 urne &nbsp</strong> pour téléphone mobile : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération de l\'urne remplie sur simple appel
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>
							
								
								';
					}
					
					elseif($page == "formulemobileb")
					{				
					echo '
							<img src="images/boxjaune.jpg" width="9.5%" style="float:left;margin:20px 0px 0px 0;" /><img src="images/boxorange.JPG" width="9%" style="float:left;margin:20px 15px 0px 15px;float:bottom;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>1 urne &nbsp</strong> pour téléphone mobile : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>1 urne &nbsp</strong> pour pile : 20cm x 20cm x 20cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>
							
								';
					}
					
					elseif($page == "formulemobilec")
					{				
					echo '
							<img src="images/boxjaune.jpg" width="9%" style="float:left;margin:38px 15px 0px 15px;" /><img src="images/boxrouge.jpg" width="11.5%" style="float:left;margin:8px 25px 0 0;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>1 urne &nbsp</strong> pour téléphone mobile : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour cartouches et toners : 40cm x 40cm x 60cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>
							
							';
					}
					elseif($page == "formulemobiled")
					{				
					echo '
							<img src="images/boxjaune.jpg" width="9%" style="float:left;margin:40px 0px 0px 0;" /><img src="images/boxorange.JPG" width="9%" style="float:left;margin:37px 5px 0px 5px;float:bottom;" /><img src="images/boxrouge.jpg" width="11.5%" style="float:left;margin:14px 15px 0 0px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>1 urne &nbsp</strong> pour téléphone mobile : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>1 urne &nbsp</strong> pour pile : 20cm x 20cm x 20cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour cartouches et toners: 40cm x 40cm x 60cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>
							
							';
					}
					elseif($page == "formulepapiera")
					{				
					echo '
							<img src="images/boxnoire.jpg" width="9%" style="float:left;margin: 10px 30px 10px 10px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>20 urnes &nbsp</strong> pour papier : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>
								
							';
					}
					elseif($page == "formulepapierb")
					{				
					echo '
							<img src="images/boxnoire.jpg" width="9%" style="float:left;margin: 29px 20px 0px 10px;" /><img src="images/boxrouge.jpg" width="11.5%" style="float:left;margin:0px 25px 0px 0px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>20 urnes &nbsp</strong> pour papier : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour cartouches et toners: 40cm x 40cm x 60cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>
								
								
								';
					}
					elseif($page == "formulepapierc")
					{				
					echo '
							<img src="images/boxnoire.jpg" width="9%" style="float:left;margin: 29px 20px 0px 10px;" /><img src="images/boxbleue.jpg" width="11.5%" style="float:left;margin:0px 30px 0px 0px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>20 urnes &nbsp</strong> pour papier : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour gobelets : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>	
								
								';
					}
					elseif($page == "formulepapierd")
					{				
					echo '
							<img src="images/boxnoire.jpg" width="9%" style="float:left;margin: 27px 15px 0px 10px;" /><img src="images/boxorange.jpg" width="8.8%" style="float:left;margin:27px 25px 0px 0px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>20 urnes &nbsp</strong> pour papier : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour capsules café : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>	
								
								';
					}
					elseif($page == "formulepapiere")
					{				
					echo '
							<img src="images/boxnoire.jpg" width="9%" style="float:left;margin: 27px 20px 0px 10px;" /><img src="images/boxverte.jpg" width="11.5%" style="float:left;margin:3px 30px 0px 0px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>20 urnes &nbsp</strong> pour papier : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour canettes : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>	
								
								';
					}
					elseif($page == "formulepapierf")
					{				
					echo '
							<img src="images/boxnoire.jpg" width="9%" style="float:left;margin: 27px 4px 0px 0px;" /><img src="images/boxverte.jpg" width="11.5%" style="float:left;margin:4px 4px 0px 4px;" /><img src="images/boxbleue.jpg" width="11.7%" style="float:left;margin:0px 15px 0px 2px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>20 urnes &nbsp</strong> pour papier : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour gobelets : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour canettes : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>	
									
								
								';
					}
					elseif($page == "formulepapierg")
					{				
					echo '
							<img src="images/boxnoire.jpg" width="9%" style="float:left;margin: 28px 4px 0px 0px;" /><img src="images/boxvertesimple.jpg" width="9%" style="float:left;margin:28px 4px 0px 4px;" /><img src="images/boxbleue.jpg" width="11.5%" style="float:left;margin:0px 15px 0px 2px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>20 urnes &nbsp</strong> pour papier : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour gobelets : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour capsules : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>	
								
								';
					}
					elseif($page == "formulepapierh")
					{				
					echo '
							<img src="images/boxnoire.jpg" width="9%" style="float:left;margin: 34px 4px 0px 0px;" /><img src="images/boxvertesimple.jpg" width="9%" style="float:left;margin:34px 4px 0px 4px;" /><img src="images/boxverte.jpg" width="11.5%" style="float:left;margin:11px 4px 0px 4px;" /><img src="images/boxbleue.jpg" width="11.7%" style="float:left;margin:8px 20px 0px 3px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>20 urnes &nbsp</strong> pour papier : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour gobelets : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour capsules : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour canettes : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et BSD
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>		
								
								';
					}
					elseif($page == "formuleconsoa")
					{				
					echo '
							<img src="images/boxvertesimple.jpg" width="9%" style="float:left;margin:27px 4px 0px 4px;" /><img src="images/boxbleue.jpg" width="11.5%" style="float:left;margin:0px 20px 0px 3px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour gobelets : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour capsules : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication pour la mise en place
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et Borderau de Suivi des Déchets 
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>		
								';
					}
					elseif($page == "formuleconsob")
					{				
					echo '
							<img src="images/boxvertesimple.jpg" width="9%" style="float:left;margin:30px 4px 0px 4px;" /><img src="images/boxverte.jpg" width="11.5%" style="float:left;margin:4px 4px 0px 4px;" /><img src="images/boxbleue.jpg" width="11.8%" style="float:left;margin:0px 20px 0px 3px;" />
							<strong>Cette offre globale comprend :</strong>
							<br>
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour gobelets : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour capsules : 30cm x 30cm x 50cm
							<br> <img src="images/fleche_inscription.png" />&nbsp <strong>2 urnes &nbsp</strong> pour canettes : 30cm x 30cm x 80cm
							<br> <img src="images/fleche_inscription.png" />&nbsp Les outils de communication et livret d\'explication
							<br> <img src="images/fleche_inscription.png" />&nbsp La récupération des urnes une fois toutes remplies 
							<br> <img src="images/fleche_inscription.png" />&nbsp La délivrance d\'un Certificat d\'Intervention et BSD
						   	
							<br><br><br><br>
							<strong><a class="retrouve">Commander maintenant : 01.77.13.18.55</a> 
							<br><br><br><br>
							<a href="service-recyclage-formule.html" onclick="document.getElementById("logina").click();" id="demande_formule">retourner aux formules</a>		
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
				
				/* Menu Solutions */
				
				elseif($menu == "recuperation")
				{					
					/* Page Grands Groupes */
					
					if($page == "pme")
					{
						echo '
						Vous souhaitez engager votre entreprise dans une politique de développement durable qui inclura l’ensemble des salariés dans un projet commun :
						A savoir l’élaboration d’un système performant de gestion responsable de vos déchets avec une assistance permanente qui permettra de prévenir les évolutions règlementaires, législatives présentes et à venir.
						Collect’us est votre unique prestataire pour la gestion de vos déchets de bureau :
						
						<br><br><img src="images/groupe.jpg" width="40%" style="float:left;padding-right:20px" />
						
						
						<br>- Un unique interlocuteur pour une gestion de l\'ensemble de vos déchets de bureaux<br>
						<br>- Un service de tri sélectif innovant et avantageux<br>
						<br>- Un accompagnement de vos collaborateurs pour une meilleure sensibilisation sur les gestes écologiques<br>
						<br>- Des outils de traçabilité en adéquation avec les règlementations en vigueur.<br>
						<br>- Un système de revalorisation de vos déchets recyclables vertueux et 100% de vos déchets traités en France. <br>

						
						
					';
					}
					
					elseif($page == "salons")
					{
						echo '
						
						
						<strong>Pour vos événements, salons, conférences, nous vous mettons un dispositif clé en main, éphémère et rapide à installer : </strong>
						Canettes, Bouteilles Plastiques, Gobelets, Capsules café, Papiers </strong><br><br/><table border=0>
						
						
						<img src="images/conditionne.png" width="15%" style="float:left;margin-top:18px;margin-right:25px;"/><br/>
						Les urnes de collecte vous sont présenter à plat pour une facilité de stockage. En carton et polypropylène recyclable, elles sont esthétiques, légères et peuvent être montées en moins de 20 secondes. Elles trouvent aisement leur place dans les allés et recoins des salles de réunion et salons.
						
					
						<br><br><br>
						
						<tr>
							<td id="picto2"><img src="images/boxnoire.jpg" width=73% style="margin-left:25px;"/></td>
							
							<td id="picto2"><img src="images/boxbleue.jpg" width=70% style="margin-left:25px;"/></td>
							<td id="picto2"><img src="images/boxverte.jpg" width=70% style="margin-left:25px;"/></td>
						
							<td id="picto2"><img src="images/boxnoirepetite.png" width=65%style="margin-left:10px;"/></td>
							
						</tr>
						<tr style="font-weight:bold;text-align:center;">
							<td style="padding-top:5px;">Papier & <br>Prospectus</td>
							<td>Bouteille & <br>Gobelet plastique</td>
							<td>Canette & <br>Capsule alu</td>
							
							<td>Papier Small</td>
							
						</tr>
						<tr style="font-size:10px;text-align:center">
							<td>40x40x70 cm</td>
							<td>40x40x70 cm</td>
							<td>40x40x70 cm</td>
						
							<td>30x30x50 cm</td>
							
							
						</tr>
						</table>';
					}
					
					elseif($page == "grandcompte")
					{
						echo 'Vous êtes directeur des frais généraux, directeur de développement durable et souhaitez trouver une solution de tri sélectif et de recyclage qui vous permettra d’optimiser vos coûts liés à la gestion de vos déchets mais aussi de réduire l’empreinte écologique de votre entreprise.
						Collect’us est votre prestataire et partenaire pour optimiser et développer le tri sélectif au sein de votre entreprise :<br><br>
						<img src="images/collectus_prestation_grand_compte.jpg" width="40%" style="float:left;padding-right:20px" />
						- Un process de tri sélectif, collecte, recyclage de très haute performance répondant à la certification HQE exploitation<br>
						<br>- Une prise en charge complète pour une meilleure sensibilisation de vos collaborateurs et une meilleure communication pour accompagner tous les salariés et le personnel d’entretien dans leurs démarche de tri et recyclage.<br>
						<br>- Un audit complet permettant d’assurer un suivi et une évaluation réel de la prestation grâce à des outils de traçabilité règlementaires.<br>
						<br>- Une gestion intégrale des déchets par un unique prestataire.<br>
						<br>- Une solution de tri locale pour un traitement des déchets exclusivement national. <br>

					
						
											
					';
					}
					elseif($page == "prestainfo")
					{
						echo 'Vous êtes prestataire informatique et vous souhaitez compléter votre service en proposant de récuperer le matériel et de protéger les données confidentielles de vos clients. 
						Vous assurez le renouvellement de leur matériel hors service ou obsolète et optimisez leurs espaces de travail. 
						<br><br>
						<img src="images/recyclage_prestataire_informatique.jpg" width="40%" style="float:left;padding-right:20px" />
						<strong>Collect’us offre un service complet à votre clientèle :</strong><br><br>

						- Une prise en charge des exigences et contraintes de vos clients.<br><br>
						- L’assurance du traitement et de la traçabilité des collectes.<br><br>
						- Une solution sur mesure quelque soit votre client.<br><br>
						- L’accès à de nouveaux services écologique de collecte.

											
					';
					}
															
					elseif($page == "nettoyage")
					{
						echo 'Vous êtes une société de nettoyage, proposez une solution unique de gestion des déchets complémentaire aux services que vous proposez actuellement à vos clients :<br><br>
							<img src="images/recyclage_prestataire_nettoyage.jpg" width="30%" style="float:left;padding-right:20px" />
							- Une offre sur mesure de gestion des déchets<br><br>
							- Un interlocuteur unique pour une gestion plus simple<br><br>
							- Des formations pour votre personnel et celui de vos clients<br><br>
							- Un  traitement de vos déchets 100% français pour un meilleur suivi<br><br>
							- Des outils de suivi et une traçabilité<br><br>
							';
						
						
						}
															
					elseif($page == "facilitymanagement")
					{
						echo 'Avec Collect’us, vos clients bénéficient :
						Vous êtes un Facility Manager et vous souhaitez trouver un prestataire prenant en charge l’intégralité des déchets recyclables de votre client.
						Vous recherchez un prestataire réactif et avez pour objectif d’optimiser le rendement énergétique et opérationnel de vos bâtiments.  Collect’us vous propose un service innovant :<br><br>
						<img src="images/facilitym.jpg" width="30%" style="float:left;padding-right:20px" />
						- Une prise en charge intégrale de tous vos déchets recyclables peu importe le secteur d’activité<br>
						<br>- Des formations et une sensibilisation auprès des utilisateurs finaux (employés, visiteurs, …) et des techniciens de surface<br>
						<br>- Une optimisation du tri sélectif dans les locaux<br>
						<br>- Un suivi et une évaluation de la prestation grâce à des outils de traçabilité complets et précis<br>
					';
					}	
						
					elseif($page == "evenementiel")
					{
						echo 
						'					
						
						Vous organisez des réceptions, salons, conférences ou tout autres événements ;
						Collect’us  propose un programme simple et complet via nos solutions clé en main de tri et recyclage pour vos invités et visiteurs : <br><br>
						<img src="images/meeting.png"  width=29% style="float:left;margin-left:10px;margin-right:25px;padding-bottom:20px;" />	
						-Une gestion organisée et complète de l’ensemble de vos déchets.<br>
						<br>-Une mise en place rapide et personnalisée.<br>
						<br>-Une sensibilisation et une communication auprès des exposants et visiteurs.<br>
						<br>-Un service écologique et économique.<br>
						
						
						';
					}
					
					/* Page Administration */
					
					elseif($page == "administration")
					{
						echo 'Vous êtes un administration, une école ou une collectivité et désirez mettre à disposition de vos agents, déjà sensibilisés au tri selectif, des solutions globales de gestion des déchets.  
						Collect\'us vous propose des collectes et un suivi de vos différentes consommations internes :
						<br><br>
						<img src="images/recyclage_administrations.jpg" style="float:left;margin-right:20px;" width="35%"/>
						-Un suivi et  une évaluation de la prestation grâce à des outils de traçabilité précis et légaux.<br><br>
						-Des collectes récurrentes ou ponctuelles pour vos administrés qui sont accompagnés et sensibilisés.<br><br>
						-Un interlocuteur unique et dédié pour la gestion de vos déchets.<br><br>
						-Des outils de collecte 100% recyclables.<br><br>
						-Tous vos déchets traités en France pour une meilleure transparence.<br><br>
						-Un service respectueux des principes du Grenelle de l’environnement et en adéquation avec les réglementations actuelles et à venir.<br><br>

						
						<br><br><br>
						<img src="images/bea.png" style="float:right;margin-right:20px;" width="25%"/><font style="font-style:italic">
						"Un système de collecte ludique adapté aux écoles et jardins d\'enfants"</font><br/><br/>
							L\'opération Béa vise à sensibiliser les élèves via un projet pédagogique qui leur permet de développer une réflexion écologique et solidaire.
							<br/><br/>Nous fournissons des outils de communication sous formes de bandes dessinées téléchargeable pour promouvoir vos collectes :
							<a class="bd" href="bdpleine.pdf" target="_blank">BD remplie</a> / <a class="bd" href="bd1vide.pdf" target="_blank">BD à remplir</a><br/><br/> 
												
							
						';
					}
					
					/*
					img src="images/secure_classic.png" class="secure_classic" id="admin_secure_classic" />
						<span class="secure_classic offre_span" id="admin_tout">Tout votre matériel <font style="font-weight:bold;">sans conditions</font> :<br/>
						&nbsp;- Mobiles<br/>
						&nbsp;- Matériel d\'impression<br/>
						&nbsp;- Matériel informatique</span>
						<img src="images/classic.png" class="secure_classic" id="admin_classic" />
						<span class="secure_classic offre_span" id="admin_sous">Produits <font style="font-weight:bold;">revalorisables</font><br> uniquement.<br>
						<font style="font-size:12px;font-style:italic;">Pour plus d\'informations, contacter notre service.</font></span>
					
					<img src="images/eco-admin.png" usemap="#Map4" style="float:right;margin-right:-10px;" />
						<img src="images/standard-admin.png" usemap="#Map3" style="margin-left:35px;" />
						<map name="Map3">
							<area shape="rect" coords="153,98,263,113" OnMouseOver="AfficherInfoBulle(\'admin_secure_classic\');" OnMouseOut="MasquerInfoBulle(\'admin_secure_classic\');" />
							<area shape="rect" coords="143,166,174,180" OnMouseOver="AfficherInfoBulle(\'admin_tout\');" OnMouseOut="MasquerInfoBulle(\'admin_tout\');" />
						</map>
						<map name="Map4">
							<area shape="rect" coords="126,98,198,113" OnMouseOver="AfficherInfoBulle(\'admin_classic\');" OnMouseOut="MasquerInfoBulle(\'admin_classic\');" />
							<area shape="rect" coords="36,146,136,161" OnMouseOver="AfficherInfoBulle(\'admin_sous\');" OnMouseOut="MasquerInfoBulle(\'admin_sous\');" />
						</map>
						
						<font style="font-weight:bold;text-transform:uppercase;">L\'opération de collecte de cartouche est 100% gratuite pour les établissements scolaires</font><br/><br/>
							
						*/
					
					/* Page Etablissement scolaire */
					
					elseif($page == "etablissement")
					{
						echo '<img src="images/bea.png" style="float:left;margin-right:20px;" width="25%"/><font style="font-style:italic">
						"Un système de collecte ludique adapté aux écoles et jardins d\'enfants"</font><br/><br/>
							L\'opération Béa vise à sensibiliser vos élèves via un projet pédagogique qui leur permet de développer la réflexion écologique et solidaire.
							Vous sensibilisez non seulement les enfants au recyclage mais egalement aux dons associatifs  
							pour que la génération qui arrive soit pleinement consciente du développement durable et de l\'avenir de notre planete.
							<br/><br/>Nous vous fournissons des boîtes en carton ainsi que des outils de communication sous formes de bandes dessinées téléchargeables,
							disponibles sur notre site, pour promouvoir votre collecte.
							<a class="bd" href="bdpleine.pdf" target="_blank">BD remplie</a> / <a class="bd" href="bd1vide.pdf" target="_blank">BD à remplir</a><br/><br/> 
							<font style="font-weight:bold;text-transform:uppercase;">L\'opération de collecte de cartouche est 100% gratuite pour les établissements scolaires</font><br/><br/>
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
				
				/* Menu Avantages */
				
				elseif($menu == "collecte")
				{
										
					/* Page Effacement des données */
					
					if($page == "donnees")
					{
						echo '<font style="font-style:italic;color:red;">Page en construction</font>';
					}
					
					/* Page Service Adhérent */
					
					
					
					/* Page Réglementation */
					
					
					
					/* Page Retribution */
					
					
					
					/* Page Retribution */
					
					elseif($page == "recyclees")
					{
						echo 'En vous fournissant chez Collect\'us, vous réduisez le montant de votre facture de consommables.
						<br><br>Via nos partenaires industriels, Collect\'us est en mesure de vous proposer un service de vente de cartouches recyclées de qualité, en accord avec nos principes de respect de l\'environnement,
						et ce à des prix attractifs peu importe votre parc d\'imprimantes. 
						<br><br>Vous pouvez dors et déjà passer votre commande par mail ou au 01.77.16.87.68.
						<br><img src="images/marques.png" style="display:block;margin:auto;margin-top:20px;" />';
					}
					
					/* Page par défaut (si utilisateur modifie URL) */
					
					else
					{
						header("Status: 301 Moved Permanently", false, 301);
						header("Location: ./");
						exit;
					}
				}
				
				/* Menu Notre Métier */
				
				elseif($menu == "metier")
				{
					/* Page Qui sommes-nous */
					
					if($page == "collectus")
					{
						echo '
							Le Collect’us est une <strong>société de services de maintenance spécialisée dans la collecte et le tri-selectif</strong>, dédiée aux entreprises, professionnels et organisateurs d\'évènements.
							<br>Notre structure permet à nos adhérents de <strong>diminuer leurs coûts de maintenance par le recyclage et la revalorisation</strong> de leurs déchets.
							
							<br><br>
							Situé au centre de Paris, notre réseau de collecte couvre l\'ensemble de l\'Ile de France.			
							Notre cœur de métier est la récupération, la collecte et le tri des outils bureautiques et consommables usagés : 
							Gobelet plastique, bouteille plastique, capsule café, canette, cartouches d\'impression, téléphones mobiles, matériel informatique usagés, etc.
							
							<br>
							<br><img src="images/ggroupes.png" width="40%" style="float:left;padding-right:20px" />
							Vous avez besoin d’une solution de <strong>maintenance</strong> ou <strong>ponctuelle</strong> ainsi que de conseils pour la gestion de vos déchets de bureaux -
							Nous vous accompagnons dans votre projet de développement durable et mettons à votre disposition des solutions dédiées dans le respect des règlementations en vigueur (traçabilité des déchets et délivrance de bordereaux de suivi de déchets BSD). Par ailleurs, nos solutions sont aussi bien écologiques qu\'économiques via notre système de remises sur votre matériel revalorisable.
							<br><br>Le Collect’us met également en place des campagnes de sensibilisations et participe à l\'action du Téléthon. 
							Toutes les trois heures, un point de collecte "Collect’us" supplémentaire est installé afin de vous fournir un réseau dense et des solutions de recyclage où que vous soyez.
							<br><br><br><br><br>
							<span style="font-style:italic;">"Nous vous remercions de la confiance que vous accordez dans la fiabilité et la compétence de l’exercice de notre métier."</span> 
							<br><br>';
					}
					
					/* Page Nos procédés */
					
					elseif($page == "procedes")
					{
						echo 'Notre savoir-faire et faire-savoir nous permet de mettre en place une prestation de qualité et optimisée pour la récupération de matériel bureautique.
						<Br><Br>
						<span style="font-weight:bold;color:rgb(10,60,108);text-transform:uppercase;"><u>Avant votre collecte</u></span>
						<Br><Br>
						<span style="font-weight:bold;">Mise en place d’une solution adaptée :</span> 
						Vous choisisssez un programme de collecte parmi nos trois solutions proposées : <a href="service-recyclage-entreprises.html" style="color:rgb(14,83,152)">Solution Personnalisée</a>  , <a href="service-recyclage-evenement.html" style="color:rgb(14,83,152)">Solution Clé en Main</a>  , <a href="devis.php" style="color:rgb(14,83,152)">Solution Ponctuelle</a>.
						<Br><Br>
						<span style="font-weight:bold;">Notre service :</span> 
						Nous sommes à votre service pour vous conseiller et vous accompagner dans votre démarche.
						<Br><Br>
						<span style="font-weight:bold;">Installation et remplissage :</span> 
						Une fois que les urnes de collecte sont installées, il ne vous reste plus qu\'à les remplir. Nos bacs 100% recyclables auront toute leur place dans vos locaux.
						<Br><Br><Br>
						<span style="font-weight:bold;color:rgb(10,60,108);text-transform:uppercase;"><u>Collecte </u></span>
						<Br><Br>
						<span style="font-weight:bold;">Collecte : </span>
						Sur simple demande de votre part (via mail, internet ou téléphone) ou à une fréquence déterminée, 
						nos techniciens de collecte viendront récupérer et remplacer vos bacs.
						<Br><Br>
						<span style="font-weight:bold;">Délivrance des documents légaux :</span>
						Après chaque passage nous vous délivrons le Certificat de Retour d\'Intervention ainsi que le Bordereau de Suivi des Déchets (BSD) afin de répondre à vos obligations de traçabilité.
						<Br><Br><Br>
						<span style="font-weight:bold;color:rgb(10,60,108);text-transform:uppercase;"><u>Après votre collecte</u></span>
						<Br><Br>
						<span style="font-weight:bold;">Tri & Stockage:</span>
						Tri du matériel recyclable pour réutilisation ou pour revalorisation énergétique.
						<Br><Br>
						<span style="font-weight:bold;">Approvisionnement des industriels :</span> 
						Les consommables valorisables pour réutilisation sont acheminés à nos partenaires "recycleurs" qui les retraitent et les reconditionnent afin de les remettre sur le marché.
						<Br><Br>
						<span style="font-weight:bold;">Autres filières de valorisation :</span>  
						Les consommables non valorisables pour réutilisation sont envoyés à des sociétés spécialisées dans le démantèlement,
						garantissant ainsi le recyclage intégral de tous les composants.';
					}
					
					
					elseif($page == "certifications")
					{
						echo '
						<br>
						<h3 class="adherent">Autorisation de transport et négoce de déchets non dangereux</h3>
						<a class="bd" href="autorisation-non-dangereux.pdf" target="_blank"><img src="images/dechets dangereux.png" width="30%" style="float:left;margin: 18px 20px 0px 20px;" /></a>
						<br>
						Délivre à la SARL « COLLECT\'US », dont le siège social est situé 86 avenue du Docteur Arnold Netter à Paris l2è, 
						enregistrée au greffe du tribunal dè commerce de Paris sous le numéro 790 139 463, récépissé de ses déclarations du 07 janvier 2013,
						relatives à ses <strong>activités de collecte et de transport par route et de négoce et de courtage de <u>déchets non dangereux</u>.</strong>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<h3 class="adherent">Autorisation de transport et négoce de déchets dangereux</h3>
						<a class="bd" href="autorisation-dangereux.pdf" target="_blank"><img src="images/dechets non dangereux.png" width="30%" style="float:left;margin: 18px 20px 0px 20px;" /></a>
						<br>
						Délivre à la SARL « COLLECT\'US », dont le siège social est situé 86 avenue du Docteur Arnold Netter à Paris l2è, 
						enregistrée au greffe du tribunal dè commerce de Paris sous le numéro 790 139 463, récépissé de ses déclarations du 07 janvier 2013,
						relatives à ses <strong>activités de collecte et de transport par route et de négoce et de courtage de <u>déchets dangereux</u>.</strong>
					   
					   
						
					
					';
					}
					elseif($page == "documentation")
					{
						echo '
						<br>
						<h3 class="adherent">Guide : Etre éco-citoyen au bureau</h3>
						<a class="bd" href="guide_ademe_etre_ecocitoyen_au_bureau.pdf" target="_blank"><img src="images/Ecocitoyen.png" width="30%" style="float:left;margin: 18px 20px 0px 0px;" /></a>
						<br>
						Tout savoir sur votre comportement éco-citoyen à adopter au bureau.</strong>
						<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
						<h3 class="adherent">One pager : Presentation Collect\'Us</h3>
						<a class="bd" href="quisommesnous.pdf" target="_blank"><img src="images/quisommesnous.png" width="30%" style="float:left;margin: 18px 20px 0px 0px;" /></a>
						<br>
						La société COLLECT\'US.</strong>
						<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
						
						
						<h3 class="adherent">Vidéo de présentation</h3><br />
						<video controls src="video/collectusbas.mp4" width="533" height="300" poster="images/logo.png">Vidéo de présentation</video>';
					}
					
					/* Page Développement durable */					
					
					
					elseif($page == "durable")
					{
						echo '<span style="font-style:italic;"><span style="font-weight:bold;">La durabilité à tous les niveaux...</span></span>
							<br><br>
							Plus que de vouloir aider nos sociétés adhérentes à develloper leur politique de developpement durable, nous appliquons également cette notion de durabilité à notre société et fournissons des services de qualité, préservant ainsi la croissance de notre entreprise sur le long terme. 
							<br><br><br>
							<u><span style="font-weight:bold;">Responsabilité sociale et responsabilité économique</span></u>
							<br><br>
							Nous mettons un point d’honneur à animer des campagnes de sensibilisation.
							Nous fournissons à  nos adhérents des outils complets de communication et sensibilisation 
							pour la mise en place et la compréhension de notre action. 
							Ainsi notre programme "Béa, la petite pieuvre" permet de sensibiliser les jeunes enfants dans les écoles.
							<br><br>
							Adhérent, vous faites également parti d’un réseau qui permet d\'économiser des tonnes d\'émissions de gaz à effet de serre et de protéger la surexploitation des minerais et extraction d\'hydrocarbure..
							
							';
					}
					
					/* Page Téléthon */
					
					elseif($page == "telethon")
					{
						echo 'Dès les prémices de la création du Collect’us nous avons tenu à nous impliquer dans le milieu associatif 
							et avons rapidement mis en place un partenariat afin de soutenir financièrement le Téléthon.
							<br><br>
							Reconnue d’utilité publique en 1976, <span style="font-weight:bold;">l’Association Française contre les Myopathies AFM</span>
							s\'est fixée un but : Vaincre les maladies neuromusculaires.
							Pour ce faire, elle doit remplir plusieurs missions, qu’elle finance grâce au Téléthon.<br><br><br>
							<u><span style="font-weight:bold;">Les objectif du Téléthon</span></u>
							<img src="images/telethon2.png" width="100px" style="float:right;position:absolute;left:170px;top:170px;" />
							<br><br>
							<span style="font-weight:bold;">Guérir :</span>
							<br><br>
							Il existe environ 300 maladies neuromusculaires contre lesquelles se bat l\'AFM-Téléthon.
							Des maladies pour la plupart d’origine génétique, évolutives, lourdement invalidantes et dont le pronostic est souvent très sombre.
							Face à ce fléau, l’AFM-Téléthon s’est fixé comme mission la guérison des maladies neuromusculaires en impulsant les recherches nécessaires.
							<br><br><br>
							<span style="font-weight:bold;">Aider :</span>
							<br><br>
							Les maladies neuromusculaires font parties des quelques 7 000 maladies rares qui touchent chacune un nombre restreint de personnes
							mais affectent au total plus de 30 millions d’Européens et 3 millions de Français. 
							En France, elles représentent quelques 30 000 nouveaux cas par an. pour qu’ils aient accès à des soins de qualité 
							et puissent vivre comme les autres malgré le handicap.
							<br><br><br>
							<span style="font-weight:bold;">Communiquer :</span>
							<br><br>
							Malgré les progrès réalisés grâce au Téléthon, il reste un long parcours avant l’arrivée des médicaments 
							et il faut toujours se battre pour que les enfants aient la même place dans la société que les autres.
							<br>
							Le Téléthon, c’est aussi pour que le regard sur la maladie et le handicap changent.
							<br><br>
							En savoir plus, <a href="http://www.afm-telethon.fr" target="_blank" style="color:rgb(14,83,152)">www.afmtelethon.fr</a>';
					}
					/* elseif($page == "vente")
					{
						echo 'Notre métier est également de fournir aux professionnels recycleurs les matériaux dont ils ont besoins 
								<br><br>
								-	cartouches vides
								<br><br>
								-	plastiques
								<br><br>
								-	composants électroniques et informatiques
								<br><br>
								-	métaux
								<br><br><br>
								Le Collectus est aujourd’hui en mesure de fournir des quantités important de matériaux recyclable et  de cartouches d\'imprimantes vides dans le monde entier.
								<br>
								Nous sommes un fournisseur fiable de première classe de qualité à un juste prix pour nos clients recycleurs
								<br><br>
								Concernant les cartouches, nous fournissons tous modèles et marque de cartouches Jet d’encre et laser OEM. 
								Nous nous assurons de l’état de fonctionnement avant de les envoyer.  Nous avons une bonne connaissance du produit de par l\'expérience de nos équipes. 
								Cela signifie que nous pouvons vous garantir une excellente qualité du tri. Nous assurons que le service de livraison vous parviendra dans les plus brefs délais où que vous soyez: l\'Europe occidentale ou orientale et en Afrique. 
								<br><br><br>
								Si vous êtes à la recherche d\'un fournisseur réputé et fiable, appelez-nous.
								<br><br><br>
								+recherche affiche publicitaire';
					} */
					
					/* Page par défaut (si utilisateur modifie URL) */
					
					else
					{
						header("Status: 301 Moved Permanently", false, 301);
						header("Location: ./");
						exit;
					}
				}
				
				
				
					
				
				
				
				/* Notre Service */
				
				else
				{
					header("Status: 301 Moved Permanently", false, 301);
					header("Location: ./");
					exit;
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
}
);
-->
</script>
</body>
</html>
