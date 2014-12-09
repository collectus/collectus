<?php
	echo '<div id="chemin"><a href="index.html"><img src="images/home.png" width=15 height=14></a>';
	
	$menu = null;
	$page = null;
	if(isset($_GET['menu']))
		$menu = $_GET['menu'];
	if(isset($_GET['page']))
		$page = $_GET['page'];
		
	if($menu == "consommables")
	{
		if($page == "toner")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;Cartouche et toner d\'impression';
		}
		if($page == "classic")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons';
		}
		elseif($page == "gobelet")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;Gobelet, canette et capsule café';
		}
		elseif($page == "clientele")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;Notre clientèle';
		}
		elseif($page == "papiers")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;Papier et papiers confidentiels';
		}
		elseif($page == "neons")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;Lampe et Néon';
		}
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Consommables de bureau';
		}
	}
	
	if($menu == "besoinponctuel")
	{
		if($page == "ponctuelle")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Besoins ponctuels';
		}
		elseif($page == "revalorisation")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Besoins ponctuels&nbsp;&nbsp;>&nbsp;&nbsp;Remise sur facture';
		}
		elseif($page == "complete")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Besoins ponctuels&nbsp;&nbsp;>&nbsp;&nbsp;Un service complet';
		}
		elseif($page == "option")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Besoins ponctuels&nbsp;&nbsp;>&nbsp;&nbsp;Les bonus';
		}
		elseif($page == "urne")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Besoins ponctuels&nbsp;&nbsp;>&nbsp;&nbsp;Urnes de collecte';
		}
		elseif($page == "tracabilite")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Besoins ponctuels&nbsp;&nbsp;>&nbsp;&nbsp;Certificats et Traçabilité';
		}
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Consommables de bureau';
		}
	}
	elseif($menu == "besoinmaintenance")
	{
		
		if($page == "maintenance")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Service régulier';
		}
		elseif($page == "audit")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Conseil et expertise';
		}
		elseif($page == "volumineux")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Industriels&nbsp;&nbsp;>&nbsp;&nbsp;Equipements Volumineux';
		}
		elseif($page == "demantelement")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Industriels&nbsp;&nbsp;>&nbsp;&nbsp;Interventions en industrie';
		}
		elseif($page == "processus")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Industriels&nbsp;&nbsp;>&nbsp;&nbsp;Procedure d\'Intervention';
		}
		elseif($page == "adherent")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Service maintenance&nbsp;&nbsp;>&nbsp;&nbsp;Choisir Collectus';
		}
		elseif($page == "complete")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Service régulier&nbsp;&nbsp;>&nbsp;&nbsp;Un service complet';
		}
		elseif($page == "urne")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Service maintenance&nbsp;&nbsp;>&nbsp;&nbsp;Urne';
		}
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Service maintenance&nbsp;&nbsp';
		}
	}
	
	elseif($menu == "besoinconseil")
	{
		
		if($page == "auditenvironnementale")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Conseil et expertise&nbsp;&nbsp;>&nbsp;&nbsp;Audit environnemental';
		}
		elseif($page == "accompagner")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Conseil et expertise&nbsp;&nbsp;>&nbsp;&nbsp;Accompagnement';
		}
		elseif($page == "performance")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Conseil et expertise&nbsp;&nbsp;>&nbsp;&nbsp;Performance';
		}
		
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Offres&nbsp;&nbsp;>&nbsp;&nbsp;Conseil et expertise&nbsp;&nbsp';
		}
	}
	
	
	
	elseif($menu == "premierepage")
	{
		if($page == "collectons")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Un service complet';
		}
		
		elseif($page == "equipe")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;La société';
		}
		
		
		elseif($page == "bordereau")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Service sécurisé';
		}
		
		elseif($page == "bascout")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Réduire ses factures';
		}
		elseif($page == "efficace")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Simple et rapide';
		}
		elseif($page == "demenagement")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Déménagement d\'entreprise';
		}
		
		elseif($page == "documents")
		{
				echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Documentation';
		}
		elseif($page == "landingdeee")
		{
				echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Enlèvement des DEEE';
		}
		elseif($page == "landingpapier")
		{
				echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Recyclage du Papier';
		}
		
	}
	elseif($menu == "secondepage")
	{
		if($page == "landingdeee")
		{
				echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Enlèvement des DEEE';
		}
		elseif($page == "landingpapier")
		{
				echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Recyclage du Papier';
		}
		elseif($page == "certif")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Certification';
		}
		elseif($page == "equipe")
		{
				echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;La société et le recyclage';
		}		
	}
	elseif($menu == "presta")
	{
		if($page == "collectons")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Nous collectons...';
		}
				
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus&nbsp;&nbsp;>&nbsp;&nbsp;Nous collectons...';
		}
		
	}
	
	elseif($menu == "mobile")
	{
		if($page == "telephone")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;Téléphone mobile';
		}
		elseif($page == "piles")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;Circuits imprimés / Piles / Cd';
		}
		elseif($page == "circuits")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Téléphone mobile&nbsp;&nbsp;>&nbsp;&nbsp;Circuits imprimés';
		}
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Téléphones mobiles';
		}
	}
	elseif($menu == "deee")
	{
		if($page == "informatique")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;Matériel de bureau&nbsp;&nbsp;>&nbsp;&nbsp;PC et matériel informatique';
		}
		elseif($page == "autre")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;DEEE&nbsp;&nbsp;>&nbsp;&nbsp;Matériel d\'impression';
		}
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous collectons&nbsp;&nbsp;>&nbsp;&nbsp;DEEE';
		}
	}
	elseif($menu == "recyclage")
	{
		if($page == "classic")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="indextml">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Urnes de collecte&nbsp;&nbsp;>&nbsp;&nbsp;Vos urnes';
		}
		elseif($page == "secure")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="index.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Bacs de collecte&nbsp;&nbsp;>&nbsp;&nbsp;Nos Box Secure';
		}
		elseif($page == "evenements")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="index.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Bacs de collecte&nbsp;&nbsp;>&nbsp;&nbsp;Urnes de collecte pour évènement pro';
		}
		elseif($page == "bea")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="index.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Bacs de collecte&nbsp;&nbsp;>&nbsp;&nbsp;Béa la petite pieuvre';
		}
		elseif($page == "entreprises")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Personnalisée';
		}
		elseif($page == "evenement")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main';
		}
		elseif($page == "audit")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Conseil et expertise';
		}
		elseif($page == "formule")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp;Toutes nos formules';
		}
		elseif($page == "formulemobilea")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Mobile n°1';
		}
		elseif($page == "formulemobileb")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Mobile n°2';
		}
		elseif($page == "formulemobilec")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Mobile n°3';
		}
		elseif($page == "formulemobiled")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Mobile n°4';
		}
		elseif($page == "formulepapiera")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Papier n°1';
		}
		elseif($page == "formulepapierb")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Papier n°2';
		}
		elseif($page == "formulepapierc")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Papier n°3';
		}
		elseif($page == "formulepapierd")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Papier n°4';
		}
		elseif($page == "formulepapiere")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Papier n°5';
		}
		elseif($page == "formulepapierf")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Papier n°6';
		}
		elseif($page == "formulepapierg")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Papier n°7';
		}
		elseif($page == "formulepapierh")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Papier n°8';
		}
		elseif($page == "formuleconsoa")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Consommable n°1';
		}
		elseif($page == "formuleconsob")
		{
		echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Nos offres&nbsp;&nbsp;>&nbsp;&nbsp;Solution Cle en Main&nbsp;&nbsp>&nbsp;&nbsp Toutes nos formules &nbsp>&nbsp;&nbsp; Formule Consommable n°2';
		}
		
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Bacs de collecte';
		}
	}
	elseif($menu == "recuperation")
	{
		if($page == "pme")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;PME';
		}
		elseif($page == "grandcompte")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur tertiaire';
		}
		elseif($page == "fonds")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur financier';
		}
		elseif($page == "industries")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur industriel';
		}
		elseif($page == "juridique")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur juridique';
		}
		elseif($page == "medical")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur médical';
		}
		elseif($page == "salons")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Société de l\'évènementiel&nbsp;&nbsp;>&nbsp;&nbsp;En savoir plus';
		}
		elseif($page == "prestainfo")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur informatique';
		}
		elseif($page == "nettoyage")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur du facility et entretien';
		}
		elseif($page == "evenementiel")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Société de l\'évènementiel';
		}
		elseif($page == "administration")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur administratif';
		}
		elseif($page == "facilitymanagement")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>&nbsp;&nbsp;Secteur du facility et entretien';
		}
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Service&nbsp;&nbsp;>';
		}
	}
	elseif($menu == "collecte")
	{
		if($page == "adherent")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Vos avantages&nbsp;&nbsp;>&nbsp;&nbsp;Pourquoi devenir adhérent ?';
		}
		elseif($page == "tracabilite")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Vos avantages&nbsp;&nbsp;>&nbsp;&nbsp;Espace suivi et traçabilité';
		}
		elseif($page == "revalorisation")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Vos avantages&nbsp;&nbsp;>&nbsp;&nbsp;Remise';
		}
		elseif($page == "recyclees")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Vos avantages&nbsp;&nbsp;>&nbsp;&nbsp;Cartouches recyclées';
		}
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Vos avantages';
		}
	}
	elseif($menu == "metier")
	{
		if($page == "collectus")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Notre métier&nbsp;&nbsp;>&nbsp;&nbsp;Qui sommes-nous';
		}
		elseif($page == "procedes")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Notre métier&nbsp;&nbsp;>&nbsp;&nbsp;En pratique';
		}
		elseif($page == "documentation")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Notre métier&nbsp;&nbsp;>&nbsp;&nbsp;Documentation et téléchargements';
		}
		elseif($page == "durable")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Notre métier&nbsp;&nbsp;>&nbsp;&nbsp;Développement durable';
		}
		elseif($page == "certifications")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Notre métier&nbsp;&nbsp;>&nbsp;&nbsp;Certifications';
		}
		elseif($page == "telethon")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service&nbsp;&nbsp;>&nbsp;&nbsp;Notre métier&nbsp;&nbsp;>&nbsp;&nbsp;Téléthon';
		}
		else
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;<a href="accueil.html">Notre Service</a>&nbsp;&nbsp;>&nbsp;&nbsp;Notre metier';
		}
	}
	
	
	else
	{
		if($_SERVER['REQUEST_URI'] == "/recycle.php")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Ce que nous recyclons';
		}
		elseif($_SERVER['REQUEST_URI'] == "/index.html")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Notre Service';
		}
		elseif($_SERVER['REQUEST_URI'] == "/presentation.php")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Collectus';
		}
		elseif($_SERVER['REQUEST_URI'] == "/service.php")
		{
			echo '&nbsp;&nbsp;>&nbsp;&nbsp;Nos partenaires';
		}
	}
	
	echo '</div>';
?>