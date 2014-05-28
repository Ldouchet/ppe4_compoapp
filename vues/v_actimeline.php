<div id="titretl" ><div class="Background">Fil D'ACTUALITES</div></div>
<div id="actimeline">
    <center>
    <div id="message">
<div id="heading">
    <a class="ajouter" href="#ecrire">+ Ajouter une note</a>
</div>
    <br><br>
    <script>
        $(document).ready(function(){
            $('#titretl').animate({
                opacity:0.5
            }, 'slow');
            $('#actimeline').animate({
                opacity:0.9
            }, 'medium');
            $.ajax({
                type:"POST",
                url: "index.php?uc=fonctions",
                dataType :'json',
                data: "data=timeline",
                success : function(data){
                    console.log(data);
                    $var="";
                    jQuery.each(data, function() {
                        $var ="<div id='commentaire'><div id='descri'> "+this['auteur']+" le "+this['date']+"</div><div id='bubble'>"+this['message']+"</div></div>";
                        $("#tlcontainer").append($var);

                    });

                }

            });
        });

    </script>


    <div id="tlcontainer">
    </div>
    </div>



    <hr>
    <div id="ecrire">
    <h1> Ajouter une note</h1>
    <br>
    Les notes sont visible par tous



        <table>
            <FORM action="index.php?uc=fonctions" method="post">
                <input type="hidden" name="auteur" value="<?php echo $_SESSION['nom']; ?>">
                <input type="hidden" name="date" value="<?php echo date("d-m-Y"); ?>">

                <tr>
                    <td><textarea placeholder="Votre message" style="resize:none" name="message" cols="27" rows="6" required></textarea></td>
                <tr>
                    <td><input type="submit" name="validerTimeline" text="Submit"></td>
                </tr>
            </FORM>
        </table>
    </div>
</div></div></center>