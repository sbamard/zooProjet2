<?php


/**
 * Description of accompagnateurVue
 *
 * @author paulinedelachaume
 */
class ContactVue {
    private $parametre; // array
    private $tpl; //objet
    private $valeurs;
            
    public function __construct($parametre) {
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
                
    }
    
    public function chargementValeurs(){
        $this->tpl->assign('titre', 'Contact Zoo Disii');
        $this->tpl->assign('deconnexion', 'Déconnexion');
        $this->tpl->assign('piedPage', 'ZooDisii - Intranet Projet 2 - Armand Simon Pauline');
    }
    
    public function genererAffichageListe($valeurs){
        $this->valeurs = $valeurs;
        $this->chargementValeurs();
        
        $this->tpl->assign('message', ContactTable::getMessageSucces()); 
        $this->tpl->assign('titreGestion', 'Liste des contacts');
        $this->tpl->assign('listeContacts', $this->valeurs);
        $this->tpl->display('mod_contact/vue/contactListeVue.tpl');
        
    }
    
    public function genererAffichageFiche($valeurs){
        
        $this->valeurs = $valeurs;
        $this->chargementValeurs();
        
        switch ($this->parametre['action']){
            
            case 'form_consulter':
                
                $this->tpl->assign('titreGestion', 'Consulter un contact');
                
                $this->tpl->assign('action', 'consulter');
                
                $this->tpl->assign('comportement', 'disabled');
        
                $this->tpl->assign('unContact', $this->valeurs);
                
                break;
            
            case 'form_ajouter':
            case 'ajouter':
                
                $this->tpl->assign('titreGestion', 'Ajouter un contact');
                
                $this->tpl->assign('action', 'ajouter');
                
                $this->tpl->assign('comportement', '');
        
                $this->tpl->assign('unContact', $this->valeurs);
                
                break;
            
            case 'form_modifier':
            case 'modifier':    
                
                $this->tpl->assign('titreGestion', 'Modifier un contact');
                
                $this->tpl->assign('action', 'modifier');
                
                $this->tpl->assign('comportement', '');
        
                $this->tpl->assign('unContact', $this->valeurs);
                
                break;
            
            case 'form_supprimer':
            case 'supprimer':    
                
                $this->tpl->assign('titreGestion', 'Supprimer un contact');
                
                $this->tpl->assign('action', 'supprimer');
                
                $this->tpl->assign('comportement', '');
        
                $this->tpl->assign('unContact', $this->valeurs);
                
                break;
        }
   
        
        $this->tpl->display('mod_contact/vue/contactFicheVue.tpl');
        
        // Fin méthode
        
        }

    
}

