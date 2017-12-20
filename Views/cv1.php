<?php
require('fpdf/fpdf.php');

$reqUser = recup_user($_SESSION['id_u']);

$resultatUser = $reqUser->fetch();

$reqAdresse = recup_adresse($_SESSION['id_u']);

$resultatAdresse = $reqAdresse->fetch();

$reqExperiencePro = recup_expriencePro($_SESSION['id_u']);

$resultatExpPro = $reqExperiencePro->fetch();

$reqExp1 = recup_exp1($_SESSION['id_u']);

$resultatExp1 = $reqExp1->fetch();

$reqExp2 = recup_exp2($_SESSION['id_u']);

$resultatExp2 = $reqExp2->fetch();

$reqExp3 = recup_exp3($_SESSION['id_u']);

$resultatExp3 = $reqExp3->fetch();

$reqFormation = recup_formation($_SESSION['id_u']);

$resultatFormation = $reqFormation->fetch();

$reqFormation2 = recup_formation2($_SESSION['id_u']);

$resultatFormation2 = $reqFormation2->fetch();

$reqInformatique = recup_informatique($_SESSION['id_u']);

$resultatInformatique = $reqInformatique->fetch();

$reqLangue = recup_langue($_SESSION['id_u']);

$resultatLangue = $reqLangue->fetch();

$reqImage = recup_image($_SESSION['id_u']);

$resultatImage = $reqImage->fetch();


$nom = $resultatUser['nom'];
$prenom = $resultatUser['prenom'];
$mail = $resultatUser['mail'];
$tel = $resultatUser['tel'];
$age = $resultatUser['age'];
$nom_rue = $resultatAdresse['rue'];
$num_adresse = $resultatAdresse['numero'];
$code_postal = $resultatAdresse['codePostal'];
$nom_ville = $resultatAdresse['ville'];
$pays = $resultatAdresse['pays'];
$intitule_poste = $resultatExpPro['posteRecherche'];
$exp_intitule = $resultatExpPro['anneeExperience'];
$date_deb = $resultatExp1['dateDebut'];
$date_fin = $resultatExp1['dateFin'];
$poste_occupe = $resultatExp1['posteOccupe'];
$nom_entr = $resultatExp1['nomEntreprise'];
$nom_ville_exp = $resultatExp1['ville'];
$mission1 = $resultatExp1['mission1'];
$mission2 = $resultatExp1['mission2'];
$mission3 = $resultatExp1['mission3'];
$date_deb2 = $resultatExp2['dateDebut'];
$date_fin2 = $resultatExp2['dateFin'];
$poste_occupe2 = $resultatExp2['posteOccupe'];
$nom_entr2 = $resultatExp2['nomEntreprise'];
$nom_ville_exp2 = $resultatExp2['ville'];
$mission1_2 = $resultatExp2['mission1'];
$mission2_2 = $resultatExp2['mission2'];
$mission3_2 = $resultatExp2['mission3'];
$date_deb3 = $resultatExp3['dateDebut'];
$date_fin3 = $resultatExp3['dateFin'];
$poste_occupe3 = $resultatExp3['posteOccupe'];
$nom_entr3 = $resultatExp3['nomEntreprise'];
$nom_ville_exp3 = $resultatExp3['ville'];
$mission1_3 = $resultatExp3['mission1'];
$mission2_3 = $resultatExp3['mission2'];
$mission3_3 = $resultatExp3['mission3'];
$exp_annee_deb = $resultatFormation['anneeDebut'];
$exp_annee_fin = $resultatFormation['anneeFin'];
$nom_formation = $resultatFormation['nomFormation'];
$lieu_obtention = $resultatFormation['etablissementObtention'];
$ville_obtention = $resultatFormation['villeObtention'];
$exp_annee_deb2 = $resultatFormation2['anneeDebut'];
$exp_annee_fin2 = $resultatFormation2['anneeFin'];
$nom_formation2 = $resultatFormation2['nomFormation'];
$lieu_obtention2 = $resultatFormation2['etablissementObtention'];
$ville_obtention2 = $resultatFormation2['villeObtention'];
$environnement = $resultatInformatique['environnement'];
$bureautique = $resultatInformatique['bureautique'];
$langue = $resultatLangue['langue1'];
$niveau_langue = $resultatLangue['niveauLangue1'];
$langue2 = $resultatLangue['langue2'];
$niveau_langue2 = $resultatLangue['niveauLangue2'];
$image = $resultatImage['lien'];

