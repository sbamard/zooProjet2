<?php

/**
 * Description of authentificationModele
 *
 * @author paulinedelachaume
 */

class AuthentificationModele extends Modele {

    private $parametre;
    
    public function __construct($parametre) {
        
        $this->parametre = $parametre;
        
    }
    
    public function rechercherUtilisateur(AuthentificationTable $authEnCours){
        
        $sql = 'SELECT * FROM intervenant WHERE int_log = ?';
        
        $this->idRequete = $this->executeQuery($sql, array($authEnCours->getF_login()));
        
        $authExistant = $this->idRequete->fetch(PDO::FETCH_ASSOC);
        
        if($authEnCours->getF_login() == $authExistant['int_log'] 
                && $authEnCours->getF_motdepasse() == $authExistant['int_mpa']){
            
            // Création de la session !!
            $_SESSION['login'] = $authEnCours->getF_login();
            $_SESSION['prenomNom'] = $authExistant['int_pre'].''.$authExistant['int_nom'];
            $_SESSION['role'] = $authExistant['int_spe'];
            
            return true;
        }
        
        AuthentificationTable::setMessageErreur("Authentification invalide !");
        return false;
    }
}
