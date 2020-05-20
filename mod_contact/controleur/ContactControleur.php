<?php

/**
 * Description of accompagnateurControleur
 *
 * @author paulinedelachaume
 */
class ContactControleur {

    private $parametre; //array
    private $oModele; // Objet
    private $oVue; // Objet

    public function __construct($parametre) {

        $this->parametre = $parametre;
        // Création d'un objet modele
        $this->oModele = new ContactModele($this->parametre);
        // Création d'un objet vue
        $this->oVue = new ContactVue($this->parametre);
    }

    public function liste() {

        $valeurs = $this->oModele->getListeContacts();

        $this->oVue->genererAffichageListe($valeurs);
    }

    public function form_consulter() {

        $valeurs = $this->oModele->getUnContact();
        $this->oVue->genererAffichageFiche($valeurs);
    }

}
