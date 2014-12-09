<?php
session_start();
include('include/connexion.php');
include('include/fonctions.php');

if(isset($_POST["submit_final"])){
	$codepostal = $_POST["devis_postal"];
	$etage = $_SESSION["etage"];
	$ascenseur = $_SESSION["ascenseur"];
	$nombre_colis = $_SESSION["nombre_colis"];
	$type1 = $_SESSION["t1_select1"];
	$type2 = $_SESSION["t1_select2"];
	$equipement = $_SESSION["t1_select3"];
	$nom = $_SESSION["t1_select4"];
	$id = $_SESSION["id_client"];
	$quai = $_POST["devis_quai"];
	
	$bdd = connexion_bdd();
	$rqt = 'INSERT INTO demande_client (Code_Postal,Etage,Ascenseur,Nombre_Colis,Type_Enlevement,Type_Materiel,Equipement,Nom_Objet,ID_Client) VALUES (:code,:etage,:ascenseur,:nombre,:type1,:type2,:equipement,:nom,:id)';
	$result = $bdd->prepare($rqt);
	$result->execute(array('code' => $codepostal,
							'etage' => $etage,
							'ascenseur' => $ascenseur,
							'nombre' => $nombre_colis,
							'type1' => $type1,
							'type2' => $type2,
							'equipement' => $equipement,
							'nom' => $nom,
							'id' => $id));
	if($result){
		echo 'Requête réussie';
	}else{
		echo 'Erreur dans la requête !';
	}
	
// $requete1 = 'SELECT Cout_Traitement.Tarif_Client_Unitaire*Nombre_Colis AS Cout_Traitement_Unitaire, 
// Tarif_Demande_Client.Nb_Collecteur*Cout_Collecteur_Unitaire*Nombre_Colis AS Cout_Intervention_Uniaire, 
// Tarif_Demande_Client.Nb_Collecteur, Cout_Traitement.POIDS_Unité, Cout_Traitement.POIDS_Unité*Nombre_Colis AS Poids_Total
// FROM (Tarif_Demande_Client INNER JOIN Demande_Client ON 
// (Tarif_Demande_Client.Ascenceur = Demande_Client.Ascenceur) AND 
// (Tarif_Demande_Client.Etage = Demande_Client.Etage)) INNER JOIN Cout_Traitement ON 
// (Demande_Client.Nom_Objet = Cout_Traitement.Nom_Objet) AND 
// (Demande_Client.Equipement = Cout_Traitement.Equipement) AND 
// (Demande_Client.Type_Matériel = Cout_Traitement.Type_Matériel) AND 
// (Demande_Client.Type_Enlèvement = Cout_Traitement.Type_Enlèvement)
// WHERE (((Tarif_Demande_Client.Poids_Max)=(SELECT MIN(Poids_Max) FROM Tarif_Demande_Client AS f WHERE f.Etage = Tarif_Demande_Client.Etage AND f.Ascenceur = Tarif_Demande_Client.Ascenceur AND Poids_Max>=POIDS_Unité)));
// ';

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Collectus : Service professionel de collecte et recyclage de bureautique</title>
	<meta name="description" content="Collecte et recyclage de matériel bureautique : Cartouches d'impression, téléphones portables et matériel éléctronique">
	<meta http-equiv="Content-Language" content="fr">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Collectus" /> 
	<meta name="keywords" content="collecte, recyclage, cartouches, telephone, informatique, paris, deee, toner">
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
<body>
<div id="headpage"><span>Copyright © Collect'us</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
	<?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>
	<div id="contenu">
		<div id="devis_centre">
		
		</div>
	</div>
	<?php include('include/contact.php'); ?>
</div>
<div id="footer">
	<a href="index.html" title="Accueil">Accueil</a> - <a href="footer-mentions.html" title="Mentions legales">Mentions legales</a> - <a href="footer-plan.html" title="Plan du site">Plan du site</a>
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
</body>
</html>