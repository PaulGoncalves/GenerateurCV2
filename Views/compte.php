<div class="box">
    <div class="row">
        <div class="col-md-12">
            <h1>Mon Compte</h1>
            <br>
            <h3>Changer votre mot de passe</h3>
            <br />
            <form method="POST">
                <div class="row">
                    <label class="col-md-6">Votre ancien mot de passe</label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input name="mdp" class="form-control" type="password" placeholder="*****" />
                    </div>
                </div>
                <br />
                <div class="row">
                    <label class="col-md-6">Nouveau mot de passe</label>
                    <label class="col-md-6">Retapez mot de passe</label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input name="newMdp" class="form-control" type="password" placeholder="*****" />
                    </div>
                    <div class="col-md-6">
                        <input name="newMdp2" class="form-control" type="password" placeholder="*****" />
                    </div>

                </div>
                <br />
                <div class="row">
                    <h4 align="center"><?php if(isset($messageMdp)) { echo $messageMdp; } ?></h4>
                </div>
                <br />
                <div class="row">
                    <div align="center">
                        <button type="submit" name="submitMdp" class="btn btn-primary">Changez votre mot de passe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Vos informations personnelles :</h3>
        </div>
        <div class="col-md-6">
            <h4><b>Nom :</b></h4>
            <p>Goncalves</p>
        </div>
        <div class="col-md-6">
            <h4><b>Prénom :</b></h4>
            <p>Paul</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h4><b>Adresse email :</b></h4>
            <p>paulgoncalves.mr@gmail.com</p>
        </div>
    </div>
</div>