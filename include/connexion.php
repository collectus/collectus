<?php

function connexion_bdd()
{
	$bdd_serveur = 'localhost';
	$bdd_nom = 'test';
	$bdd_login = 'admin';
	$bdd_mdp = '';

	try{
		$bdd = new PDO('mysql:host='.$bdd_serveur.';dbname='.$bdd_nom, $bdd_login, $bdd_mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		return $bdd;
	}catch(Exception $e){
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
		die();
	}
}

if(isset($_POST["login_submit"])){
	if($_POST["login"] == NULL OR $_POST["password"] == NULL){
	
		$alert = 'Veuillez remplir tous les champs';
		
	}else{
	
		$bdd = connexion_bdd();
		
		$login = htmlspecialchars($_POST["login"]);
		$mdp = htmlspecialchars($_POST["password"]);
		
		$result = $bdd->prepare('SELECT MAIL from collectus_user WHERE MAIL = ?');
		$result->execute(array($login));
		$count = $result->rowCount();
		if($count == 0){
			$alert = 'L\'adresse mail est incorrecte.';
		}else{
			$resultats = $bdd->prepare('SELECT * FROM collectus_user WHERE MAIL = :mail ');
			$resultats->execute(array('mail' => $login)) or die(print_r($resultats->errorInfo()));
			$donnees = $resultats->fetch();
			if($donnees["MOTDEPASSE"] == $mdp){
						$_SESSION["id_membre"] = $donnees["ID"];
						$_SESSION['mail'] = $donnees["MAIL"];
						$_SESSION['mdp'] = $donnees["MOTDEPASSE"];
						$_SESSION["raison"] = $donnees["RAISON"];
						$_SESSION['nom'] = $donnees["NOM"];
						$_SESSION['prenom'] = $donnees["PRENOM"];
						$_SESSION["adresse"] = $donnees["ADRESSE"];
						$_SESSION["ville"] = $donnees["VILLE"];
						$_SESSION["codepostal"] = $donnees["CODE POSTAL"];
						$_SESSION["tel"] = $donnees["TEL"];
						$_SESSION["poste"] = $donnees["POSTE"];
						if($donnees["MAIL"] == "admin@collectus.fr"){
							header('Location: admin.php');
							exit;
						}
			$resultats->closeCursor();
			}else{
				$alert='Mot de passe incorrect';
			}
		}
	}
}
?>