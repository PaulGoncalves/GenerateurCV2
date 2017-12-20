<?php
include 'Models/connectBdd.php';

function get_user($email, $mdp) {
    global $bdd;

    $reqUser = $bdd->prepare('SELECT * FROM users WHERE mail =:mail AND mdp = :mdp');
    $reqUser->bindValue(':mail', $email);
    $reqUser->bindValue(':mdp', $mdp);
    $reqUser->execute();
    return $reqUser->fetch();
}

function insert_adresse($id_u, $numero, $rue, $codePostal, $ville, $pays) {
    global $bdd;

    $reqAdresse = $bdd->prepare('INSERT INTO adresse(id_u, numero, rue, codePostal, ville, pays) VALUES(:id_u, :numero, :rue, :codePostal, :ville, :pays)');
    $reqAdresse->bindValue(':id_u', $id_u);
    $reqAdresse->bindValue(':numero', $numero);
    $reqAdresse->bindValue(':rue', $rue);
    $reqAdresse->bindValue(':codePostal', $codePostal);
    $reqAdresse->bindValue(':ville', $ville);
    $reqAdresse->bindValue(':pays', $pays);
    $reqAdresse->execute();
}

function insert_experience($id_u, $posteOccupeActuel, $anneeExp) {
    global $bdd;

    $reqExperience = $bdd->prepare('INSERT INTO experiencepro(id_u, posteRecherche, anneeExperience) VALUES(:id_u, :posteRecherche, :anneeExperience)');
    $reqExperience->bindValue(':id_u', $id_u);
    $reqExperience->bindValue(':posteRecherche', $posteOccupeActuel);
    $reqExperience->bindValue(':anneeExperience', $anneeExp);
    $reqExperience->execute();
}

function insert_poste1($id_u, $posteOccupe1, $nomEntr1, $villeEntr1, $dateDeb1, $datefin1, $mission1_1, $mission1_2, $mission1_3) {
    global $bdd;

    $reqPoste1 = $bdd->prepare('INSERT INTO experience1(id_u, posteOccupe, nomEntreprise, ville, dateDebut, dateFin, mission1, mission2, mission3) VALUES(:id_u, :posteOccupe, :nomEntreprise, :ville, :dateDebut, :dateFin, :mission1, :mission2, :mission3)');
    $reqPoste1->bindValue(':id_u', $id_u);
    $reqPoste1->bindValue(':posteOccupe', $posteOccupe1);
    $reqPoste1->bindValue(':nomEntreprise', $nomEntr1);
    $reqPoste1->bindValue(':ville', $villeEntr1);
    $reqPoste1->bindValue(':dateDebut', $dateDeb1);
    $reqPoste1->bindValue(':dateFin', $datefin1);
    $reqPoste1->bindValue(':mission1', $mission1_1);
    $reqPoste1->bindValue(':mission2', $mission1_2);
    $reqPoste1->bindValue(':mission3', $mission1_3);
    $reqPoste1->execute();

}

function insert_poste2($id_u, $posteOccupe2, $nomEntr2, $villeEntr2, $dateDeb2, $datefin2, $mission2_1, $mission2_2, $mission2_3) {
    global $bdd;

    $reqPoste2 = $bdd->prepare('INSERT INTO experience2(id_u, posteOccupe, nomEntreprise, ville, dateDebut, dateFin, mission1, mission2, mission3) VALUES(:id_u, :posteOccupe, :nomEntreprise, :ville, :dateDebut, :dateFin, :mission1, :mission2, :mission3)');
    $reqPoste2->bindValue(':id_u', $id_u);
    $reqPoste2->bindValue(':posteOccupe', $posteOccupe2);
    $reqPoste2->bindValue(':nomEntreprise', $nomEntr2);
    $reqPoste2->bindValue(':ville', $villeEntr2);
    $reqPoste2->bindValue(':dateDebut', $dateDeb2);
    $reqPoste2->bindValue(':dateFin', $datefin2);
    $reqPoste2->bindValue(':mission1', $mission2_1);
    $reqPoste2->bindValue(':mission2', $mission2_2);
    $reqPoste2->bindValue(':mission3', $mission2_3);
    $reqPoste2->execute();

}

