<div id="formulaire">
	<div class="form" id="finscription">
		<span id="contacter">Más información</span><img src="../images/info.png" OnMouseOver="AfficherInfoBulle('infobulle');" OnMouseOut="MasquerInfoBulle('infobulle');"/>
		<span id="infobulle">Por más información, completa el siguiente formulario en su totalidad. Un asesor se comunicará con usted en breve</span>
		<form name="inscription" method="post" action="envoi.php">
		<table BORDER=0>
			<tr>
				<td><INPUT type="text" name="raison" placeholder="Nombre de empresa"></td>
			</tr>
			<tr>
				<td><INPUT type="text" name="nomContact" placeholder="Nombre"></td>
			</tr>
			<tr>
				<td><INPUT type="text" name="prenomContact" placeholder="Apellido"></td>
			</tr>
			<tr>
				<td><INPUT type="mail" name="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td><INPUT type="text" name="pays" placeholder="Pais"></td>
			</tr>
			<tr>
				<td><INPUT type="tel" name="numtel" placeholder="Teléfono"></td>
			</tr>
			<tr>
				<td><INPUT border=0 type="submit" name="envoyer" id="envoyer" value="Enviar"></td>
			</tr>					
		</table>
		</form>	
	</div>
</div>