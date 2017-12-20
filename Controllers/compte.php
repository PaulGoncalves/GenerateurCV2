<?php

$_GET['p'] = 'compte';

if(isset($_SESSION['auth']) AND isset($_SESSION['id_u']) AND $_SESSION['auth'] == true) {

    require 'Views/compte.php';

} else {
    
    header('Location: ' .BASE_URL. '/connexion');
    
}