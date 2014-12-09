<?php

function actualiser_session()
{
    if(isset($_SESSION['id_membre']) && intval($_SESSION['id_membre']) != 0) //Vérification id
    {
		$bdd = connexion_bdd();
        //utilisation de la fonction sqlquery, on sait qu'on aura qu'un résultat car l'id d'un membre est unique.
        $requete = 'SELECT * FROM collectus_user WHERE ID = :id';
		$resultat = $bdd->prepare($requete);
		$resultat->execute(array('id' => intval($_SESSION['id_membre']))) or die(print_r($resultats->errorInfo()));
		
		$donnees = $resultat->fetch();
         
        //Si la requête a un résultat (c'est-à-dire si l'id existe dans la table membres)
        if(isset($donnees['MAIL']) && $donnees['MAIL'] != '')
        {
            if($_SESSION['mdp'] != $donnees['MOTDEPASSE'])
            {
				session_unset();
                session_destroy();
				header('Location: espace.php');
				exit;
            }             
            else
            {
                //Validation de la session.
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
            }
        }
		$resultat->closeCursor();
    }
}

/*
* Vérifie si la liste existe. Si non, la crée
*/
function creationListe()
{
	if(!isset($_SESSION['liste'])){
		$_SESSION['liste'] = array();
		$_SESSION['liste']['typeEnlevement'] = array();
		$_SESSION['liste']['typeMateriel'] = array();
		$_SESSION['liste']['equipement'] = array();
		$_SESSION['liste']['nomObjet'] = array();
		$_SESSION['liste']['qteObjet'] = array();
		$_SESSION['liste']['code'] = NULL;
		$_SESSION['liste']['quai'] = NULL;
		$_SESSION['liste']['lift'] = NULL;
		$_SESSION['liste']['etage'] = NULL;
		$_SESSION['liste']['locked'] = false;
	}
	return true;
}

/*
* Ajoute un élément à la liste
*/
function ajoutElement($typeEnlevement,$typeMateriel,$equipement,$nomObjet,$qteObjet)
{
	if(creationListe() && !isLocked())
	{
		$positionElement = array_search($nomObjet, $_SESSION['liste']['nomObjet']);
		if($positionElement !== false)
		{
			$_SESSION['liste']['qteObjet'][$positionElement] += $qteObjet;
		}else
		{
			array_push($_SESSION['liste']['typeEnlevement'],$typeEnlevement);
			array_push($_SESSION['liste']['typeMateriel'],$typeMateriel);
			array_push($_SESSION['liste']['equipement'],$equipement);
			array_push($_SESSION['liste']['nomObjet'],$nomObjet);
			array_push($_SESSION['liste']['qteObjet'],$qteObjet);
		}
	}
	else
	{
		echo "Un problème est survenu. Veuillez contacter l'administrateur";
	}
} 

/*
* Suppresion d'un élément de la liste
*/
function supprimerElement($nomObjet)
{
	if(creationListe() && !isLocked())
	{
		$temp = array();
		$temp['typeEnlevement'] = array();
		$temp['typeMateriel'] = array();
		$temp['equipement'] = array();
		$temp['nomObjet'] = array();
		$temp['qteObjet'] = array();
		$temp['locked'] = $_SESSION['liste']['locked'];
		
		for($i=0; $i<count($_SESSION['liste']['nomObjet']);$i++)
		{
			if($_SESSION['liste']['nomObjet'][$i] != $nomObjet)
			{
				array_push($temp['typeEnlevement'],$_SESSION['liste']['typeEnlevement'][$i]);
				array_push($temp['typeMateriel'],$_SESSION['liste']['typeMateriel'][$i]);
				array_push($temp['equipement'],$_SESSION['liste']['equipement'][$i]);
				array_push($temp['nomObjet'],$_SESSION['liste']['nomObjet'][$i]);
				array_push($temp['qteObjet'],$_SESSION['liste']['qteObjet'][$i]);
			}
		}
		
		$_SESSION['liste'] = $temp;
		unset($temp);
	}
	else
	{
		echo "Un problème est survenu. Veuillez contacter l'administrateur";
	}
}

/*
* Modifier la quantité d'un élément
*/
function modifierQteListe($nomObjet,$qteObjet)
{
	if(creationListe() && !isLocked())
	{
		if($qteObjet > 0)
		{
			$positionElement = array_search($nomObjet, $_SESSION['liste']['nomObjet']);
			if($positionElement !== false)
				$_SESSION['liste']['qteObjet'][$positionElement] = $qteObjet;
		}
		else
		{
			supprimerElement($nomObjet);
		}
	}
	else
	{
		echo "Un problème est survenu. Veuillez contacter l'administrateur";
	}
}

