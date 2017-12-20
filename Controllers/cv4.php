<?php
include 'Models/function.php';
$_GET['p'] = 'cv4';

if(isset($_SESSION['auth']) AND isset($_SESSION['id_u']) AND $_SESSION['auth'] == true) {

    $resultat = verif_info($_SESSION['id_u']);
    if($resultat->fetchColumn() != 0) {

        require 'Views/cv4.php';
    } else {

        echo '<h3 align="center" style="color:red;">Vous devez remplir vos informations personnelles</h3><br /><br />';
        echo '<div align="center"><a href="'. BASE_URL .'/information" class="btn btn-primary">Retour vers la page information</a><div>';

    }

} else {

    header('Location: '. BASE_URL .'/connexion');
}

?>