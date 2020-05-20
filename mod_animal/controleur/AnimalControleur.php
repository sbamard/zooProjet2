<?php

/**
 * Description of animalControleur
 *
 * @author paulinedelachaume
 */
class AnimalControleur {

    private $parametre; //array
    private $oModele; // Objet
    private $oVue; // Objet

    public function __construct($parametre) {

        $this->parametre = $parametre;
        // Création d'un objet modele
        $this->oModele = new AnimalModele($this->parametre);
        // Création d'un objet vue
        $this->oVue = new AnimalVue($this->parametre);
    }

    public function liste($ajoutSucces = false, $AnimalPre = "", $AnimalModif = "", $AnimalDelete = "") {

        $valeurs = $this->oModele->getListeAnimal();

        $this->oVue->genererAffichageListe($valeurs, $ajoutSucces, $AnimalPre, $AnimalModif, $AnimalDelete);
    }

    public function form_consulter() {

        $valeurs = $this->oModele->getUnAnimal();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_ajouter() {

        $prepareAnimal = new AnimalTable();

        $this->oVue->genererAffichageFiche($prepareAnimal);
    }

    public function form_modifier() {

        $valeurs = $this->oModele->getUnAnimal();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_supprimer() {

        $valeurs = $this->oModele->getUnAnimal();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function ajouter() {

        $controleAnimal = new AnimalTable($this->parametre);

        if ($controleAnimal->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleAnimal);
        } else {
            // ici l'insertion est possible !
            $this->oModele->addAnimal($controleAnimal);
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('1', $controleAnimal->getAni_pre());
        }
    }

    public function modifier() {

        $controleAnimal = new AnimalTable($this->parametre);

        if ($controleAnimal->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleAnimal);
        } else {
            // ici l'insertion est possible !
            $this->oModele->editAnimal($controleAnimal);
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('2', $controleAnimal->getAni_pre());
        }
    }

    public function supprimer() {

        $controleAnimal = new AnimalTable($this->parametre);

        if ($controleAnimal->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleAnimal);
        } else {
            // ici l'insertion est possible !
            $this->oModele->deleteAnimal($controleAnimal);
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('3', $controleAnimal->getAni_pre());
        }
    }

}
