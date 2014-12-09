<div id="formulaire">
	<div class="form" id="finscription">
		<span id="contacter">More information</span><img src="../images/info.png" OnMouseOver="AfficherInfoBulle('infobulle');" OnMouseOut="MasquerInfoBulle('infobulle');"/>
		<span id="infobulle">After this form has been send you will receive a call from one of our technician. Please fill in all fields</span>
		<form name="inscription" method="post" action="envoi.php">
		<table BORDER=0>
			<tr>
				<td><INPUT type="text" name="raison" placeholder="Company name"></td>
			</tr>
			<tr>
				<td><INPUT type="text" name="nomContact" placeholder="Name"></td>
			</tr>
			<tr>
				<td><INPUT type="text" name="prenomContact" placeholder="First name"></td>
			</tr>
			<tr>
				<td><INPUT type="mail" name="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td><INPUT type="text" name="pays" placeholder="Country"></td>
			</tr>
			<tr>
				<td><INPUT type="tel" name="numtel" placeholder="Phone number"></td>
			</tr>
			<tr>
				<td><INPUT border=0 type="submit" name="envoyer" id="envoyer" value="Submit"></td>
			</tr>					
		</table>
		</form>	
	</div>
</div>