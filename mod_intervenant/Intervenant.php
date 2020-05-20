<?php

/**
 * Description of accompagnateur
 *
 * @author paulinedelachaume
 */

class Intervenant {
    
    private $parametre = array();
    private $oControleur; // Objet
    
    public function __construct($parametre) {
        
        $this->parametre = $parametre;
        $this->oControleur = new IntervenantControleur($this->parametre);
    }
    
    public function choixAction(){
        
        if(isset($this->parametre['action'])){
            
            switch($this->parametre['action']){
                
                case 'form_consulter':
                    
                    $this->oControleur->form_consulter();
                    break;
                
                case 'form_modifier':
                    
                    $this->oControleur->form_modifier();
                    break;
                
                case 'form_supprimer':
                    
                    $this->oControleur->form_supprimer();
                    break;
                
                case 'form_ajouter':
                    
                    $this->oControleur->form_ajouter();
                    break;
                
                case 'ajouter':
                    $this->oControleur->ajouter();
                    break;
                
                case 'modifier':
                    $this->oControleur->modifier();
                    break;
                case 'supprimer':
                    $this->oControleur->supprimer();
                    break;

            }
            
        }else{
            
           $this->oControleur->liste(); 
           
        }
        
        
    }
}

