<?php
session_start();


require_once './include/configuration.php';

//Classe statique Autoloader, execute la methode inscrire
//        Chargement automatique des classes
Autoloader::inscrire();

// traitement de l'authentification
if(!isset($_SESSION['login'])){
    
    $_REQUEST['gestion'] = 'Authentification';
    
}else if(!isset($_REQUEST['gestion'])){
    
    $_REQUEST['gestion'] = 'Accueil';
}

$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();

