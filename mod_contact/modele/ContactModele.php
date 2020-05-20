<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accompagnateurModele
 *
 * @author paulinedelachaume
 */
class ContactModele extends Modele {
    private $parametre;
    
    public function __construct($parametre) {
        
        $this->parametre = $parametre;
    }
    
    public function getListeContacts(){
        
        // Requete attendue de type SELECT (liste des contacts)
        $sql = "SELECT int_mai FROM intervenant";
        
        $idRequete = $this->executeQuery($sql);
        
        return $idRequete->fetchall(PDO::FETCH_ASSOC);
        
    }
}
