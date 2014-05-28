<script>
    $(document).ready(function(){
        $('#titre').animate({
            opacity:0.5
        }, 'slow');
        $('#acligue').animate({
            opacity:0.8
        }, 'medium');
    });
</script>
<div id="titre" ><div class="Background">AJOUTER UNE COMPETITION</div></div><div id="acligue"><center>
<form method="POST" action="index.php?uc=admin&action=fonction" id="formulaire"><br>
	<table>
		<tr>
			<td>
			<label for="epreuve">Nom de la nouvelle compétition :</label>
			</td>
			<td>
			<input id="epreuve" type="text" name="epreuve" class="rencontreinput" size="30" maxlength="50" required>
			</td>
		</tr>
		<tr>
            <td></td>
			<td>
			<input type="submit" value="Valider" name="validerCompet" id="valider la Compétition" >
			</td>
			<td></td>
		</tr>
	</table>
</form>
</div>
</center>