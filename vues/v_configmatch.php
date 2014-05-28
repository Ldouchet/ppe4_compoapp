<div id="titre" ><div class="Background">CONFIGURATION</div></div>
<div id="acligue">
    <center><br>
    <table>
        <tr>
            <td>
                <select id="match">
                    <?php foreach ($listematch as $c) { ?>
                        <option value="<?php echo ($c->getNum()); ?>"><?php echo (($c->getClub1())." contre ".($c->getClub2())." le ".($c->getDateMatch())); ?></option>
                        <?php echo ($c->getNum()); ?>
                    <?php } ?>
                </select>
            </td>
            <td>
                <input type="button" value="Enregistrer" id="rec" onclick="validation()">
            </td>
        </tr>
    </table>

        <br>




    <!-- DRAG & DROP -->
    <script>
    var e = document.getElementById("match");
    var $id = $( "#match" ).val();;
    var $data1;
    var $data2;
    $(document).ready(
    function() {
    var $selectedNameCandidat;

    $('li.CandidatName').mousedown(
    function() {
    if ($selectedNameCandidat && $selectedNameCandidat.length) {
    $selectedNameCandidat.removeClass('CandidatNameSelected');
    }

    $selectedNameCandidat = $(this);
    $selectedNameCandidat.addClass('CandidatNameSelected');
    }
    );
    var saveUpdate_titu = function(e, ui) {
        $data1 = $(this).sortable(
            'serialize', {
                attribute: 'id',
                expression: /^(.*)$/,
                key: 'configTitulaire[]'
            }
        );
        // $.get('/chemin/vers/le_serveur/fichier.php', $data);
    };
    var saveUpdate_rempl = function(e, ui) {
        $data2 = $(this).sortable(
            'serialize', {
                attribute: 'id',
                expression: /^(.*)$/,
                key: 'configRempl[]'
            }
        );
        //alert($data2);
        // $.get('/chemin/vers/le_serveur/fichier.php', $data);
    };
        $('#titre').animate({
            opacity:0.5
        }, 'slow');
        $('#acligue').animate({
            opacity:0.8
        }, 'medium');
    $('ul#column-1').sortable({
        connectWith : [
        'ul#column-2,ul#column-3'
        ],
        placeholder: 'Joueurs',
        opacity: 0.2,
        cursor: 'pointer'
    });


    $('ul#column-2').sortable({
        connectWith : [
        'ul#column-1,ul#column-3'
        ],
        placeholder: 'Titulaires',
        opacity: 0.8,
        cursor: 'pointer',
        update: saveUpdate_titu
    });
    $('ul#column-3').sortable({
        connectWith : [
            'ul#column-1,ul#column-2'
        ],
        placeholder: 'Remplaçants',
        opacity: 0.8,
        cursor: 'pointer',
        update: saveUpdate_rempl
    });
    }
    );
    function validation(){
        var $id = $( "#match" ).val();
        //console.log($data1+$data2);
        //alert($id);
        window.location.replace("index.php?uc=fonctions&id="+ $id + "&" +$data1+ "&" + $data2);
    }


    </script>
    <div id="hcontainer">
        <table>

            <tr>
                <th><h2>Joueurs</h2></th>
                <th><h2>Titulaires</h2></th>
                <th><h2>Remplaçants</h2></th>
            </tr>


            <tr>
                <td valign="top">
                    <ul id="column-1">
                        <?php foreach ($listejoueurs as $c) { ?>
                            <li class="CandidatName" id="<?php echo $c->getId(); ?>"><h5><?php echo (($c->getPrenom())." ".($c->getNom())); ?></h5></li>
                        <?php } ?>
                    </ul>
                </td>

                <td>
                    <ul id="column-2">
                    </ul>
                </td>
                <td>
                    <ul id="column-3">
                    </ul>
                </td>
            </tr>
        </table>


    </div>
    </center>













