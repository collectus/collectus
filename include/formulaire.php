<div id="formulaire">
	<div class="form" id="finscription">
		<span id="contacter2">Demander un Devis</span>
		<span id="contacter3">01 79 72 33 38</span><br>
		
		<span id="contacter">Nous vous recontactons</span><img src="images/info.png" OnMouseOver="AfficherInfoBulle('infobulle');" OnMouseOut="MasquerInfoBulle('infobulle');"/>
		<span id="infobulle">Vous serez contactés par nos services dans un délai de 15 minutes<br><font style="font-style:italic;font-size:11px;float:right;"></font></i></span>
		
		<form name="inscription" method="post" action="envoi.html">			
		<table id="table1" BORDER=0>
			<tr>
				
			</tr>
		</table>
		<table id="table2" BORDER=0>
			<tr>
				<td colspan="2"><INPUT type="text" name="raison" value="<?php if(isset($_POST["raison"])){echo $_POST["raison"];} ?>" placeholder="Raison sociale" id="raison"></td>
			</tr>
			<tr>
				<td><INPUT type="text" name="nomContact" value="<?php if(isset($_POST["nomContact"])){echo $_POST["nomContact"];} ?>" placeholder="Nom"></td>
				<td><INPUT type="text" name="prenomContact" value="<?php if(isset($_POST["prenomContact"])){echo $_POST["prenomContact"];} ?>" placeholder="Prenom"></td>
			</tr>
			<tr>
				<td colspan="2"><INPUT type="text" name="postal" value="<?php if(isset($_POST["postal"])){echo $_POST["postal"];} ?>" placeholder="Code postal"></td>
			</tr>
			<tr>
				<td colspan="2"><INPUT type="mail" name="email" placeholder="E-mail"></td>
			</tr>
			<tr>
				<td><INPUT type="tel" name="numtel" value="<?php if(isset($_POST["numtel"])){echo $_POST["numtel"];} ?>" placeholder="Téléphone"></td>
				<td><INPUT border=0 type="submit" name="envoyer" id="envoyer" value="Ok" ></td>
			</tr>					
		</table>
			
			<a class="indication">*merci de remplir tous les champs</a>
		</form>	
		
	</div>
			
	<a href="devis.php" target="_blank" id="demande_collecte">FAIRE SON INVENTAIRE EN LIGNE</a>
</div>