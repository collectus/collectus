<?php
session_start();
include_once('include/fonctions.php');
include_once('include/connexion.php');

$error = false;
$incomplet = 10;
$poids_total = 0;

$raison = isset($_SESSION["raison"]) ? $_SESSION["raison"] : NULL;
$nom = isset($_SESSION["nom"]) ? $_SESSION["nom"] : NULL;
$prenom = isset($_SESSION["prenom"]) ? $_SESSION["prenom"] : NULL;
$tel = isset($_SESSION["tel"]) ? $_SESSION["tel"] : NULL;
$mail = isset($_SESSION["mail"]) ? $_SESSION["mail"] : NULL;

if(isset($_POST["submit_temporary"]))
{
	$_SESSION["devis"] = array();
	$_SESSION["devis"]["options"] = isset($_POST["options"]) ? $_POST["options"] : array();
	$_SESSION["devis"]["devis_postal"] = $_POST["devis_postal"];
	$_SESSION["devis"]["devis_quai"] = $_POST["devis_quai"];
	$_SESSION["devis"]["devis_lift"] = $_POST["devis_lift"];
	$_SESSION["devis"]["devis_etage"] = $_POST["devis_etage"];
	
	$_SESSION["devis"]["commentaire"] = trim($_POST["commentaire"]);
	$_SESSION["devis"]["devis_raison"] = isset($_POST["raison"]) ? $_POST["raison"] : $raison;
	$_SESSION["devis"]["devis_nom"] = isset($_POST["nom"]) ? $_POST["nom"] : $nom;
	$_SESSION["devis"]["devis_prenom"] = isset($_POST["prenom"]) ? $_POST["prenom"] : $prenom;
	$_SESSION["devis"]["devis_mail"] = isset($_POST["mail"]) ? $_POST["mail"] : $mail;
	$_SESSION["devis"]["devis_tel"] = isset($_POST["tel"]) ? $_POST["tel"] : $tel;
	
	if(compterElements() == 0){
		$incomplet = 1;
	}else{
		if(!isset($_POST["devis_connecte"])){
			if($_SESSION["devis"]["devis_raison"] == NULL OR $_SESSION["devis"]["devis_nom"] == NULL OR $_SESSION["devis"]["devis_prenom"] == NULL OR $_SESSION["devis"]["devis_mail"] == NULL OR $_SESSION["devis"]["devis_tel"] == NULL){
				$incomplet=2;
			}else{
				$incomplet=0;
				$_SESSION['liste']['locked'] = true;
			}
		}else{
			$incomplet=0;
			$_SESSION['liste']['locked'] = true;
		}
	}
}

