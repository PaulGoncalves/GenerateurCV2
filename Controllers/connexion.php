<?php
include 'Models/connectBdd.php';
include 'Models/function.php';

$_GET['p'] = 'connexion';


if(isset($_POST['submitConnexion'])) {

    if(!empty($_POST['email']) AND $_POST['mdp']) {

        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1(htmlspecialchars($_POST['mdp']));

        $user = get_user($email, $mdp);

        if($user) {

            $_SESSION['auth'] = true;
            $_SESSION['id_u'] = $user['id_u'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['mail'] = $user['mail'];
            $_SESSION['mdp'] = $user['mdp'];

            $resultat = verif_info($user['id_u']);

            if($resultat->fetchColumn() >= 1) {

                header("Location:" . BASE_URL );

            } else {

                header('Location:' . BASE_URL . '/information');
            }

        } else {

            $messageConnexion = 'Votre identifiant ou mot de passe n\'est correct';

        }

    } else {

        $messageConnexion = 'Vous devez remplir tous les champs';

    }

}

if(isset($_POST['submitInscription'])) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $tel = htmlspecialchars($_POST['tel']);
    $mail = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $mdp = sha1(htmlspecialchars($_POST['mdp']));
    $mdp2 = sha1(htmlspecialchars($_POST['mdp2']));

    if($mdp == $mdp2) {
        
    insert_user($nom, $prenom, $tel, $mail, $age, $mdp);
        
    } else {
        
        $messageInscription = "Les deux mot de passe ne correspondent pas";
        
    }
    

}


require 'Views/connexion.php';