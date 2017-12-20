<div class="row">
    <div class="col-md-12">
        <?php if(!isset($_SESSION['auth']) AND !isset($_SESSION['id_u']) AND isset($_SESSION['auth']) == false) {
    echo '<div class="fondBleu">
            <div class="row">
                <div class="col-md-offset-1 col-md-6">
                    <h2 class="textWhite">Créez des CV professionnels en quelques minutes, gratuitement.</h2>
                </div>
                <div class="col-md-5 col-sm-12">
                   <br />
                   <br />
                    <a align="center" class="btnAccueil" href="<?= BASE_URL; ?>/connexion">Créez votre CV maintenant !</a>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-offset-1 col-md-6">
                    <img alt="CV Accueil" width="400" height="400" src="'. BASE_URL .'/Views/images/cvAccueuil.jpg">
                </div>
                <div class="col-md-4">
                   <br />
                   <br />
                   <br />
                   <br />
                   <br />
                   <br />
                    <h2 align="center" class="textWhite">Plusieurs modèles de cv disponible</h2>
                </div>
            </div>';

}
        ?>
    </div>
    <div class="box">
        <div class="row">
            <h3 align="center">Choisissez le cv qui vous convient</h3>
            <br />
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-md-5" align="center"><a target="_blank" href="<?= BASE_URL; ?>/cv1"><img class="imagee lien_image" alt="" src="<?= BASE_URL; ?>/Views/images/Template_CV1.JPG"></a></div>
            <div class="col-md-5" align="center"><a target="_blank" href="<?= BASE_URL; ?>/cv2"><img class="imagee lien_image" alt="" src="<?= BASE_URL; ?>/Views/images/Template_CV2.JPG"></a></div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-offset-1 col-md-5" align="center"><a target="_blank" href="<?= BASE_URL; ?>/cv3"><img class="imagee lien_image" alt="" src="<?= BASE_URL; ?>/Views/images/Template_CV3.JPG"></a></div>
            <div class="col-md-5" align="center"><a target="_blank" href="<?= BASE_URL; ?>/cv4"><img class="imagee lien_image" alt="" src="<?= BASE_URL; ?>/Views/images/Template_CV4.JPG"></a></div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-offset-1 col-md-5" align="center"><a target="_blank" href="<?= BASE_URL; ?>/cv5"><img class="imagee lien_image" alt="" src="<?= BASE_URL; ?>/Views/images/Template_CV5-copie.JPG"></a></div>
        </div>
    </div>
</div>
</div>