if(isset($_POST["submit_final"])){	
	$contenu = 'Bonjour, <br/><br/>L\'équipe Collect\'us a bien pris en compte votre demande.<br/>Un commercial vous contactera d\'ici quelques minutes.<br/><br/>
<p style="font-size:16px;
text-decoration:underline;
font-weight:bold;
color:rgb(12,60,108);
display:block;">Récapitulatif de la demande</p>
<table style="
width:600px;
margin-top:10px;
margin-bottom:15px;
border:2px solid rgb(12,60,108);">';
	$contenu .= '<tr style="font-weight:bold;
color:rgb(12,60,108);
border-bottom:2px solid rgb(12,60,108);
background-color:rgb(208,230,255);"><td id="td1">N°</td><td id="td2">Désignation</td><td id="td3">Poids unit.</td><td id="td4">Quantité</td><td id="td5">Poids</td></tr>';
	for($i=0 ; $i < compterElements() ; $i++)
		{
			$p = $i + 1;
			$contenu .= '<tr>';
			$contenu .= '<td style="text-align:center;padding:5px 2px;">'.$p.'</td>';
			$contenu .= '<td style="text-align:center;padding:5px 2px;">'.htmlspecialchars($_SESSION['liste']['equipement'][$i]).' - '.htmlspecialchars($_SESSION['liste']['nomObjet'][$i]).'</td>';
			$contenu .= '<td style="text-align:center;padding:5px 2px;">'.htmlspecialchars(devis_unitaire('Poids_Unite',$_SESSION['liste']['nomObjet'][$i])).'</td>';
			$contenu .= '<td style="text-align:center;padding:5px 2px;">'.htmlspecialchars($_SESSION['liste']['qteObjet'][$i]).'</td>';
			$poids = floatval(htmlspecialchars(devis_unitaire('Poids_Unite',$_SESSION['liste']['nomObjet'][$i]))) * floatval(htmlspecialchars($_SESSION['liste']['qteObjet'][$i]));
			$poids_total += $poids;
			$contenu .= '<td style="text-align:center;padding:5px 2px;">'.$poids.' kg</td>';
			$contenu .= '</tr>';
		}			
	
	$contenu .= '</table>';
	$contenu .= '<span style="font-weight:bold;">Poids total</span> : '.$poids_total.' kg.';
	$quai = $_SESSION["devis"]["devis_quai"]=="quai0" ? "Non" : "Oui";
	$ascenseur = $_SESSION["devis"]["devis_lift"]=="lift0" ? "Non" : "Oui";
	$etage = $_SESSION["devis"]["devis_etage"]==0 ? "Rez-de-chaussée" : $_SESSION["devis"]["devis_etage"];
	$contenu .= '<br><br><p style="font-size:16px;
text-decoration:underline;
font-weight:bold;
color:rgb(12,60,108);
display:block;">Transport</p><span style="font-weight:bold;">Code postal</span> : '.$_SESSION["devis"]["devis_postal"].'<br><span style="font-weight:bold;">Quai de livraison</span> : '.$quai.'<br><span style="font-weight:bold;">Ascenseur</span> : '.$ascenseur.'<br><span style="font-weight:bold;">Etage</span> : '.$etage;
	$contenu .= '<br><br><p style="font-size:16px;
text-decoration:underline;
font-weight:bold;
color:rgb(12,60,108);
display:block;">Options</p>';
	$options = implode('<br/> ',$_SESSION["options"]);
	$contenu .= $options;
	$contenu .= '<br><br><p style="font-size:16px;
text-decoration:underline;
font-weight:bold;
color:rgb(12,60,108);
display:block;">Commentaires</p>';
	if(isset($_SESSION["devis"]["commentaire"])){
	$contenu .= $_SESSION["devis"]["commentaire"];
	}else{
	$contenu .= 'Aucun commentaire.';
	}
	$contenu .= '<br><br><p style="font-size:16px;
text-decoration:underline;
font-weight:bold;
color:rgb(12,60,108);
display:block;">Coordonnées</p><span style="font-weight:bold;">Raison sociale</span> : '.$_SESSION["devis"]["devis_raison"].'<br><span style="font-weight:bold;">Noms</span> : '.$_SESSION["devis"]["devis_nom"].'<br><span style="font-weight:bold;">Prenom</span> : '.$_SESSION["devis"]["devis_prenom"].'<br><span style="font-weight:bold;">Adresse mail</span> : '.$_SESSION["devis"]["devis_mail"].'<br><span style="font-weight:bold;">Téléphone</span> : '.$_SESSION["devis"]["devis_tel"];
	$contenu .= '<br/><br/><br/><span style="font-weight:bold;">L\'équipe Collect\'us,</span>';
	
	$envoi_devis = envoi_mail($_SESSION["devis"]["devis_mail"],'Inventaire pour collecte',$contenu);
	unset($_SESSION['liste']);
	unset($_SESSION['devis']);
	unset($_SESSION['options']);
}

if(isset($_POST["submit_devis_hide"])){
	
	$select1 = $_POST["select1"];
	$select2 = $_POST["select2"];
	$select3 = $select1=="En vrac"? $select2 : $_POST["select3"];
	$select4 = $select1=="En vrac"? $select2 : $_POST["select4"];

	if(!isset($_SESSION["id_client"]))
		$_SESSION["id_client"] = rand(1,1000000);
		
	creationListe();
	ajoutElement($select1,$select2,$select3,$select4,1);
}

$action = (isset($_POST['action'])? $_POST['action']: (isset($_GET['action'])? $_GET['action']:null ));

if($action != null)
{
	if(!in_array($action,array('retirer','ajouter','suppression','Rafraichir')))
		$error = true;
		
	$l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
	$q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;
	
	//Suppression d'un élément
	$l = preg_replace('#\v#', '',$l);
	
	//Quantité éléments
	if (is_array($q)){
      $qteElement = array();
      $i=0;
      foreach ($q as $contenu){
         $qteElement[$i++] = intval($contenu);
      }
	}
	else
	$q = intval($q);
	
	//Clé élément ajouter/retirer
	$k = array_search($l, $_SESSION['liste']['nomObjet']);
}

if(!$error)
{
	switch($action)
	{
		Case "retirer":
			modifierQteListe($_SESSION['liste']['nomObjet'][$k],round($_SESSION['liste']['qteObjet'][$k])-1);
			break;
		Case "ajouter":
			modifierQteListe($_SESSION['liste']['nomObjet'][$k],round($_SESSION['liste']['qteObjet'][$k])+1);
			break;
		Case "suppression":
			supprimerElement($l);
			break;
		Case "Rafraichir":
			for($i=0;$i<count($qteElement);$i++)
			{
				modifierQteListe($_SESSION['liste']['nomObjet'][$i],round($qteElement[$i]));
			}
			break;			
		Default:
			break;
	}
}

