<?php

function connexion_bdd()
{
	$bdd_serveur = 'db489144501.db.1and1.com';
	$bdd_nom = 'db489144501';
	$bdd_login = 'dbo489144501';
	$bdd_mdp = 'axelyoyo86';

	try{
		$bdd = new PDO('mysql:host='.$bdd_serveur.';dbname='.$bdd_nom, $bdd_login, $bdd_mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		return $bdd;
	}catch(Exception $e){
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
		die();
	}
}

?>