<?php
session_start();
include('include/fonctions.php');
include('include/connexion.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Collectus - Service professionel de tri de déchets, récupération de matériel de bureau et recyclage - récupération de matériel informatique, recyclage de cartouches, revalorisation de DEEE, tri de gobelets plastiques...</title>
	<meta name="description" content="Tri de déchets, récupération de matériel de bureau et recyclage : récupération de matériel informatique, recyclage de cartouches, revalorisation de DEEE, tri de gobelets plastiques...">
	<meta http-equiv="Content-Language" content="fr">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Collectus" /> 
	<meta name="keywords" content="collecte, recyclage, cartouches, telephone, informatique, paris, DEEE, toner">
	<meta name="REVISIT-AFTER" content="7 days">
	<meta name="keywords" content="Collecte, cartouches" />
	<meta name="Indentifier-URL" content="http://www.collectus.fr/" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
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


<div id="conteneur">
	<div id="contenu">
	<div id="imagecentrale">
			<img src="images/greenwallcamtar.png" width=1000 height=250 />
	</div>
		<div id="index_centre_accueil" >	
				
			
				<div id="gauche">	
			
				
			<div id="head_title">
			<span>Solutions de tri et recyclage de déchets bureautiques</span>
			</div>
			<div id="accueil_title">
			Site actuellement en maintenance
			</div>	

				
				
			
				
		
				
				
			</div>
			
			<br><br>
			
		</div>
		
	</div>
	</div>




<!-- Code javascript -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript"> 
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
-->
</script>
<script type="text/javascript">
<!--
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
<script type="text/javascript">
<!--
$(document).ready(
function() {
	$('#submit_devis').live('click', function() {
		var select1 = document.getElementById("sel1");
		if(select1.value == "none"){
			document.getElementById("devis_alert").style.display = 'inline-block';
		}else{
			$('#submit_devis_hide').click();
		}
		return false;
	});
});
-->
</script>
<script type="text/javascript">
<!--
$(function(){
		var select1 = document.getElementById("sel1");
		var select2 = document.getElementById("sel2");
		var select3 = document.getElementById("sel3");
		var select4 = document.getElementById("sel4");
		var choix="";
        
		select1.onchange = function(){
			select2.innerHTML = "";
			select3.innerHTML = "";
			select4.innerHTML = "";		
			select3.disabled = false;
			select4.disabled = false;
            if(select1.value == "En vrac")
                affiche_vrac();
            else if(select1.value == "Au détail")
                affiche_detail();
				affiche_detail2();
				affiche_detail3();
        } 
 
			function affiche_vrac(){
				
				choix = '<option value="Carton 5 Kg">Carton 5 kg</option><option value="Carton 10 Kg">Carton 10 kg</option><option value="Carton 20 Kg">Carton 20 kg</option><option value="Carton 30 Kg">Carton 30 kg</option><option value="Carton 50 Kg">Carton 50 Kg</option><option value="Palette 200 Kg">Palette 200 kg</option>';
				
				select2.innerHTML = choix;      
				select3.innerHTML = choix;  
				select4.innerHTML = choix;
				select3.disabled = true;
				select4.disabled = true;
			 
			}
	 
			function affiche_detail(){
			
				choix = '<option value="Informatique/Bureautique">Informatique/Bureautique</option><option value="Matériel d\'impression">Matériel d\'impression</option><option value="Mobile">Mobile</option><option value="Image et son">Image et son</option>';
				select2.innerHTML = choix;
			}
		
		select2.onchange = function(){
			if(select1.value == "En vrac"){
				select3.value = select2.value;
				select4.value = select2.value;
			}else if(select1.value == "Au détail"){
				affiche_detail2();
				affiche_detail3();
			}
		}
		
			function affiche_detail2(){
				if(select2.value == "Informatique/Bureautique"){
					choix = '<option value="Equipement bureautique">Equipement bureautique</option><option value="Onduleur">Onduleur</option><option value="Stockage">Stockage</option><option value="Equipement réseau">Equipement réseau</option><option value="Ecran cathodique">Ecran cathodique CRT</option><option value="Ecran plat">Ecran plat TFT/LCD</option><option value="Ordinateur portable">Ordinateur portable</option><option value="Serveur">Serveur</option><option value="Unité centrale">Unité centrale</option>';
					select3.innerHTML = choix;
				}else if(select2.value == "Matériel d\'impression"){
					choix = '<option value="Imprimante jet d\'encre">Imprimante jet d\'encre</option><option value="Imprimante laser">Imprimante laser</option><option value="Copieur et MFP">Copieur et MFP</option><option value="Traçeur">Traçeur</option><option value="Tube toner photocopieur">Tube toner photocopieur</option><option value="Cartouches jet d\'encre">Cartouches jet d\'encre</option><option value="Cartouches laser">Cartouches laser</option>';
					select3.innerHTML = choix;
				}else if(select2.value == "Mobile"){
					choix = '<option value="Mobile">Mobile</option><option value="Tablette">Tablette</option><option value="Divers électronique">Divers électronique</option>';
					select3.innerHTML = choix;
				}else if(select2.value == "Image et son"){
					choix = '<option value="Vidéo">Vidéo</option><option value="Photo">Photo</option><option value="Son">Son</option><option value="Ecran plasma">Ecran plasma</option><option value="Ecran LCD">Ecran LCD</option><option value="Ecran cathodique CRT">Ecran cathodique CRT</option><option value="Ecran plat TFT">Ecran plat TFT</option>';
					select3.innerHTML = choix;
				}
			}
		
		select3.onchange = function(){
			affiche_detail3();
		}
		
			function affiche_detail3(){
				if(select3.value == "Equipement bureautique"){
					choix = '<option value="Fax">Fax</option><option value="Téléphonie et standard">Téléphonie et standard</option><option value="Cablage">Câblage</option><option value="Multiprises">Multiprise</option><option value="Clavier et souris">Clavier et souris</option><option value="Webcam">Webcam</option><option value="Hubs USB">Hubs USB</option><option value="Scanners">Scanners</option><option value="Lecteur/Graveur CD">Lecteur/Graveur CD</option><option value="Destructeur de document">Destructeur de document</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Onduleur"){
					select4.innerHTML = "";
				}else if(select3.value == "Stockage"){
					choix = '<option value="Disque Dur">Disque Dur</option><option value="Clé USB">Clé USB</option><option value="Carte mémoire">Carte mémoire</option><option value="Autres équipement de stockage">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Equipement réseau"){
					choix = '<option value="Switch/Hub">Switch/Hub</option><option value="Modem/Routeur">Modem/Routeur</option><option value="Baies brassage">Baies brassage</option><option value="Lecteurs multimédia">Lecteurs multimédia</option><option value="Antenne Wifi">Antenne Wifi</option><option value="Autres équipement réseau">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran cathodique"){
					choix = '<option value="15\' - 17\'">15\' - 17\'</option><option value="19\' - 21\'">19\' - 21\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran plat"){
					choix = '<option value="<15\'">< 15\'</option><option value=">=15\'">>= 15\'</option><option value="PC tout-en-un">PC tout-en-un</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ordinateur portable"){
					choix = '<option value="12\'-16\'">12\'-16\'</option><option value="17\'">17\' et plus</option><option value="PDA">PDA</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Serveur"){
					choix = '<option value="Serveur tour">Serveur tour</option><option value="Serveur rack">Serveur rack</option><option value="Serveur lame">Serveur lame</option><option value="Serveur chassis">Serveur chassis</option><option value="Serveur grand système">Serveur grand système</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Unité centrale"){
					choix = '<option value="Classique">Classique</option><option value="Compaq">Compaq</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Imprimante jet d\'encre"){
					select4.innerHTML = select3.value;
				}else if(select3.value == "Imprimante laser"){
					select4.innerHTML = select3.value;
				}else if(select3.value == "Copieur et MFP"){
					select4.innerHTML = select3.value;
				}else if(select3.value == "Traçeur"){
					select4.innerHTML = select3.value;
				}else if(select3.value == "Tube toner photocopieur"){
					choix = '<option value="Tube Xerox">Tube Xerox</option><option value="Tube Canon">Tube Canon</option><option value="Autres tubes">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Cartouches jet d\'encre"){
					choix = '<option value="Compatibles">Compatibles</option><option value="Remanufacturées">Remanufacturées</option><option value="HP">HP</option><option value="Brother">Brother</option><option value="Dell">Dell</option><option value="Samsung">Samsung</option><option value="Canon">Canon</option><option value="Lexmark">Lexmark</option><option value="Epson">Epson</option><option value="Autres cartouches jet d\'encre">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Cartouches Laser"){
					choix = '<option value="Compatibles">Compatibles</option><option value="Remanufacturées">Remanufacturées</option><option value="HP">HP</option><option value="Brother">Brother</option><option value="Dell">Dell</option><option value="Samsung">Samsung</option><option value="Canon">Canon</option><option value="Lexmark">Lexmark</option><option value="Epson">Epson</option><option value="Autres cartouches laser">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Mobile"){
					choix = '<option value="Apple">Apple</option><option value="Blackberry">Blackberry</option><option value="HTC">HTC</option><option value="Samsung">Samsung</option><option value="Sony">Sony</option><option value="Nokia">Nokia</option><option value="LG">LG</option><option value="Autre marque">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Tablette"){
					choix = '<option value="Apple">Apple</option><option value="Blackberry">Blackberry</option><option value="HTC">HTC</option><option value="Samsung">Samsung</option><option value="Sony">Sony</option><option value="Nokia">Nokia</option><option value="Autre marque">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Divers électronique"){
					choix = '<option value="Talkie Walkie">Talkie Walkie</option><option value="GPS">GPS</option><option value="Chargeur">Chargeur</option><option value="Autre">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Vidéo"){
					choix = '<option value="Projecteur vidéo">Projecteur vidéo</option><option value="Lecteur DVD/K7">Lecteur DVD/K7</option><option value="Lecteur DVD portable">Lecteur DVD portable</option><option value="Caméscope">Caméscope</option><option value="Home Cinéma">Home Cinéma</option><option value="Récepteur TNT">Récepteur TNT</option><option value="Câblage">Câblage</option><option value="Autre vidéo">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Photo"){
					choix = '<option value="Appareil photo">Appareil photo</option><option value="Optique">Optique</option><option value="Flash">Flash</option><option value="Autre photo">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Son"){
					choix = '<option value="Enceinte">Enceintes</option><option value="Equipement portatif">Equipement portatif</option><option value="Amplificateur">Amplificateur</option><option value="Platine vinyle">Platine vinyle</option><option value="Table mixage">Table mixage</option><option value="Mini chaîne Hifi">Mini chaîne Hifi</option><option value="Câblage">Câblage</option><option value="Autre son">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran plasma"){
					choix = '<option value="< 42\'">< 42\'</option><option value="42\' - 51\'">42\' - 51\'</option><option value="52\' - 59\'">52\' - 59\'</option><option value="> 60\'">> 60\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran LCD"){
					choix = '<option value="< 32\'">< 32\'</option><option value="32\' - 41\'">32\' - 41\'</option><option value="42\' - 51\'">42\' - 51\'</option><option value=">52\'">> 52\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran cathodique CRT"){
					choix = '<option value="15\'">15\'</option><option value="17\'">17\'</option><option value="19\'">19\'</option><option value="21\'">21\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran plat TFT"){
					choix = '<option value="< 15\'">< 15\'</option><option value="> 15\'">>= 15\'</option>';
					select4.innerHTML = choix;
				}
			}
});
-->
</script>
</body>
</html>