if(isset($_POST["submit_retour"])){
	$_SESSION['liste']['locked'] = false;
	$incomplet = 10;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<div id="headpage"><span>Collect'us@</span></div>
	<?php include('include/login_box.php'); ?>
<div id="conteneur">
	<?php include('include/head.php'); ?>
	<?php include('include/shmenu.php'); ?>
	<div id="contenu">
		<div id="imagecentrale">
			<a><img src="images/truck.jpg" width=1000 height=220</img></a>
		</div>
		
		<div id="devis_centre">
			<div id="droite">
			<?php if((isset($_SESSION['liste']) AND $_SESSION['liste']['locked'] == true) OR isset($envoi_devis) ){
				echo '<img src="images/femmeaccueil.png" id="biatch" />';
			}else{
			?>
				<form name="devis" action="devis.html" method="post" id="devis">
				<div class="devis_haut" id="devis_1"><span class="number" id="numberone"></span><p class="choice" id="choice1">INVENTAIRE</p></div>
				<select name="select1" id="sel1">
					<option value="none">Sélectionner un service</option>';
					<option value="En vrac">Collecte en vrac (non triée)</option>
					<option value="Au détail">Collecte au détail (triée)</option>
				</select>
				<div class="devis" id="devis_2"><span class="number"></span><p class="choice">Type de matériel</p></div>
				<select name="select2" id="sel2">
				</select>
				<div class="devis" id="devis_3"><span class="number"></span><p class="choice">Catégorie</p></div>
				<select name="select3" id="sel3">
				</select>
				<div class="devis" id="devis_4"><span class="number"></span><p class="choice">Equipement</p></div>
				<select name="select4" id="sel4">
				</select>
				<img src="images/fond_devis_calcul3.png" usemap="#Map"/>
				<map name="Map">
					<area shape="rect" coords="64,8,139,32" style="cursor:pointer;" id="addline" />
				</map>
				<input type="submit" name="submit_devis_hide" id="submit_devis_hide" hidden />
				</form>
				<span id="devis_alert">Veuillez sélectionner un service</span>
<?php		} ?>
			<br>
				<a class="indication">*Modifier les quantités sur la zone rose</a><br><br>
				<a class="indication">**Ajouter autant d'équipement que necessaire</a>
			</div>
			
			<?php 
			if(isset($envoi_devis)){
			
				echo 'Un mail vient de vous être envoyé.<br/>Un commercial vous contactera d\'ici quelques minutes.';
				echo '<br/><br/><font style="font-style:italic;">Si vous n\'avez pas reçu d\'e-mail de confirmation, pensez à vérifier vos spams</font>';
				echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=./">';
				
			}elseif($incomplet == 0) { ?>
			
			<div id="liste">
			<div id="devis_traitement" class="class_devis">
				<p class="devis_title">Récapitulatif de la demande</p><br/>
				<table>
				<tr id="tr1">
						<td id="td1">N°</td>
						<td id="td2">Désignation</td>
						<td id="td3">Poids unit.</td>
						<td id="td4">Quantité</td>
						<td id="td5">Poids</td>	
				</tr>
<?php			for($i=0 ; $i < compterElements() ; $i++)
				{
					$p = $i + 1;
					echo '<tr>';
					echo '<td>'.$p.'</td>';
					echo '<td>'.htmlspecialchars($_SESSION['liste']['equipement'][$i]).' - '.htmlspecialchars($_SESSION['liste']['nomObjet'][$i]).'</td>';
					echo '<td>'.htmlspecialchars(devis_unitaire('Poids_Unite',$_SESSION['liste']['nomObjet'][$i])).'</td>';
					echo '<td>'.htmlspecialchars($_SESSION['liste']['qteObjet'][$i]).'</td>';
					$poids = floatval(htmlspecialchars(devis_unitaire('Poids_Unite',$_SESSION['liste']['nomObjet'][$i]))) * floatval(htmlspecialchars($_SESSION['liste']['qteObjet'][$i]));
					$poids_total += $poids;
					echo '<td>'.$poids.' kg</td>';
					echo '</tr>';
				} ?>
				</table>
				<label>Poids total :</label> <?php echo $poids_total;?> kg
			</div>
			
			<div id="devis_transport" class="class_devis">
				<p class="devis_title">Transport</p>
				<table>
				<tr><td><label>Code postal :</label></td><td><?php echo $_POST["devis_postal"]; ?></td></tr>
				<tr><td><label>Quai de livraison :</label></td><td><?php if($_POST["devis_quai"] == "quai1"){ echo ' Oui'; }else{ echo ' Non'; } ?></td></tr>
				<tr><td><label>Ascenseur :</label></td><td><?php if($_POST["devis_lift"] == "lift1"){ echo ' Oui'; }else{ echo ' Non'; } ?></td></tr>
				<tr><td><label>Etage :</label></td><td><?php if($_POST["devis_etage"] == 0){ echo ' Rez-de-chaussée'; }else{ echo ' '.$_POST["devis_etage"].'ème étage'; } ?></td></tr>
				</table>
			</div>
			<div id="devis_option" class="class_devis">
				<p class="devis_title" style="margin-bottom:10px;">Options</p>
				<?php if(!isset($_POST["options"])){
					echo 'Vous n\'avez choisi aucune option';
				}else {
					$options_text = implode('<br/> ',$_POST["options"]);
					echo $options_text;
				}
				$_SESSION['options'] = isset($_POST['options']) ? $_POST['options'] : array('Vous n\'avez choisi aucune option');				
				?>
			</div>			
			<div id="devis_commentaire" class="class=devis">
				<p class="devis_title">Commentaires</p>
			<?php echo '<div id="devis_commentaire_apercu">'.$_SESSION["devis"]["commentaire"].'</div>'; ?>
			</div>
			<div id="devis_coordonnees" class="class_devis">
					<p class="devis_title">Coordonnées</p>
					<table>
					<tr><td><label>Raison sociale : </td><td><?php echo $_SESSION["devis"]["devis_raison"]; ?></td></tr>
					<tr><td><label>Nom : </td><td><?php echo $_SESSION["devis"]["devis_nom"]; ?></td></tr>
					<tr><td><label>Prénom: </td><td><?php echo $_SESSION["devis"]["devis_prenom"]; ?></td></tr>
					<tr><td><label>Adresse mail : </td><td><?php echo $_SESSION["devis"]["devis_mail"]; ?></td></tr>
					<tr><td><label>Téléphone : </td><td><?php echo $_SESSION["devis"]["devis_tel"]; ?></td></tr>
					</table>
			</div>
			<div id="zone_submit_final">			
			<form name="form_submit" action="devis.html" method="post">
			<input type="submit" id="submit_retour" name="submit_retour" value="Retour" /><input type="submit" id="submit_final" name="submit_final" value="Envoyer" />
			</form>
			</div>
			</div>
			
<?php		}elseif(isset($_SESSION['liste'])) { ?>
			<div id="liste">
			<form name="form_devis" action="devis.html" method="post">
			<div id="devis_traitement" class="class_devis">
				<p class="devis_title">Traitement</p>
				<table id="table_devis">
					<tr id="tr1">
						<td id="td1">N°</td>
						<td id="td2">Désignation</td>
						<td id="td3">Poids unit.</td>
						<td id="td4">Quantité</td>
						<td id="td5">Poids</td>						
						<td id="td8">Supp.</td>
					</tr>
					<?php
					if(creationListe())
					{
						$nbElements = compterElements();
						if($nbElements <= 0)
						{
							echo '<tr><td colspan=6>Votre liste est actuellement vide.</td></tr>';
						}
						else
						{
							for($i=0 ; $i < $nbElements ; $i++)
							{
								$p = $i + 1;
								echo '<tr>';
								echo '<td>'.$p.'</td>';
								echo '<td>'.htmlspecialchars($_SESSION['liste']['equipement'][$i]).' - '.htmlspecialchars($_SESSION['liste']['nomObjet'][$i]).'</td>';
								echo '<td>'.htmlspecialchars(devis_unitaire('Poids_Unite',$_SESSION['liste']['nomObjet'][$i])).'</td>';
								echo '<td><a class="devis_qte" href="'.htmlspecialchars('devis.php?action=retirer&l='.rawurlencode($_SESSION['liste']['nomObjet'][$i])).'">-</a> <input type="text" class="devis_qte_elements" id="devis_qte" name="q[]" value="'.htmlspecialchars($_SESSION['liste']['qteObjet'][$i]).'" style="text-align:right;" /> <a class="devis_qte" href="'.htmlspecialchars('devis.php?action=ajouter&l='.rawurlencode($_SESSION['liste']['nomObjet'][$i])).'">+</a></td>';
								$poids = floatval(htmlspecialchars(devis_unitaire('Poids_Unite',$_SESSION['liste']['nomObjet'][$i]))) * floatval(htmlspecialchars($_SESSION['liste']['qteObjet'][$i]));
								$poids_total += $poids;
								echo '<td>'.$poids.'</td>';
								echo '<td><a href="'.htmlspecialchars('devis.php?action=suppression&l='.rawurlencode($_SESSION['liste']['nomObjet'][$i])).'">X</a></td>';
								echo '</tr>';
							}
						}
					}
					?>
				</table>
				<label>Poids total : <input type="text" readonly value="<?php echo $poids_total;?>" /> kg</label><input type="submit" id="refresh_devis" name="action" value="Rafraichir" hidden />
				
			</div>
			<div id="devis_transport" class="class_devis">
				<p class="devis_title">Transport</p>
				<table>
				<tr><td><label>Code postal : </label></td><td><select name="devis_postal">
<?php			$bdd = connexion_bdd();
				$requete = 'SELECT Code_Postal FROM cout_transport ORDER BY Code_Postal ASC';
				$resultat = $bdd->prepare($requete);
				$resultat->execute();
				while($donnees = $resultat->fetch()){					
					echo '<option value="'.$donnees[0].'"';
					if(isset($_SESSION["devis"]["devis_postal"]) AND $donnees[0] == $_SESSION["devis"]['devis_postal']){
						echo 'selected';
					}
					echo '>'.$donnees[0].'</option>';					
				}
				$resultat->closeCursor();
?>
				</select>
				</td></tr>
				<tr><td><label>Quai de livraison : </label></td><td>
				<input type="radio" name="devis_quai" value="quai1" <?php if(isset($_SESSION["devis"]["devis_quai"]) AND $_SESSION["devis"]["devis_quai"] == "quai1"){echo 'checked';} ?> >Oui 
				<input type="radio" name="devis_quai" value="quai0" <?php if(isset($_SESSION["devis"]["devis_quai"]) AND $_SESSION["devis"]["devis_quai"] == "quai1"){echo '';}else{echo 'checked';} ?> >Non</td></tr>
				<tr><td><label>Ascenseur : </label></td><td>
				<input type="radio" name="devis_lift" value="lift1" <?php if(isset($_SESSION["devis"]["devis_lift"]) AND $_SESSION["devis"]["devis_lift"] == "lift1"){echo 'checked';} ?> >Oui 
				<input type="radio" name="devis_lift" value="lift0" <?php if(isset($_SESSION["devis"]["devis_lift"]) AND $_SESSION["devis"]["devis_lift"] == "lift1"){echo '';}else{echo 'checked';} ?> >Non</td></tr>
				<tr><td><label>Etage : </label></td>
				<td><select name="devis_etage">
<?php			for($i = 0; $i<=20;$i++){
					echo '<option value="'.$i.'"';
					if(isset($_SESSION["devis"]["devis_etage"]) AND $i == $_SESSION["devis"]["devis_etage"]){
						echo 'selected';
					}
					echo '>';
					if($i == 0){echo 'RdC';}else{echo $i;}
					echo '</option>';
				}
?>
				</select></td></tr>
				</table>
			</div>
			<div id="devis_option" class="class_devis">
				<p class="devis_title">Options</p>
				<input type="checkbox" name="options[]" value="Prévisite de préparation" <?php if(isset($_SESSION["devis"]["options"]) AND in_array('Prévisite de préparation',$_SESSION["devis"]["options"])){echo 'checked';} ?>/><label>Prévisite de préparation</label><br/>
				<input type="checkbox" name="options[]" value="Faire mettre sur palette" <?php if(isset($_SESSION["devis"]["options"]) AND in_array('Faire mettre sur palette',$_SESSION["devis"]["options"])){echo 'checked';} ?>/><label>Faire mettre sur palette</label><br/>
				<input type="checkbox" name="options[]" value="Intervention de nuit" <?php if(isset($_SESSION["devis"]["options"]) AND in_array('Intervention de nuit',$_SESSION["devis"]["options"])){echo 'checked';} ?>/><label>Intervention de nuit</label><br/>
				<input type="checkbox" name="options[]" value="Relevé des numéros de série" <?php if(isset($_SESSION["devis"]["options"]) AND in_array('Relevé des numéros de série',$_SESSION["devis"]["options"])){echo 'checked';} ?>/><label>Relevé des numéros de série</label>
			</div>
			<div id="devis_commentaire" class="class=devis">
				<p class="devis_title">Commentaires</p>
			<textarea name="commentaire" rows="4" cols="40" maxlength="200" placeholder="Pour toutes précisions à ajouter... (200 caractères)"><?php if(isset($_SESSION["devis"]["commentaire"])){echo $_SESSION["devis"]["commentaire"];} ?></textarea>
			</div>
				<?php 
				if(!isset($_SESSION['id_membre'])){
					echo '<div id="devis_coordonnees" class="class_devis">
					<p class="devis_title">Coordonnées</p>
					<table>
					<tr><td><label>Raison sociale : </td><td><input type="text" name="raison" value="';
					if(isset($_POST["raison"])){echo $_POST["raison"];} 
					echo'" /></label></td></tr>
					<tr><td><label>Nom : </td><td><input type="text" name="nom" value="';
					if(isset($_POST["nom"])){echo $_POST["nom"];} 
					echo'" /></label></td></tr>
					<tr><td><label>Prénom : </td><td><input type="text" name="prenom" value="';
					if(isset($_POST["prenom"])){echo $_POST["prenom"];} 
					echo'" /></label></td></tr>
					<tr><td><label>Adresse mail : </td><td><input type="text" name="mail" value="';
					if(isset($_POST["mail"])){echo $_POST["mail"];} 
					echo'" /></label></td></tr>
					<tr><td><label>Téléphone : </td><td><input type="text" name="tel" value="';
					if(isset($_POST["tel"])){echo $_POST["tel"];} 
					echo'" /></label></td></tr></table>
					</div>';
				}else{
					if($_SESSION["nom"] == NULL OR $_SESSION["prenom"] == NULL OR $_SESSION["tel"] == NULL){
						echo '<div id="devis_coordonnees" class="class_devis">
							<p class="devis_title">Coordonnées</p>
							<table>';
						if($_SESSION["nom"] == NULL){
							echo '<tr><td><label>Nom : </td><td><input type="text" name="nom" /></label></td></tr>';
						}
						if($_SESSION["prenom"] == NULL){
							echo '<tr><td><label>Prénom : </td><td><input type="text" name="prenom" /></label></td></tr>';
						}
						if($_SESSION["tel"] == NULL){
							echo '<tr><td><label>Téléphone : </td><td><input type="text" name="tel" /></label></td></tr>';
						}
						echo '</table></div>';
					}else{
						echo '<input type="hidden" name="devis_connecte" />';
					}
				}
				?>
			
			<input type="submit" id="submit_temporary" name="submit_temporary" value="Continuer" />	
<?php		if($incomplet == 1){
				echo '<span style="color:red;">Votre liste ne contient aucun élément.</span>';
			}
			if($incomplet == 2){
				echo '<span style="color:red;">Veuillez remplir tous les champs pour continuer.</span>';
			}
?>
			</form>
			</div>
<?php 		
			}else{
?>				

				<div id="center2">
				<div id="pricer_title2">
					Inventaire
				</div>
				<!--<div id="pricer_text">-->
					<br>
					Faites votre inventaire et gagner du temps à l'aide du formulaire de gauche :<br><br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>1.</strong>&nbsp Selectionnez le type d'équipement à collecter et cliquez sur "Ajouter"<br><br>  
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>2.</strong>&nbsp Détérminez les quantités de chaque ligne sur l'encadré rose<br><br> 
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>3.</strong>&nbsp Ajoutez autant d'équipement que vous avez besoin<br><br> 
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>4.</strong>&nbsp Remplissez les informations complementaires et soumettez nous votre inventaire<br><br> 
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>5.</strong>&nbsp Notre service vous contactera
				
						
				<!--</div>-->	
				</div>
				
<?php
			}
?>
		</div>
		<div id="imagebas">
			<a><img src="images/truck_bas.jpg" width=1000 height=80</img></a>
		</div>
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
	$('#addline').live('click touchstart', function() {
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
$(document).ready(
function() {
    $("#devis_qte").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
});
-->
</script>
<script type="text/javascript">
<!--
$(document).ready(
function() {
	$( ".devis_qte_elements" ).change(function() {
		$("#refresh_devis").click();
	});
});
-->
</script>
<script type="text/javascript">
<!--
$(document).ready(function(){
		var select1 = document.getElementById("sel1");
		var select2 = document.getElementById("sel2");
		var select3 = document.getElementById("sel3");
		var select4 = document.getElementById("sel4");
		var choix="";
		select2.disabled = true;
		select3.disabled = true;
		select4.disabled = true;
        
		select1.onchange = function(){
			select2.innerHTML = "";
			select3.innerHTML = "";
			select4.innerHTML = "";		
			select2.disabled = false;
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
					choix = '<option value="Equipement bureautique">Equipement bureautique</option><option value="Onduleur">Onduleur</option><option value="Stockage">Stockage</option><option value="Equipement réseau">Equipement réseau</option><option value="Ecran cathodique">Ecran cathodique CRT</option><option value="Ecran plat">Ecran plat TFT/LCD</option><option value="Ordinateur portable">Ordinateur portable</option><option value="Serveur">Serveur</option><option value="Unité centrale">Unité centrale</option><option value="Eclairage">Eclairage</option>';
					select3.innerHTML = choix;
				}else if(select2.value == "Matériel d\'impression"){
					choix = '<option value="Imprimante jet d\'encre">Imprimante jet d\'encre</option><option value="Imprimante laser">Imprimante laser</option><option value="Copieur et MFP">Copieur et MFP</option><option value="Traçeur">Traçeur</option><option value="Tube toner photocopieur">Tube toner photocopieur</option><option value="Cartouches jet d\'encre">Cartouches jet d\'encre</option><option value="Cartouches laser">Cartouches laser</option>';
					select3.innerHTML = choix;
				}else if(select2.value == "Mobile"){
					choix = '<option value="Mobile">Mobile</option><option value="Tablette">Tablette</option><option value="Divers électronique">Divers électronique</option>';
					select3.innerHTML = choix;
				}else if(select2.value == "Image et son"){
					choix = '<option value="Tablette">Tablette</option><option value="Vidéo">Vidéo</option><option value="Photo">Photo</option><option value="Son">Son</option><option value="Ecran plasma">Ecran plasma</option><option value="Ecran LCD">Ecran LCD</option><option value="Ecran cathodique CRT">Ecran cathodique CRT</option><option value="Ecran plat TFT">Ecran plat TFT</option>';
					select3.innerHTML = choix;
				}
			}
		
		select3.onchange = function(){
			affiche_detail3();
		}
		
			function affiche_detail3(){
				if(select3.value == "Equipement bureautique"){
					choix = '<option value="Fax">Fax</option><option value="Telephonie et standard">Téléphonie et standard</option><option value="Cablage">Câblage</option><option value="Multiprise">Multiprise</option><option value="Clavier et souris">Clavier et souris</option><option value="Webcam">Webcam</option><option value="Hubs USB">Hubs USB</option><option value="Scanners">Scanners</option><option value="Lecteur/Graveur CD">Lecteur/Graveur CD</option><option value="Destructeur de document">Destructeur de document</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Onduleur"){
					select4.innerHTML = '<option value="0 - 5 kg">0 - 5 kg</option><option value="5 - 10 kg">5 - 10 kg</option><option value="10 - 15 kg">10 - 15 kg</option><option value="15 - 25 kg">15 - 25 kg</option><option value="25 - 50 kg">25 - 50 kg</option><option value="50 - 100 kg">50 - 100 kg</option><option value="100 - 150 kg">100 - 150 kg</option><option value="> 150 kg">> 150 kg</option>';
				}else if(select3.value == "Stockage"){
					choix = '<option value="Disque Dur">Disque Dur</option><option value="Cles USB">Clé USB</option><option value="Carte memoire">Carte mémoire</option><option value="Autres équipement de stockage">autres au kg</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Equipement réseau"){
					choix = '<option value="Switch / Hub">Switch/Hub</option><option value="Modem / Routeur">Modem/Routeur</option><option value="Baies brassage">Baies brassage</option><option value="Lecteurs multimedia">Lecteurs multimédia</option><option value="Antenne wifi">Antenne Wifi</option><option value="Autres équipement réseau">autres au kg</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran cathodique"){
					choix = '<option value="15\'-17\'">15\'-17\'</option><option value="19\'-21\'">19\'-21\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran plat"){
					choix = '<option value="TFT < 15\'">TFT < 15\'</option><option value="TFT >= 15\'">TFT >= 15\'</option><option value="PC tout en un">PC tout-en-un</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ordinateur portable"){
					choix = '<option value="12\'-16\'">12\'-16\'</option><option value="16\' et plus">16\' et plus</option><option value="PDA">PDA</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Serveur"){
					choix = '<option value="Serveur tour">Serveur tour</option><option value="Serveur rack">Serveur rack</option><option value="Serveur lame">Serveur lame</option><option value="Serveur chassis">Serveur chassis</option><option value="Serveur grand système">Serveur grand systeme</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Unité centrale"){
					choix = '<option value="Classique">Classique</option><option value="Compacte">Compacte</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Imprimante jet d\'encre"){
					select4.innerHTML = '<option value="0 - 5 kg">0 - 5 kg</option><option value="5 - 10 kg">5 - 10 kg</option><option value="10 - 15 kg">10 - 15 kg</option><option value="15 - 20 kg">15 - 20 kg</option>';
				}else if(select3.value == "Imprimante laser"){
					select4.innerHTML = '<option value="5 - 10 kg">5 - 10 kg</option><option value="10 - 15 kg">10 - 15 kg</option><option value="15 - 25 kg">15 - 25 kg</option><option value="25 - 50 kg">25 - 50 kg</option><option value="> 50 kg">> 50 kg</option>';
				}else if(select3.value == "Copieur et MFP"){
					select4.innerHTML = '<option value="0 - 50 kg">0 - 50 kg</option><option value="50 - 100 kg">50 - 100 kg</option><option value="100 - 150 kg">100 - 150 kg</option><option value="200 kg">200 kg</option>';
				}else if(select3.value == "Traçeur"){
					select4.innerHTML = '<option value="Traceur">Traceur</option>';
				}else if(select3.value == "Tube toner photocopieur"){
					choix = '<option value="Tube Xerox">Tube Xerox</option><option value="Tube Canon">Tube Canon</option><option value="Autre tube">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Cartouches jet d\'encre"){
					choix = '<option value="Cartouche jet d\'encre Compatible">Compatible/Remanufacturée</option><option value="Cartouche jet d\'encre HP">HP</option><option value="Cartouche jet d\'encre Canon">Canon</option><option value="Cartouche jet d\'encre Epson">Epson</option><option value="Cartouche jet d\'encre Autre">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Cartouches laser"){
					choix = '<option value="Cartouche laser Compatible">Compatible/Remanufacturée</option><option value="Cartouche laser HP">HP</option><option value="Cartouche laser Brother">Brother</option><option value="Cartouche laser Dell">Dell</option><option value="Cartouche laser Samsung">Samsung</option><option value="Cartouche laser Lexmark">Lexmark</option><option value="Cartouche laser Epson">Epson</option><option value="Cartouche laser Autre">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Mobile"){
					choix = '<option value="Mobile Apple">Apple</option><option value="Mobile Blackberry">Blackberry</option><option value="Mobile HTC">HTC</option><option value="Mobile Samsung">Samsung</option><option value="Mobile Sony">Sony</option><option value="Mobile Nokia">Nokia</option><option value="Mobile LG">LG</option><option value="Mobile autre">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Tablette"){
					choix = '<option value="Tablette Apple">Apple</option><option value="Tablette Blackberry">Blackberry</option><option value="Tablette HTC">HTC</option><option value="Tablette Samsung">Samsung</option><option value="Tablette Sony">Sony</option><option value="Tablette Nokia">Nokia</option><option value="Tablette autre">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Divers électronique"){
					choix = '<option value="Talkie Walkie">Talkie Walkie</option><option value="GPS">GPS</option><option value="Chargeur">Chargeur</option><option value="Autre au kg">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Vidéo"){
					choix = '<option value="Projecteur video">Projecteur vidéo</option><option value="Lecteur DVD/Cassette">Lecteur DVD/Cassette</option><option value="Lecteur DVD portable">Lecteur DVD portable</option><option value="Camescope">Caméscope</option><option value="Home Cinéma">Home Cinema</option><option value="Récepteur TNT">Recepteur TNT</option><option value="Câblage">Cablage</option><option value="Autre au kg">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Photo"){
					choix = '<option value="Appareil photo">Appareil photo</option><option value="Optique">Optique</option><option value="Flash">Flash</option><option value="Autre au kg">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Son"){
					choix = '<option value="Enceinte">Enceintes</option><option value="Equipement portatif">Equipement portatif</option><option value="Amplificateur">Amplificateur</option><option value="Platine vinyle">Platine vinyle</option><option value="Table mixage">Table mixage</option><option value="Mini chaine Hifi">Mini chaîne Hifi</option><option value="Câblage">Cablage</option><option value="Autre au kg">autres</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran plasma"){
					choix = '<option value="< 42\'">< 42\'</option><option value="42\' - 51\'">42\' - 51\'</option><option value="52\' - 59\'">52\' - 59\'</option><option value="> 60\'">> 60\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran LCD"){
					choix = '<option value="< 32\'">< 32\'</option><option value="32\' - 41\'">32\' - 41\'</option><option value="41\' - 51\'">41\' - 51\'</option><option value="> 51\'">> 51\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran cathodique CRT"){
					choix = '<option value="15\'">15\'</option><option value="17\'">17\'</option><option value="19\'">19\'</option><option value="21\'">21\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Ecran plat TFT"){
					choix = '<option value="TFT < 15\'">< 15\'</option><option value="TFT > 15\'">>= 15\'</option>';
					select4.innerHTML = choix;
				}else if(select3.value == "Eclairage"){
					choix = '<option value="Neon">Neon</option>';
					select4.innerHTML = choix;
				}
			}
});
-->
</script>
</body>
</html>