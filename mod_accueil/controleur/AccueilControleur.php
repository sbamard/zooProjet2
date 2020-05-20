<?php
/**
 * 
 */
class AccueilControleur{
    
    function __construct() {
        
        require_once 'mod_accueil/vue/AccueilVue.php';
        $this->oVue = new AccueilVue();
    }
    
    public function liste(){
        
        $this->oVue->genererAffichage();
        
    }
    
}