/*
* Verifie si le panier est verrouillé
*/
function isLocked()
{
	if(isset($_SESSION['liste']) && $_SESSION['liste']['locked'])
		return true;
	else
		return false;
}

/*
* Compte le nombre d'éléments de la liste
*/
function compterElements()
{
	if(isset($_SESSION['liste']))
		return count($_SESSION['liste']['nomObjet']);
	else
		return 0;
}

function devis_unitaire($colonne,$nom)
{
	$bdd = connexion_bdd();
	$requete = 'SELECT '.$colonne.' FROM cout_traitement WHERE Nom_Objet = :nom';
	$resultat = $bdd->prepare($requete);
	$resultat->execute(array('nom' => $nom));
	$donnee = $resultat->fetch();
	return $donnee[0];
}

function envoi_mail($destinataire,$sujet,$contenu) 
{
	$delimiteur = "-----=".md5(uniqid(rand()));

	// En-tête de l'e-mail						
	$headers  = "MIME-Version: 1.0 \r\n";
	$headers .= "Content-Type: multipart/related; boundary=\"$delimiteur\"\r\n";
	$headers .= "Content-Transfer-Encoding: 8bit \r\n";
	
	// En-têtes additionnels 
	$headers .= "Date: " . date('r',$_SERVER['REQUEST_TIME']) . "\r\n";
	$headers .= "Message-ID: <" . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . "@" .  $_SERVER['SERVER_NAME'] . "> \r\n";
	$headers .= "From: noreply <noreply@collectus.fr> \r\n";
	$headers .= "Bcc: collectus@collectus.fr \r\n";
	$headers .= "Reply-To: Recipient Name <noreply@collectus.fr> \r\n";
	$headers .= "Subject: {$sujet}";
	$headers .= "X-Mailer: PHP/" . phpversion();
	$headers .= "\r\n";					
	
	// 2ème partie du message (Code HTML)	
	
	$message = "--$delimiteur\r\n";
	$message .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
	$message .= "Content-Transfer-Encoding:8bit\r\n";
	$message .= "\r\n";
	$message .= '<html><body>';
	$message .= $contenu;
	$message .= '<div style="height:170px;position:relative;background: url(\'cid:Bas\') no-repeat bottom left;">';
	$message .= '<br/><br/><br/>';
	$message .= "<img src=\"cid:Logo\" width=\"100px\" height=\"28px\">";
	$message .= '<br/>';
	$message .= '86 av. du Dr Arnold Netter - 75012 Paris';
	$message .= '<br/>';
	$message .= 'www.collectus.fr';
	$message .= '<br/>';
	$message .= 'Tél : 01.77.13.18.55</div></body></html>';
	$message .= "\r\n";
	
	// 3ème partie (Fichier joint inline)
	
		// Logo
	$fichier = "./images/logo.jpg";
	$fp      = fopen($fichier, "rb");
	$fichierattache = fread($fp, filesize($fichier));
	fclose($fp);
	$fichierattache = chunk_split(base64_encode($fichierattache));

	$message .= "--$delimiteur\r\n";
	$message .= "Content-Type: application/octet-stream; name=\"$fichier\"\r\n";
	$message .= "Content-Transfer-Encoding: base64\r\n";
	$message .= "Content-ID: <Logo>\r\n";
	$message .= "\r\n";
	$message .= $fichierattache . "\r\n";
	$message .= "\r\n\r\n";
	
		// Background
	$fichier2 = "./images/bottommail.png";
	$fp2      = fopen($fichier2, "rb");
	$fichierattache2 = fread($fp2, filesize($fichier2));
	fclose($fp2);
	$fichierattache2 = chunk_split(base64_encode($fichierattache2));

	$message .= "--$delimiteur\r\n";
	$message .= "Content-Type: application/octet-stream; name=\"$fichier2\"\r\n";
	$message .= "Content-Transfer-Encoding: base64\r\n";
	$message .= "Content-ID: <Bas>\r\n";
	$message .= "\r\n";
	$message .= $fichierattache2 . "\r\n";
	$message .= "\r\n\r\n";
					
	if(mail($destinataire, $sujet, $message, $headers))
	{
		return true;
	}
	else
	{
		return false;
	}
/** Fin mail **/

}