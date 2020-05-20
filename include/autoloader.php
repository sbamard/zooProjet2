<?php

/**
 * Description of autoloader
 *
 * @author paulinedelachaume
 */
class autoloader {
    
    public static function inscrire(){
        
        spl_autoload_register(array(__CLASS__,'autoload'));
    }
    
    public static function autoload($maClasse){
        
        $chemins = array(
            'mod_accueil/',
            'mod_accueil/controleur/',
            'mod_accueil/modele/',
            'mod_accueil/vue/',
            'mod_enclos/',
            'mod_enclos/controleur/',
            'mod_enclos/modele/',
            'mod_enclos/vue/',
            'mod_intervenant/',
            'mod_intervenant/controleur/',
            'mod_intervenant/modele/',
            'mod_intervenant/vue/',
            'mod_authentification/',
            'mod_authentification/controleur/',
            'mod_authentification/modele/',
            'mod_authentification/vue/',
            'mod_animal/',
            'mod_animal/controleur/',
            'mod_animal/modele/',
            'mod_animal/vue/',
            'mod_contact/',
            'mod_contact/controleur/',
            'mod_contact/modele/',
            'mod_contact/vue/'
        );
        
        foreach($chemins as $chemin){
            if(file_exists($chemin.$maClasse.'.php')){
                require_once ($chemin.$maClasse.'.php');
                return;
            }
        }
        
        
    }
}
