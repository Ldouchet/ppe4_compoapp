<div id="titre" ><div class="Background">MATCHS</div></div>
<div id="acligue">

    <div>
        <img src='img/loader.gif' style='visibility:hidden' id='load'  name='load' />
    </div>

    <?php
        if($_SESSION['statut'] == "resligue"){
            echo '<br><center>';
        }


        if($_SESSION['statut'] == "resclub"){
        echo '</center><h2>Voici la liste des matchs que les responsables de la Ligues ont enregistrés concernant votre club :</h2><br><br><center>';
            }
    ?>

<table id="table" class="bordered">

</table>
<br>
        <?php
        if($_SESSION['statut'] == "resligue"){
            echo '<form method="post" action="index.php?uc=admin&action=newmatch"><input type="submit" value="+ Ajouter un match" onClick="test()"></form>';
        }

        ?>
</form>
</center>
</div>
<script>
    $(document).ready(function(){
        document.getElementById('load').style.visibility="visible";
        $('#titre').animate({
            opacity:0.5
        }, 'slow');
        $('#acligue').animate({
            opacity:0.8
        }, 'medium');
        $.ajax({
				type:"POST",
				url: "index.php?uc=fonctions",
				dataType :'json',
				data: "data=listmatchs",
				success : function(data){
                    console.log(data);
                    $var="";
                    $var1="<thead> <tr> <th>Domicile</th><th>Extérieur</th> <th>Compétition</th> <th>Date</th> </tr> </thead>";
                    jQuery.each(data, function() {
                        $var+="<tr onclick='document.location = \"index.php?uc=admin&action=configmatch\"; '><td>"+this["club1"]+"</td><td>"+this["club2"]+"</td><td>"+this["epreuve"]+"</td><td>"+this["date"]+"</td></tr>";
                    });
                    $("#table").html($var1+$var);
                }
        });
        document.getElementById('load').style.visibility="hidden";
    });
</script>