<div id="formconn">
<center><h1>COMPOMatch</h1> <br><br><br>
<form method="POST" action="index.php?uc=connexion&action=requ_connexion">
	<input id="login1" placeholder="Login" class="biginput" type="text" name="login"required><br><br>
	<input id="mdp" placeholder="Mot de passe" class="biginput" type="password" name="mdp" maxlength="50" required><br><br><br>
	<input type="submit" class="biginput" value="Valider" name="valider" value="Login" id="valider">
</form>
    <div id="loading"><img src="util/img/loading1.gif"></div>
</center>
</div>

<script>
    $("#valider").on('click',function(){
        document.getElementById('loading').style.visibility="visible";
    });
</script>