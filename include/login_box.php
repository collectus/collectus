<div id="login-box" class="login-popup">
	<a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
	<div id="identification"><img src="images/cle.png" /><span id="login_span">Identification</span></div>
	  <form method="post" class="signin" action="" name="login_form">
			<fieldset class="textbox">
			<label class="username">
			<span>Adresse mail</span>
			<input id="username" name="login" value="" type="text" autocomplete="on" placeholder="Adresse mail">
			</label>
			<label class="password">
			<span>Mot de passe</span>
			<input id="password" name="password" value="" type="password" placeholder="Mot de passe">
			</label>
			<span id="login_span" style="color:red;display:none;">Veuillez remplir tous les champs</span>
			<button class="submit button" type="submit" name="login_submit" id="login_submit">Se connecter</button>
			<p>
			<a class="forgot" href="espace-forgotten.html">Mot de passe oublié ?</a>
			<a href="inscription.php">Pas encore inscrit ?</a>
			</p>        
			</fieldset>
	  </form>
</div>

<script>
$(document).ready(function(){
	$('#login_submit').live('click',function(){
		if(document.login_form.login == "" || document.login_form.password == ""){
			$('#login-span').style.display = "block";
			return false;
		}else{
			document.login_form.login_submit.submit();
		}
	});
});
</script>