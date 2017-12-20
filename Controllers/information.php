<?php
include 'Models/function.php';

$_GET['p'] = 'information';

$resultat = verif_info($_SESSION['id_u']);
if($resultat->fetchColumn() == 0) {

    $messageConnexion = '<h3 align="center" style="color:red;">Ceci est votre première connexion, veuillez remplir le formulaire suivant :</h3>';

}

$reqUser = recup_user($_SESSION['id_u']);
$resultatUser = $reqUser->fetch();

$nom = $resultatUser['nom'];
$prenom = $resultatUser['prenom'];

if(isset($_POST['validForm'])) {

    $id_u = $_SESSION['id_u'];

    $numero = htmlspecialchars($_POST['numero']);
    $rue = htmlspecialchars($_POST['rue']);
    $ville = htmlspecialchars($_POST['ville']);
    $codePostal = htmlspecialchars($_POST['codePostal']);
    $pays = htmlspecialchars($_POST['pays']);

    $posteOccupeActuel = htmlspecialchars($_POST['posteOccupeActuel']);
    $anneeExp = htmlspecialchars($_POST['anneeExp']);

    $posteOccupe1 = htmlspecialchars($_POST['posteOccupe1']);
    $nomEntr1 = htmlspecialchars($_POST['nomEntr1']);
    $villeEntr1 = htmlspecialchars($_POST['villeEntr1']);
    $dateDeb1 = htmlspecialchars($_POST['dateDeb1']);
    $datefin1 = htmlspecialchars($_POST['datefin1']);
    $mission1_1 = htmlspecialchars($_POST['mission1_1']);
    $mission1_2 = htmlspecialchars($_POST['mission1_2']);
    $mission1_3 = htmlspecialchars($_POST['mission1_3']);

    $posteOccupe2 = htmlspecialchars($_POST['posteOccupe2']);
    $nomEntr2 = htmlspecialchars($_POST['nomEntr2']);
    $villeEntr2 = htmlspecialchars($_POST['villeEntr2']);
    $dateDeb2 = htmlspecialchars($_POST['dateDeb2']);
    $datefin2 = htmlspecialchars($_POST['datefin2']);
    $mission2_1 = htmlspecialchars($_POST['mission2_1']);
    $mission2_2 = htmlspecialchars($_POST['mission2_2']);
    $mission2_3 = htmlspecialchars($_POST['mission2_3']);

    $posteOccupe3 = htmlspecialchars($_POST['posteOccupe3']);
    $nomEntr3 = htmlspecialchars($_POST['nomEntr3']);
    $villeEntr3 = htmlspecialchars($_POST['villeEntr3']);
    $dateDeb3 = htmlspecialchars($_POST['dateDeb3']);
    $datefin3 = htmlspecialchars($_POST['datefin3']);
    $mission3_1 = htmlspecialchars($_POST['mission3_1']);
    $mission3_2 = htmlspecialchars($_POST['mission3_2']);
    $mission3_3 = htmlspecialchars($_POST['mission3_3']);

    $etablissementFormation1 = htmlspecialchars($_POST['EtablissementFormation1']);
    $villeObtention1 = htmlspecialchars($_POST['villeObtention1']);
    $NomFormation1 = htmlspecialchars($_POST['NomFormation1']);
    $DateDebFormation1 = htmlspecialchars($_POST['DateDebFormation1']);
    $DateFinFormation1 = htmlspecialchars($_POST['DateFinFormation1']);

    $etablissementFormation2 = htmlspecialchars($_POST['EtablissementFormation2']);
    $villeObtention2 = htmlspecialchars($_POST['villeObtention2']);
    $NomFormation2 = htmlspecialchars($_POST['NomFormation2']);
    $DateDebFormation2 = htmlspecialchars($_POST['DateDebFormation2']);
    $DateFinFormation2 = htmlspecialchars($_POST['DateFinFormation2']);

    $environnement = htmlspecialchars($_POST['environnement']);
    $bureautique = htmlspecialchars($_POST['bureautique']);

    $langue1 = htmlspecialchars($_POST['langue1']);
    $nivLangue1 = htmlspecialchars($_POST['nivLangue1']);

    $langue2 = htmlspecialchars($_POST['langue2']);
    $nivLangue2 = htmlspecialchars($_POST['nivLangue2']);

    if(isset($_POST['validForm'])) {

        insert_adresse($id_u, $numero, $rue, $codePostal, $ville, $pays);
        insert_experience($id_u, $posteOccupeActuel, $anneeExp);
        insert_poste1($id_u, $posteOccupe1, $nomEntr1, $villeEntr1, $dateDeb1, $datefin1, $mission1_1, $mission1_2, $mission1_3);
        insert_poste2($id_u, $posteOccupe2, $nomEntr2, $villeEntr2, $dateDeb2, $datefin2, $mission2_1, $mission2_2, $mission2_3);
        insert_poste3($id_u, $posteOccupe3, $nomEntr3, $villeEntr3, $dateDeb3, $datefin3, $mission3_1, $mission3_2, $mission3_3);
        insert_formation1($id_u, $DateDebFormation1, $villeObtention1, $DateFinFormation1, $NomFormation1, $etablissementFormation1);
        insert_formation2($id_u, $DateDebFormation2, $DateFinFormation2, $villeObtention2, $NomFormation2, $etablissementFormation2);
        insert_informatique($id_u, $environnement, $bureautique);
        insert_langue($id_u, $langue1, $nivLangue1, $langue2, $nivLangue2);

        if(isset($_FILES['image']) AND $_FILES['image']['error'] == 0){

            if($_FILES['image']['size'] <= 100000){

                $info = pathinfo($_FILES['image']['name']);
                $extension = $info['extension'];
                $extension_autoriser = array('png', 'jpeg', 'jpg', 'gif', 'bmp', 'PNG', 'JPEG', 'JPG', 'GIF', 'BMP');

                if(in_array($extension, $extension_autoriser)) {
                    move_uploaded_file($_FILES['image']['tmp_name'], 'Views/upload/'.basename('logo-'.$nom.'-'.$prenom.'.'.$extension));
                    
                    insert_image($_SESSION['id_u'], $extension, $nom, $prenom);

                } else {
                    $message = "L'extension de l'image n'est pas autorisée.";
                }

            } else {
                $message = "L'image est trop grosse.";
            }

        }else {
            $message = "Vous n'avez pas mis l'image dans le formulaire.";
        }

    }

    if(!empty($numero) AND $rue AND $codePostal AND $pays AND $posteOccupeActuel AND $anneeExp AND $posteOccupe1 AND $nomEntr1 AND $dateDeb1 AND $dateFin1 AND $mission1_1 AND $mission1_2 AND $mission1_3 AND $environnement AND $bureautique AND $langue1 AND $nivLangue1 AND $langue2 AND $nivLangue2 AND $villeObtention1) {



        if(!empty($posteOccupe2)) {

            if(!empty($posteOccupe2) AND $nomEntr2 AND $villeEntr2 AND $villeObtention2 AND $dateDeb2  AND $dateFin2 AND $mission2_1 AND $mission2_2 AND $mission2_3) {


            } else {

                $messageFormulaire = "Tous les champs de l'expérience 2 doivent être remplis";

            }

        }

        if(!empty($posteOccupe3)) {

            if(!empty($posteOccupe3) AND $nomEntr3 AND $villeEntr3 AND $dateDeb3  AND $dateFin3 AND $mission3_1 AND $mission3_2 AND $mission3_3) {


            } else {

                $messageFormulaire = "Tous les champs de l'expérience 3 doivent être remplis";

            }

        }

        if(!empty($etablissementFormation2)) {

            if(!empty($etablissementFormation2) AND $NomFormation2 AND $DateDebFormation2 AND $DateFinFormation2) {


            } else {

                $messageFormulaire = "Tous les champs de la formation 2 doivent être remplis";

            }

        }

    } else {

        $messageFormulaire = "Tous les champs doivent être remplis";

    }

}


require 'Views/information.php';
?>