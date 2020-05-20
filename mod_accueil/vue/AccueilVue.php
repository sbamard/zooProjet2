<?php

/**
 * Description of accueilVue
 *
 * @author paulinedelachaume
 */
class AccueilVue {
    
    private $tpl; // Objet Smarty
    
    function __construct() {
        
        $this->tpl = new Smarty();
              
    }
    
    public function chargementValeurs(){
        
        $this->tpl->assign('titre','Accueil Zoo Disii');
        $this->tpl->assign('deconnexion','Déconnexion');
        $this->tpl->assign('piedPage','ZooDisii - Intranet Projet 2 - Armand Simon Pauline');

    }
    
    public function genererAffichage(){
        
        $this->chargementValeurs();
        
        $this->tpl->display('mod_accueil/vue/accueilVue.tpl');
        
        $this->tpl->assign('role', $_SESSION['role']);
        
        $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);
        
    }
    
    
}
