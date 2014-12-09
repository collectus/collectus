<div id="head">
	<div id="imagesociete">
	<a href="./index.html"><img src="images/collectus_logo.jpg" width=180 height=50</img></a>
	</div>
	
	<div id="numero_head">
	01.79.72.33.38
	</div>
	<div id="moto_head">
	Evacuation <span style="color:rgb(76,76,76)"> Destruction</span> Recyclage
	</div>
	<div id="langage">
	<table>
		<tr>
			<td><a href="./index.html">fr</a></td>  <!--<img src="images/vf.png" alt="VF">-->
			<td><a href="./lang-en/index.php">en</a></td> <!--<img src="images/vo.png" alt="VO"/>-->
		
		</tr>
	</table>
	</div>
	
	<div id="surmenu">
	<table>
		<tr>
		
			<!--<td><a class="ed" href="./pageboutique.php">La boutique</a></td>
			<td><a class="ed" href="./pageart.php">Art Gallery</a></td> 
			<td><a class="ed" href="./pagefranchise.php">Franchise</a></td> -->
			<td><a class="ed" href="./pagecontact.php">Contact</a></td> 
		</tr>
	</table>
	</div>
	
	<!--<div id="head_title">
	<span>Solutions de recyclage et propreté <br/>pour consommables et matériel de bureau</span>
	</div>-->			
	<div id="fconnexion">
		<?php
		if(isset($_SESSION["id_membre"])){
			
			echo '<div id="logged"><span id="connected">Connecté</span>'; 
			if(isset($_SESSION["nom"]) AND isset($_SESSION["prenom"])){
			
			echo '<span id="membre_logged">'.$_SESSION["nom"].' '.$_SESSION["prenom"].'</span>';
			}
			echo '<span id="logout"><a href="./deconnexion.html" id="logout">Déconnexion</a></span>';
			echo '</div>';
		}else{
			echo '<table BORDER=0>
				
				<tr>
					<td id="login">
					<a href="#login-box" class="login-window" id="logina">S\'identifier</a>
					</td>
				</tr>
				<tr>
					<td id="registrer">
					<a href="inscription.php" id="registrera">Enregistrement</a>
					</td>
				</tr>
			</table>';
		}
		?>
	</div>
</div>