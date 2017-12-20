<?php if(isset($messageConnexion)) { echo $messageConnexion; } ?>
<div class="box">
    <div class="row">
        <div class="col-md-12">
            <h2>Vos informations personnelles :</h2>
            <br />
            <label class="placementLabel">Prenom :</label><p>Paul</p>
            <label class="placementLabel">Nom :</label><p>Goncalves</p>
            <label class="placementLabel">Mail :</label><p>paulgoncalves.mr@gmail.com</p>
            <label class="placementLabel">Téléphone :</label><p>06 00 00 00 00</p>
        </div>
    </div>
    <br />
    <hr />
    <br />
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <h2>Votre adresse :</h2>
                <br />
                <label class="placementLabel">Numéro :</label><input class="form-control" type="text" name="numero" />
                <label class="placementLabel">Nom de la rue :</label><input class="form-control" type="text" name="rue" />
                <label class="placementLabel">Ville :</label><input class="form-control" type="text" name="ville" />
                <label class="placementLabel">Code postal :</label><input class="form-control" type="text" name="codePostal" />
                <label class="placementLabel">Pays :</label><input class="form-control" type="text" name="pays" />
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="row">
            <div class="col-md-12">
                <input type="file" name="image" />
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="row">
            <div class="col-md-12">
                <h2>Votre poste actuel :</h2>
                <br />
                <label class="placementLabel">Poste occupé :</label><input class="form-control" type="text" name="posteOccupeActuel" />
                <label class="placementLabel">Années d'expérience :</label><input class="form-control" type="text" name="anneeExp" />
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="row">
            <div class="col-md-12">
                <h2>Votre expérience professionelle :</h2>
                <br />
                <div id="experience1">
                    <h3>Expérience 1</h3>
                    <br />
                    <label class="placementLabel">Poste occupé :</label><input class="form-control" type="text" name="posteOccupe1" />
                    <label class="placementLabel">Nom entreprise :</label><input class="form-control" type="text" name="nomEntr1" />
                    <label class="placementLabel">Ville :</label><input class="form-control" type="text" name="villeEntr1" />
                    <label class="placementLabel">Date début :</label><input class="form-control" type="date" name="dateDeb1" />
                    <label class="placementLabel">Date fin :</label><input class="form-control" type="date" name="datefin1" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission1_1" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission1_2" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission1_3" />
                </div>
                <div id="experience2">
                    <h3>Expérience 2</h3>
                    <br />
                    <label class="placementLabel">Poste occupé :</label><input class="form-control" type="text" name="posteOccupe2" />
                    <label class="placementLabel">Nom entreprise :</label><input class="form-control" type="text" name="nomEntr2" />
                    <label class="placementLabel">Ville :</label><input class="form-control" type="text" name="villeEntr2" />
                    <label class="placementLabel">Date début :</label><input class="form-control" type="date" name="dateDeb2" />
                    <label class="placementLabel">Date fin :</label><input class="form-control" type="date" name="datefin2" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission2_1" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission2_2" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission2_3" />
                </div>
                <div id="experience3">
                    <h3>Expérience 3</h3>
                    <br />
                    <label class="placementLabel">Poste occupé :</label><input class="form-control" type="text" name="posteOccupe3" />
                    <label class="placementLabel">Nom entreprise :</label><input class="form-control" type="text" name="nomEntr3" />
                    <label class="placementLabel">Ville :</label><input class="form-control" type="text" name="villeEntr3" />
                    <label class="placementLabel">Date début :</label><input class="form-control" type="date" name="dateDeb3" />
                    <label class="placementLabel">Date fin :</label><input class="form-control" type="date" name="datefin3" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission3_1" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission3_2" />
                    <label class="placementLabel">Mission réalisé :</label><input class="form-control" type="text" name="mission3_3" />
                </div>
                <div class="col-md-offset-10 col-md-2">
                    <br />
                    <a class="btn btn-primary" id="ajoutExp1">Ajouter une expérience</a>
                    <a class="btn btn-primary" id="ajoutExp2">Ajouter une expérience</a>
                </div>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="row">
            <div class="col-md-12">
                <div id="formation1">
                    <h3>Formation 1</h3>
                    <label class="placementLabel">Nom de l'établissement :</label><input class="form-control" type="text" name="EtablissementFormation1" />
                    <label class="placementLabel">Nom de formation :</label><input class="form-control" type="text" name="NomFormation1" />
                    <label class="placementLabel">Ville obtention</label><input class="form-control" type="text" name="villeObtention1" />
                    <label class="placementLabel">Année début :</label><input class="form-control" type="date" name="DateDebFormation1" />
                    <label class="placementLabel">Année fin :</label><input class="form-control" type="date" name="DateFinFormation1" />
                </div>
                <div id="formation2">
                    <h3>Formation 2</h3>
                    <label class="placementLabel">Nom de l'établissement :</label><input class="form-control" type="text" name="EtablissementFormation2" />
                    <label class="placementLabel">Nom de formation :</label><input class="form-control" type="text" name="NomFormation2" />
                    <label class="placementLabel">Ville obtention</label><input class="form-control" type="text" name="villeObtention2" />
                    <label class="placementLabel">Année début :</label><input class="form-control" type="date" name="DateDebFormation2" />
                    <label class="placementLabel">Année fin :</label><input class="form-control" type="date" name="DateFinFormation2" />
                </div>
                <div class="col-md-offset-10 col-md-2">
                    <br />
                    <a class="btn btn-primary" id="ajoutForm">Ajouter une formation</a>
                </div>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="row">
            <div class="col-md-12">
                <h3>Informatique</h3>
                <label class="placementLabel">Environnement :</label><input class="form-control" type="text" name="environnement" />
                <label class="placementLabel">Bureautique :</label><input class="form-control" type="text" name="bureautique" />
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="row">
            <div class="col-md-12">
                <h3>Langues</h3>
                <label class="placementLabel">Langue :</label><input class="form-control" type="text" name="langue1" />
                <br />
                <select class="form-control" name="nivLangue1">
                    <option value="1">Débutant</option>
                    <option value="2">Intermédiaire</option>
                    <option value="3">Parfaite maitrise</option>
                </select>
                <label class="placementLabel">Langue :</label><input class="form-control" type="text" name="langue2" />
                <br />
                <select class="form-control" name="nivLangue2">
                    <option value="1">Débutant</option>
                    <option value="2">Intermédiaire</option>
                    <option value="3">Parfaite maitrise</option>
                </select>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div align="center" >
            <input type="submit" name="validForm" class="btn btn-primary" value="Enregistrer mes informations"/>
        </div>
    </form>
</div>


<script type="text/javascript" src="<?= BASE_URL; ?>/Views/css/bootstrap/js/jquery-3.2.1.min.js"></script>
<script>
    $(function() {
        $('#ajoutExp1').click(function(){
            $('#experience2').css('display', 'block');
            $('#ajoutExp1').css('display', 'none');
            $('#ajoutExp2').css('display', 'inline-block');
        });

        $('#ajoutExp2').click(function(){
            $('#experience3').css('display', 'block');
            $('#ajoutExp2').css('display', 'none');
        });

        $('#ajoutForm').click(function(){
            $('#formation2').css('display', 'block');
            $('#ajoutForm').css('display', 'none');
        });
    });
</script>