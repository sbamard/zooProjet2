<?php

/**
 * Description of authentificationVue
 *
 * @author paulinedelachaume
 */

class AuthentificationVue {
    
    private $parametre; // array
    private $tpl; //objet
    private $valeurs;
            
    public function __construct($parametre) {
        
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
                
    }
    
    public function chargementValeurs(){
        
        $this->tpl->assign('titre', 'Authentification Zoo Disii');
        $this->tpl->assign('titreGestion', 'Authentification');
        $this->tpl->assign('message', AuthentificationTable::getMessageErreur());
        $this->tpl->assign('deconnexion', 'Déconnexion');
        $this->tpl->assign('piedPage', 'ZooDisii - Intranet Projet 2 - Armand Simon Pauline');
    }
    
   
    public function genererAffichageFiche($valeurs = null){
        
        $this->valeurs = $valeurs;
        $this->chargementValeurs();
        $this->tpl->assign('authentification', $this->valeurs);
        $this->tpl->assign('action', 'connexion');
        $this->tpl->display('mod_authentification/vue/authentificationVue.tpl');
        
    }

    
}


