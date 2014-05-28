<script>
    $(document).ready(function(){
        $('#titre').animate({
            opacity:0.5
        }, 'slow');
        $('#acligue').animate({
            opacity:0.8
        }, 'medium');
    });
    function verif() {
        if (document.getElementById('domicile').value == document.getElementById('exterieur').value)
        {
            alert("Les deux équipes doivent être différentes !");
            return false;
        }
        if (document.getElementById('domicile').value !== document.getElementById('exterieur').value)
        {
            return true;
        }
    }

</script>

<div id="titre" ><div class="Background">AJOUTER UN MATCH</div></div><div id="acligue"><center>
<form method="POST" onsubmit="return verif();" action="index.php?uc=admin&action=fonction" id="formulaire">

	<table>
		<tr>
			<td>
			<label for="date">Date de la rencontre : </label>
			</td>
			<td>
			<input id="date" type="date" name="date" class="rencontreinput" size="8" value="AAAA-MM-JJ" onclick="this.value='';" required>
			</td>
		</tr>
		<tr>
			<td>
			<label for="competition">Compétition :</label>
			</td>
			<td>
                <select id="competition" name="competition">
                    <?php foreach ($listecompet as $c) { ?>
                        <option value="<?php echo $c->getId(); ?>"><?php echo $c->getNom(); ?></option>
                    <?php } ?>
                </select>
			</td>
		</tr>
		<tr>
			<td>
			<label for="domicile">Equipe à domicile :</label>
			</td>
			<td>
			<select id="domicile" name="domicile">
			 <?php foreach ($listematch as $c) { ?>
				<option value="<?php echo $c->getId(); ?>"><?php echo $c->getNom(); ?></option>
			 <?php } ?>
			</select>
			</td>
		</tr>
		<tr>
			<td>
			<label for="exterieur">Equipe à l'extérieur :</label>
			</td>
			<td>
			<select id="exterieur" name="exterieur">
			   <?php foreach ($listematch as $c) { ?>
				   <option value="<?php echo $c->getId(); ?>"><?php echo $c->getNom(); ?></option>
			   <?php } ?>
			</select>
			</td>
		</tr>
		<tr>
			<td>
			<input type="submit" value="Valider" name="valider" id="valider" >
			</td>
			<td></td>
		</tr>
	</table>
</form>
</div>
</center>