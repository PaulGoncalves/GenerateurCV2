<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <!-- ********* Liens bootstrap *********** -->
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/Views/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/Views/css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/Views/css/style.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="top_bar">
            <div class="container">
                <div class="col-md-6">
                    <ul class="social">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter text-white"></i></a></li>
                        <li><a target="_blank" href="http://instagram.com"><i class="fa fa-instagram text-white"></i></a></li>
                    </ul></div>

                <div class="col-md-6">
                    <ul class="rightc">
                        <?php if(isset($_SESSION['auth']) AND isset($_SESSION['id_u']) AND $_SESSION['auth'] == true) {

                        echo '<li><i class="fa fa-user"></i> <a href="'. BASE_URL .'/compte"> Mon compte</a></li>
                        <li>|</li>
                        <li><i class="fa fa-sign-out"></i> <a href="'. BASE_URL .'/deconnexion"> Deconnexion</a></li>';

                        } else {
    
                        echo '<li><i class="fa fa-sign-in" aria-hidden="true"></i> <a href="'. BASE_URL .'/connexion"> Connexion<a/></li>
                            <li>|</li>
                            <li><i class="fa fa-sign-out"></i> <a href="'. BASE_URL .'/connexion"> S\'inscrire</a></li>';
                        
                        }
                        ?>
                        

                    </ul>
                </div>
            </div>
        </div>
        <!--top_bar-->



        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-left">
                        <li class="boutonNav"><a href="<?= BASE_URL; ?>">Accueil</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        <div class="container">

            <?php echo $content; ?>

        </div>



        <!-- ********* Scripts bootstrap *********** -->
        <script type="text/javascript" src="<?= BASE_URL; ?>/Views/css/bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?= BASE_URL; ?>/Views/css/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= BASE_URL; ?>/Views/css/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= BASE_URL; ?>/Views/css/bootstrap/js/navBar.js"></script>
    </body>
</html>
