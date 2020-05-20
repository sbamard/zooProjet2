<?php
/**
 * Routeur du module accueil
 */
class Accueil{
    
    private $parametre = array();
    private $oControleur;
    
    public function __construct($parametre) {
        
        $this->parametre = $parametre;     
        $this->oControleur = new AccueilControleur();
        
    }
    
    public function choixAction() {
        
        $this->oControleur->liste();
        
    }
    
    
}