function insert_poste3($id_u, $posteOccupe3, $nomEntr3, $villeEntr3, $dateDeb3, $datefin3, $mission3_1, $mission3_2, $mission3_3) {
    global $bdd;

    $reqPoste3 = $bdd->prepare('INSERT INTO experience3(id_u, posteOccupe, nomEntreprise, ville, dateDebut, dateFin, mission1, mission2, mission3) VALUES(:id_u, :posteOccupe, :nomEntreprise, :ville, :dateDebut, :dateFin, :mission1, :mission2, :mission3)');
    $reqPoste3->bindValue(':id_u', $id_u);
    $reqPoste3->bindValue(':posteOccupe', $posteOccupe3);
    $reqPoste3->bindValue(':nomEntreprise', $nomEntr3);
    $reqPoste3->bindValue(':ville', $villeEntr3);
    $reqPoste3->bindValue(':dateDebut', $dateDeb3);
    $reqPoste3->bindValue(':dateFin', $datefin3);
    $reqPoste3->bindValue(':mission1', $mission3_1);
    $reqPoste3->bindValue(':mission2', $mission3_2);
    $reqPoste3->bindValue(':mission3', $mission3_3);
    $reqPoste3->execute();

}

function insert_formation1($id_u, $DateDebFormation1, $villeObtention1, $DateFinFormation1, $NomFormation1, $etablissementFormation1) {
    global $bdd;

    $reqformation = $bdd->prepare('INSERT INTO formation1(id_u, anneeDebut, anneeFin, nomFormation, etablissementObtention, villeObtention) VALUES(:id_u, :anneeDebut, :anneeFin, :nomFormation, :etablissementObtention, :villeObtention)');
    $reqformation->bindValue(':id_u', $id_u);
    $reqformation->bindValue(':anneeDebut', $DateDebFormation1);
    $reqformation->bindValue(':anneeFin', $DateFinFormation1);
    $reqformation->bindValue(':nomFormation', $NomFormation1);
    $reqformation->bindValue(':etablissementObtention', $etablissementFormation1);
    $reqformation->bindValue(':villeObtention', $villeObtention1);
    $reqformation->execute();

}

function insert_formation2($id_u, $DateDebFormation2, $DateFinFormation2, $villeObtention2, $NomFormation2, $etablissementFormation2) {
    global $bdd;

    $reqFormation2 = $bdd->prepare('INSERT INTO formation2(id_u, anneeDebut, anneeFin, nomFormation, etablissementObtention, villeObtention) VALUES(:id_u, :anneeDebut, :anneeFin, :nomFormation, :etablissementObtention, :villeObtention)');
    $reqFormation2->bindValue(':id_u', $id_u);
    $reqFormation2->bindValue(':anneeDebut', $DateDebFormation2);
    $reqFormation2->bindValue(':anneeFin', $DateFinFormation2);
    $reqFormation2->bindValue(':nomFormation', $NomFormation2);
    $reqFormation2->bindValue(':etablissementObtention', $etablissementFormation2);
    $reqFormation2->bindValue(':villeObtention', $villeObtention2);
    $reqFormation2->execute();
}

function insert_informatique($id_u, $environnement, $bureautique) {
    global $bdd;

    $reqInformatique = $bdd->prepare('INSERT INTO informatique(id_u, environnement, bureautique) VALUES(:id_u, :environnement, :bureautique)');
    $reqInformatique->bindValue(':id_u', $id_u);
    $reqInformatique->bindValue(':environnement', $environnement);
    $reqInformatique->bindValue(':bureautique', $bureautique);
    $reqInformatique->execute();

}


function insert_langue($id_u, $langue1, $nivLangue1, $langue2, $nivLangue2) {
    global $bdd;
    
    $reqLangue = $bdd->prepare('INSERT INTO langue(id_u, langue1, niveauLangue1, langue2, niveauLangue2) VALUES(:id_u, :langue1, :niveauLangue1, :langue2, :niveauLangue2)');
    $reqLangue->bindValue(':id_u', $id_u);
    $reqLangue->bindValue(':langue1', $langue1);
    $reqLangue->bindValue(':niveauLangue1', $nivLangue1);
    $reqLangue->bindValue(':langue2', $langue2);
    $reqLangue->bindValue(':niveauLangue2', $nivLangue2);
    $reqLangue->execute();
}

