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


            class PDF extends FPDF
            {
                // En-tête
                function Header()
                {

                    global $nom, $prenom, $nom_rue, $num_adresse, $code_postal, $age, $mail, $tel, $intitule_poste, $exp_intitule, $nom_ville, $pays, $date_deb, $date_fin, $poste_occupe, $nom_entr, $nom_ville_exp, $mission1, $mission2,$mission3, $exp_annee_deb, $exp_annee_fin , $nom_formation, $lieu_obtention, $date_deb2, $date_fin2, $poste_occupe2, $nom_entr2, $nom_ville_exp2, $mission1_2, $mission2_2,$mission3_2,$date_deb3, $date_fin3, $poste_occupe3, $nom_entr3, $nom_ville_exp3, $mission1_3, $mission2_3,$mission3_3,$exp_annee_deb2, $exp_annee_fin2 , $nom_formation2, $lieu_obtention2, $ville_obtention, $ville_obtention2, $bureautique, $environnement, $langue, $niveau_langue, $langue2, $niveau_langue2, $image ;

                    //Couleur du fond
                    $this->Ln(-10);
                    $this->SetFont('Arial','B',15);
                    $this->SetFillColor(7,163,181);
                    // Décalage à droite
                    $this->Cell(-10);
                    $this->Cell(300,55,'',0,0,1,'C');


                    //image de l'utilisateur
                    $this->Ln(30);
                    $this->Cell(40);//Décalage à droite
                    $this->SetFont('Arial','',20); //Police
                    $this->Image($image,10,6,29);
                    $this->Cell(0,-30, utf8_decode($prenom.' '.$nom),0,0);

                    //intitulé poste et année expérience
                    $this->Ln(10);
                    $this->Cell(40);//Décalage à droite
                    $this->SetFont('Arial','',16); //Police
                    $this->Cell(0,-30, utf8_decode($intitule_poste.' '.$exp_intitule.' ans d\'expérience'),0,0);

                    $this->Ln(25);
                    $this->Cell(-1);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,-30, utf8_decode($age.' ans, '.$num_adresse.' '.$nom_rue.', '.$code_postal.', '.$nom_ville.', '.$mail.', 0'.$tel.'.'),0,0);


                    //EXPERIENCE PROFESSIONNELLE
                    $this->Ln(-5);
                    $this->Cell(-10);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetFillColor(7,163,181);
                    $this->Cell(85,8, utf8_decode('EXPERIENCES PROFESSIONNELLES'),0,0,1,'C');
                    
                    $this->Ln(10);
                    $this->Cell(50);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->SetFillColor(213,213,213);
                    $this->Cell(1,89, utf8_decode(''),0,0,1,'C');
                    
                    $this->Ln(-6);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->Cell(0,0, utf8_decode(''),0,0,1,'C');

                    //Expérience 1
                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- '.$date_deb.' - '.$date_fin),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($poste_occupe.' - '.$nom_entr.' - '.$nom_ville_exp),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission1),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission2),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission3),0,0);


                    //Expérience 2
                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- '.$date_deb2.' - '.$date_fin2),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($poste_occupe2.' - '.$nom_entr2.' - '.$nom_ville_exp2),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission1_2),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission2_2),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission2_3),0,0);

                    //Expérience 3
                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- '.$date_deb2.' - '.$date_fin2),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($poste_occupe3.' - '.$nom_entr3.' - '.$nom_ville_exp3),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission1_3),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission2_3),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($mission3_3),0,0);

                    //FORMATION
                    $this->Ln(10);
                    $this->Cell(-10);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(213,213,213);
                    $this->SetFillColor(7,163,181);
                    $this->Cell(85,8, utf8_decode('FORMATIONS'),0,0,1,'C');
                    
                    $this->Ln(10);
                    $this->Cell(50);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->SetFillColor(213,213,213);
                    $this->Cell(1,40, utf8_decode(''),0,0,1,'C');
                    
                    $this->Ln(-6);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->Cell(0,0, utf8_decode(''),0,0,1,'C');

                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- '.$exp_annee_deb.' - '.$exp_annee_fin),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($nom_formation),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($lieu_obtention.' - '.$ville_obtention),0,0);

                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- '.$exp_annee_deb2.' - '.$exp_annee_fin2),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($nom_formation),0,0);

                    $this->Ln(5);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode($lieu_obtention2.' - '.$ville_obtention2),0,0);

                    //INFORMATIQUE
                    $this->Ln(10);
                    $this->Cell(-10);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->Cell(85,8, utf8_decode('INFORMATIQUE'),0,0,1,'C');
                    
                    $this->Ln(10);
                    $this->Cell(50);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->SetFillColor(213,213,213);
                    $this->Cell(1,30, utf8_decode(''),0,0,1,'C');
                    
                    $this->Ln(-6);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->Cell(0,0, utf8_decode(''),0,0,1,'C');

                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- Environnement :'),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($environnement),0,0);

                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- Bureautique :'),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($bureautique),0,0);

                    //LANGUES
                    $this->Ln(10);
                    $this->Cell(-10);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(85,8, utf8_decode('LANGUES'),0,0,1,'C');
                    
                    $this->Ln(10);
                    $this->Cell(50);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->SetFillColor(213,213,213);
                    $this->Cell(1,25, utf8_decode(''),0,0,1,'C');
                    
                    $this->Ln(-6);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(7,163,181);
                    $this->Cell(0,0, utf8_decode(''),0,0,1,'C');

                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- '.$langue.' :'),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('Niveau : '.$niveau_langue),0,0);

                    $this->Ln(6);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',12); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,5, utf8_decode('- '.$langue2.' :'),0,0,1,'C');

                    $this->Ln(8);
                    $this->Cell(80);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('Niveau : '.$niveau_langue2),0,0);


                }
            }

            // Instanciation de la classe dérivée
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',12);
            $pdf->Output();


?>