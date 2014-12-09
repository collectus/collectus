<?php
	echo '<br><div id="title">';
	
	$menu = null;
	$page = null;
	if(isset($_GET['menu']))
		$menu = $_GET['menu'];
	if(isset($_GET['page']))
		$page = $_GET['page'];
		
	if($menu == "consommables")
	{
		if($page == "classic")
		{
			echo '<h2>Ce que nous collectons</h2>';
		}
		elseif($page == "toner")
		{
			echo '<h2>Cartouche et toner d\'impression</h2>';
		}
		elseif($page == "clientele")
		{
			echo '<h2>Notre clientèle</h2>';
		}
		elseif($page == "gobelet")
		{
			echo '<h2>Gobelet, canette et capsule café</h2>';
		}
		elseif($page == "neons")
		{
			echo '<h2>Lampe et néon</h2>';
		}
		elseif($page == "unused")
		{
			echo '<h2>Cartouche/Toner non usagés</h2>';
		}
		elseif($page == "papiers")
		{
			echo '<h2>Papiers et papiers confidentiels</h2>';
		}
		else
		{
			echo '<h2>Matériel d\'impression</h2>';
		}
	}
	
	if($menu == "premierepage")
	{
		if($page == "collectons")
		{
			echo '<h2>Ce que nous collectons</h2>';
		}
		elseif($page == "equipe")
		{
			echo '<h2>La société</h2>';
		}
		elseif($page == "certif")
		{
			echo '<h2>Nos certifications</h2>';
		}
		elseif($page == "documents")
		{
			echo '<h2>Documentations</h2>';
		}
		elseif($page == "landingdeee")
		{
			echo '<h2>Enlèvement des DEEE</h2>';
		}
		elseif($page == "landingpapier")
		{
			echo '<h2>Recyclage du Papier</h2>';
		}
		else
		{
			echo '<h2>Le metier</h2>';
		}
	}
	
	if($menu == "secondepage")
	{
		
		if($page == "landingdeee")
		{
			echo '<h2>Enlèvement des DEEE</h2>';
		}
		elseif($page == "landingpapier")
		{
			echo '<h2>Recyclage du Papier</h2>';
		}
		else
		{
			echo '<h2>Le metier</h2>';
		}
	}
	
	if($menu == "presta")
	{
		if($page == "collectons")
		{
			echo '<h2>Nous collectons...</h2>';
		}
		else
		{
			echo '<h2>Nous collectons...</h2>';
		}
	}
	
	
	elseif($menu == "mobile")
	{
		if($page == "telephone")
		{
			echo '<h2>Téléphone mobile</h2>';
		}
		elseif($page == "piles")
		{
			echo '<h2>Circuits imprimés / Cd / Piles</h2>';
		}
		else
		{
			echo '<h2>Téléphone mobile</h2>';
		}
	}
	elseif($menu == "deee")
	{
		if($page == "informatique")
		{
			echo '<h2>PC et matériel informatique</h2>';
		}
		elseif($page == "piles")
		{
			echo '';
		}
		elseif($page == "circuits")
		{
			echo '<h2>Circuits imprimés</h2>';
		}
		elseif($page == "autre")
		{
			echo '<h2>Autre matériel d\'impression</h2>';
		}
		
		else
		{
			echo '<h2>Matériel bureautiques</h2>';
		}
	}
	elseif($menu == "recyclage")
	{
		if($page == "classico")
		{
			echo '<h2>Nos Urnes</h2>';
		}
		if($page == "evenements")
		{
			echo '<h2>Urnes de collecte pour évènement pro</h2>';
		}
			if($page == "classic")
		{
			echo '<h2>Vos urnes</h2>';
		}
		elseif($page == "secure")
		{
			echo '<h2>Nos Box Secure</h2>';
		}
		elseif($page == "bea")
		{
			echo '<h2>Bea la petite pieuvre</h2><img src="images/picto_bea_off.jpg" width=8% style="float:right;margin-top:20px;" />';
		}
		elseif($page == "entreprises")
		{
		echo '<h2>Solution Personnalisée</h2>';
		}
		elseif($page == "evenement")
		{
		echo '<h2>Solution clé en main</h2>';
		}
		elseif($page == "audit")
		{
		echo '<h2>Conseil et Expertise</h2>';
		}
		elseif($page == "formule")
		{
		echo '<h2>Toutes les formules clé en main</h2>';
		}
		elseif($page == "formulemobilea")
		{
		echo '<h2>Formule Mobile n°1</h2>';
		}
		elseif($page == "formulemobileb")
		{
		echo '<h2>Formule Mobile n°2</h2>';
		}
		elseif($page == "formulemobilec")
		{
		echo '<h2>Formule Mobile n°3</h2>';
		}
		elseif($page == "formulemobiled")
		{
		echo '<h2>Formule Mobile n°4</h2>';
		}
		elseif($page == "formulepapiera")
		{
		echo '<h2>Formule Papier n°1</h2>';
		}
		elseif($page == "formulepapierb")
		{
		echo '<h2>Formule Papier n°2</h2>';
		}
		elseif($page == "formulepapierc")
		{
		echo '<h2>Formule Papier n°3</h2>';
		}
		elseif($page == "formulepapierd")
		{
		echo '<h2>Formule Papier n°4</h2>';
		}
		elseif($page == "formulepapiere")
		{
		echo '<h2>Formule Papier n°5</h2>';
		}
		elseif($page == "formulepapierf")
		{
		echo '<h2>Formule Papier n°6</h2>';
		}
		elseif($page == "formulepapierg")
		{
		echo '<h2>Formule Papier n°7</h2>';
		}
		elseif($page == "formulepapierh")
		{
		echo '<h2>Formule Papier n°8</h2>';
		}
		elseif($page == "formuleconsoa")
		{
		echo '<h2>Formule Consommable n°1</h2>';
		}
		elseif($page == "formuleconsob")
		{
		echo '<h2>Formule Consommable n°2</h2>';
		}
		else
		{
			echo '<h2></h2>';
		}
		
	}
	
	elseif($menu == "besoinponctuel")
	{
		if($page == "ponctuelle")
		{
			echo '<h2>Besoins ponctuels</h2>';
		}
				
		elseif($page == "revalorisation")
		{
			echo '<h2>Reduire ses factures</h2>';
		}				
		elseif($page == "adherent")
		{
			echo '<h2>Choisir Collect\'us ?</h2>';
		}
		elseif($page == "option")
		{
			echo '<h2>Les bonus</h2>';
		}
		else
		{
			echo '<h2>besoins ponctuels</h2>';
		}
		
	}
	
	elseif($menu == "besoinmaintenance")
	{
		
		if($page == "maintenance")
		{
			echo '<h2>Service de maintenance</h2>';
		}
		elseif($page == "audit")
		{
			echo '<h2>Conseil et expertise</h2>';
		}
		elseif($page == "tracabilite")
		{
			echo '<h2>Suivi et traçabilité</h2>';
		}
		
		elseif($page == "adherent")
		{
			echo '<h2>Choisir Collect\'us</h2>';
		}
		elseif($page == "urne")
		{
			echo '<h2>Poubelle de tri sélectif et collecteur</h2>';
		}
		else
		{
			echo '<h2>service maintenance</h2>';
		}
		
	}
	elseif($menu == "besoinconseil")
	{
			
		if($page == "audit")
		{
			echo '<h2>Conseil et expertise</h2>';
		}
		elseif($page == "auditenvironnementale")
		{
			echo '<h2>Audit</h2>';
		}
		elseif($page == "accompagner")
		{
			echo '<h2>Accompagnement</h2>';
		}
		elseif($page == "performance")
		{
			echo '<h2>Performance</h2>';
		}
		else
		{
			echo '<h2>conseil</h2>';
		}
		
	}
	
	
	
	
	elseif($menu == "recuperation")
	{
		if($page == "pme")
		{
			echo '<h2>Service PME</h2>';
		}
		elseif($page == "grandcompte")
		{
			echo '<h2>Service Grand Compte</h2>';
		}
		elseif($page == "salons")
		{
			echo '<h2> <br></h2>';
		}
		elseif($page == "administration")
		{
			echo '<h2>Administration et Ecole</h2>';
		}
		elseif($page == "evenementiel")
		{
			echo '<h2>Société de l\'évènementiel</h2>';
		}
		elseif($page == "prestainfo")
		{
			echo '<h2>Prestataire informatique</h2>';
		}
		elseif($page == "nettoyage")
		{
			echo '<h2>Société de nettoyage</h2>';
		}
		elseif($page == "facilitymanagement")
		{
			echo '<h2>Facility management</h2>';
		}
		else
		{
			echo '<h2>Nos Solutions</h2>';
		}
	}
	elseif($menu == "collecte")
	{
		if($page == "adherent")
		{
			echo '<h2>Pourquoi devenir adhérent ?</h2>';
		}
		
		elseif($page == "recyclees")
		{
			echo '<h2>Vente de cartouches recyclées</h2>';
		}
		else
		{
			echo '<h2>Vos Avantages</h2>';
		}
	}
	elseif($menu == "metier")
	{
		if($page == "collectus")
		{
			echo '<h2>Qui sommes-nous?</h2>';
		}
		if($page == "documentation")
		{
			echo '<h2>Documentation et téléchargements</h2>';
		}
		elseif($page == "procedes")
		{
			echo '<h2>En pratique</h2>';
		}
		elseif($page == "certifications")
		{
			echo '<h2>Certifications</h2>';
		}
		elseif($page == "durable")
		{
			echo '<h2>Développement durable</h2>';
		}
		elseif($page == "telethon")
		{
			echo '<h2>Téléthon</h2>';
		}
		
	}
	
	
	else{
		if($_SERVER['REQUEST_URI'] == "/recycle.php")
		{
			echo '<h2>Ce que nous recyclons</h2>';
		}
		elseif($_SERVER['REQUEST_URI'] == "/service.php")
		{
			echo '<h2>Notre Service</h2>';
		}
		elseif($_SERVER['REQUEST_URI'] == "/presentation.php")
		{
			echo '<h2>Notre Societe</h2>';
		}
	}
	
	echo '</div>';
?>