function insert_image($id_u, $extension, $nom, $prenom) {
    global $bdd;
    
    $lien = 'Views/upload/logo-'.$nom.'-'.$prenom.'.'.$extension;
    $reqImage = $bdd->prepare('INSERT INTO image(id_u, lien) VALUES(:id_u, :lien)');
    $reqImage->bindValue('id_u', $id_u);
    $reqImage->bindValue('lien', $lien);
    $reqImage->execute();
    
}

function verif_info($id_u) {
    global $bdd;
    
    $reqVerif = $bdd->query('SELECT COUNT(*) FROM adresse WHERE id_u = '.$id_u);

    return $reqVerif;
}

function recup_user($id_u) {
    global $bdd;
    
    $reqUser = $bdd->query('SELECT * FROM users WHERE id_u = '.$id_u);
    
    return $reqUser;
    
}

function recup_adresse($id_u) {
    global $bdd;
    
    $reqAdresse = $bdd->query('SELECT * FROM adresse WHERE id_u = '.$id_u);
    
    return $reqAdresse;
    
}

function recup_expriencePro($id_u) {
    global $bdd;
    
    $reqExperiencePro = $bdd->query('SELECT * FROM experiencepro WHERE id_u = '.$id_u);
    
    return $reqExperiencePro;
    
}

function recup_exp1($id_u) {
    global $bdd;
    
    $reqExp1 = $bdd->query('SELECT * FROM experience1 WHERE id_u = '.$id_u);
    
    return $reqExp1;
    
}

function recup_exp2($id_u) {
    global $bdd;
    
    $reqExp2 = $bdd->query('SELECT * FROM experience2 WHERE id_u = '.$id_u);
    
    return $reqExp2;
    
}

function recup_exp3($id_u) {
    global $bdd;
    
    $reqExp3 = $bdd->query('SELECT * FROM experience3 WHERE id_u = '.$id_u);
    
    return $reqExp3;
    
}

function recup_formation($id_u) {
    global $bdd;
    
    $reqFormation = $bdd->query('SELECT * FROM formation1 WHERE id_u = '.$id_u);
    
    return $reqFormation;
    
}

function recup_formation2($id_u) {
    global $bdd;
    
    $reqFormation2 = $bdd->query('SELECT * FROM formation2 WHERE id_u = '.$id_u);
    
    return $reqFormation2;
    
}

function recup_informatique($id_u) {
    global $bdd;
    
    $reqInformatique = $bdd->query('SELECT * FROM informatique WHERE id_u = '.$id_u);
    
    return $reqInformatique;
    
}

function recup_langue($id_u) {
    global $bdd;
    
    $reqLangue = $bdd->query('SELECT * FROM langue WHERE id_u = '.$id_u);
    
    return $reqLangue;
    
}

function recup_image($id_u) {
    global $bdd;
    
    $reqImage = $bdd->query('SELECT * FROM image WHERE id_u = '.$id_u);
    
    return $reqImage;
    
}

function insert_user($nom, $prenom, $tel, $mail, $age, $mdp) {
    global $bdd;
    
    $insertUser = $bdd->prepare('INSERT INTO users(nom, prenom, mail, mdp, tel, age) VALUES(:nom, :prenom, :mail, :mdp, :tel, :age)');
    $insertUser->bindValue(':nom', $nom);
    $insertUser->bindValue(':prenom', $prenom);
    $insertUser->bindValue(':mail', $mail);
    $insertUser->bindValue(':mdp', $mdp);
    $insertUser->bindValue(':tel', $tel);
    $insertUser->bindValue(':age', $age);
    $insertUser->execute();
}

function verif_experience2($id_u) {
    global $bdd;
    
    $reqVerifExp2 = $bdd->query('SELECT COUNT(*) AS id_u FROM experience2 WHERE id_u = '.$id_u);

    return $reqVerifExp2;
}

function verif_experience3($id_u) {
    global $bdd;
    
    $reqVerifExp3 = $bdd->query('SELECT COUNT(*) AS id_u FROM experience3 WHERE id_u = '.$id_u);

    return $reqVerifExp3;
}

?>