if($niveau_langue == 1) {
    
    $niveau_langue = 'Débutant';
    
} elseif($niveau_langue == 2) {
    
    $niveau_langue = 'intermédiaire';
    
} elseif($niveau_langue == 3) {
    
    $niveau_langue = 'Parfaite maitrise';
    
}

if($niveau_langue2 == 1) {
    
    $niveau_langue2 = 'Débutant';
    
} elseif($niveau_langue2 == 2) {
    
    $niveau_langue2 = 'intermédiaire';
    
} elseif($niveau_langue2 == 3) {
    
    $niveau_langue2 = 'Parfaite maitrise';
    
}

$resultatVerifExp2 = verif_experience2($_SESSION['id_u']);
$resultatVerifExp2->fetch();

if($resultatVerifExp2['id_u'] == 0) {
    
    echo 'ok2';
} else {
    
    echo 'okk';
}

$resultatVerifExp3 = verif_experience3($_SESSION['id_u']);
$resultatVerifExp3->fetch();

if($resultatVerifExp3['id_u'] == 0) {
    
    echo 'ok3';
} else {
    
    echo 'ook';
}


class PDF extends FPDF {
    // Header
    function Header() {

        global $nom, $prenom, $nom_rue, $num_adresse, $code_postal, $age, $mail, $tel, $intitule_poste, $exp_intitule, $nom_ville, $pays, $date_deb, $date_fin, $poste_occupe, $nom_entr, $nom_ville_exp, $mission1, $mission2,$mission3, $exp_annee_deb, $exp_annee_fin , $nom_formation, $lieu_obtention, $date_deb2, $date_fin2, $poste_occupe2, $nom_entr2, $nom_ville_exp2, $mission1_2, $mission2_2,$mission3_2,$date_deb3, $date_fin3, $poste_occupe3, $nom_entr3, $nom_ville_exp3, $mission1_3, $mission2_3,$mission3_3,$exp_annee_deb2, $exp_annee_fin2 , $nom_formation2, $lieu_obtention2, $ville_obtention, $ville_obtention2, $bureautique, $environnement, $langue, $niveau_langue, $langue2, $niveau_langue2, $image ;


        // Partie Infos de l'utilisateur
        $this->SetFont('Arial','',15); //Police
        $this->Cell(0,10, utf8_decode($prenom.' '.$nom),0,0);
        $this->Image($image,160,12,30);
        $this->Ln(6);// Saut de ligne
        //Age
        $this->SetFont('Arial','',12);
        $this->Cell(0,10, $age.' ans',0,0);

        $this->Ln(6);// Saut de ligne
        //Adresse
        $this->SetFont('Arial','',12);
        $this->Cell(0,10, utf8_decode($num_adresse.' '.$nom_rue),0,0);
        $this->Ln(6);// Saut de ligne
        $this->Cell(0,10, $code_postal.' '.$nom_ville,0,0);
        $this->Ln(6);// Saut de ligne
        $this->Cell(0,10, utf8_decode($pays),0,0);
        $this->Ln(6);// Saut de ligne
        $this->Cell(0,10, utf8_decode($mail),0,0);
        $this->Ln(6);//Saut de ligne
        $this->Cell(0,10,'0'.$tel,0,0);

        //intitulé
        $this->Ln(10);// Saut de ligne
        $this->SetFont('Arial','',14);
        $this->Cell(0,10,utf8_decode($intitule_poste.' '.$exp_intitule.' ans d\'expérience'),0,0);

        //EXPERIENCE
        $this->Ln(13);// Saut de ligne
        $this->SetFont('Arial','',14);
        $this->SetDrawColor(51,102,255);
        $this->Cell(0,7,utf8_decode('EXPERIENCE'),1,0);

        //Expérience 1
        $this->Ln(8);// Saut de ligne
        $this->SetFont('Arial','',13);
        $this->Cell(0,7,utf8_decode('- '.$date_deb.' - '.$date_fin),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',13);
        $this->Cell(0,7,utf8_decode('     '.$poste_occupe.' - '.$nom_entr.' - '.$nom_ville_exp),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('        '.$mission1),0,0);
        $this->Ln(5);// Saut de ligne
        $this->Cell(0,7,utf8_decode('        '.$mission2),0,0);
        $this->Ln(5);// Saut de ligne
        $this->Cell(0,7,utf8_decode('        '.$mission3),0,0);


        //EXP 2
        $this->Ln(7);// Saut de ligne
        $this->SetFont('Arial','',13);
        $this->Cell(0,7,utf8_decode('- '.$date_deb2.' - '.$date_fin2),0,0);
        $this->Ln(5);
        $this->SetFont('Arial','',12);
        $this->Cell(0,7,utf8_decode('     '.$poste_occupe2.' - '.$nom_entr2.' - '.$nom_ville_exp2),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('        '.$mission1_2),0,0);
        $this->Ln(5);// Saut de ligne
        $this->Cell(0,7,utf8_decode('        '.$mission2_2),0,0);
        $this->Ln(5);// Saut de ligne
        $this->Cell(0,7,utf8_decode('        '.$mission3_2),0,0);

        //EXP 3
        $this->Ln(7);// Saut de ligne
        $this->SetFont('Arial','',13);
        $this->Cell(0,7,utf8_decode('- '.$date_deb3.' - '.$date_fin3),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',12);
        $this->Cell(0,7,utf8_decode('     '.$poste_occupe3.' - '.$nom_entr3.' - '.$nom_ville_exp2),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('        '.$mission1_3),0,0);
        $this->Ln(5);// Saut de ligne
        $this->Cell(0,7,utf8_decode('        '.$mission2_3),0,0);
        $this->Ln(5);// Saut de ligne
        $this->Cell(0,7,utf8_decode('        '.$mission3_3),0,0);


        //FORMATION
        $this->Ln(10);// Saut de ligne
        $this->SetFont('Arial','',14);
        $this->Cell(0,7,utf8_decode('FORMATION'),1,0);

        //FORMATION 1
        $this->Ln(8);// Saut de ligne
        $this->SetFont('Arial','',13);
        $this->Cell(0,7,utf8_decode('- '.$exp_annee_deb.' - '.$exp_annee_fin),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',12);
        $this->Cell(0,7,utf8_decode('     '.$nom_formation),0,0);
        $this->Ln(5);
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('        '.$lieu_obtention.' - '.$ville_obtention),0,0);

        //FORMATION 2
        $this->Ln(7);// Saut de ligne
        $this->SetFont('Arial','',13);
        $this->Cell(0,7,utf8_decode('- '.$exp_annee_deb2.' - '.$exp_annee_fin2),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',12);
        $this->Cell(0,7,utf8_decode('     '.$nom_formation2),0,0);
        $this->Ln(5);/// Saut de ligne
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('        '.$lieu_obtention2.' - '.$ville_obtention2),0,0);


        //INFORMATIQUE
        $this->Ln(10);// Saut de ligne
        $this->SetFont('Arial','',14);
        $this->Cell(0,7,utf8_decode('INFORMATIQUE'),1,0);

        //Compétence 1
        $this->Ln(8);// Saut de ligne
        $this->SetFont('Arial','',12);
        $this->Cell(0,7,utf8_decode('- Environnement :'),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('     '.$environnement),0,0);

        //Compétence 2
        $this->Ln(7);// Saut de ligne
        $this->SetFont('Arial','',12);
        $this->Cell(0,7,utf8_decode('- Bureautique :'),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('     '.$bureautique),0,0);


        //LANGUE
        $this->Ln(10);// Saut de ligne
        $this->SetFont('Arial','',14);
        $this->Cell(0,7,utf8_decode('LANGUE'),1,0);

        //Langue 1
        $this->Ln(8);// Saut de ligne
        $this->SetFont('Arial','',12);
        $this->Cell(0,7,utf8_decode('- '.$langue.' :'),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('     Niveau : '.$niveau_langue),0,0);

        //Langue 2
        $this->Ln(7);// Saut de ligne
        $this->SetFont('Arial','',12);
        $this->Cell(0,7,utf8_decode('- '.$langue2.' :'),0,0);
        $this->Ln(5);// Saut de ligne
        $this->SetFont('Arial','',11);
        $this->Cell(0,7,utf8_decode('     Niveau : '.$niveau_langue2),0,0);



    }
}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('');
$pdf->SetFont('Times','',12);
$pdf->Cell(40,10);
$pdf->Output();






?>
