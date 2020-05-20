<?php


/**
 * Description of accompagnateur
 *
 * @author paulinedelachaume
 */
class Contact {
    
    
    private $parametre = array();
    private $oControleur; // Objet
    
    public function __construct($parametre) {
        
        $this->parametre = $parametre;
        $this->oControleur = new ContactControleur($this->parametre);
    }
    
    public function choixAction(){
        
        if(isset($this->parametre['action'])){
            
            switch($this->parametre['action']){
                
                case 'form_consulter':
                    
                    $this->oControleur->form_consulter();
                    break;
            }
            
        }else{
           $this->oControleur->liste(); 
        }
        
        
    }
}

