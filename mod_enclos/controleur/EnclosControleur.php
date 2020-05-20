<?php

/**
 * Description of lieuControleur
 *
 * @author paulinedelachaume
 */
class EnclosControleur {

    private $parametre; //array
    private $oModele; // Objet
    private $oVue; // Objet

    public function __construct($parametre) {

        $this->parametre = $parametre;
        // Création d'un objet modele
        $this->oModele = new EnclosModele($this->parametre);
        // Création d'un objet vue
        $this->oVue = new EnclosVue($this->parametre);
    }

    public function liste($ajoutSucces = false, $EnclosNom = "", $EnclosModif = "", $EnclosDelete = "") {

        $valeurs = $this->oModele->getListeEnclos();

        $this->oVue->genererAffichageListe($valeurs, $ajoutSucces, $EnclosNom, $EnclosModif, $EnclosDelete);
    }

    public function form_consulter() {

        $valeurs = $this->oModele->getAnimauxParEnclos();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_ajouter() {

        $prepareEnclos = new EnclosTable();

        $this->oVue->genererAffichageFiche($prepareEnclos);
    }

    public function form_modifier() {

        $valeurs = $this->oModele->getUnEnclos();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_supprimer() {

        $valeurs = $this->oModele->getUnEnclos();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function ajouter() {

        $controleEnclos = new EnclosTable($this->parametre);

        if ($controleEnclos->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleEnclos);
        } else {
            // ici l'insertion est possible !
            $this->oModele->addEnclos($controleEnclos);
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('1', $controleEnclos->getEnc_nom());
        }
    }

    public function modifier() {

        $controleEnclos = new EnclosTable($this->parametre);

        if ($controleEnclos->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleEnclos);
        } else {
            // ici l'insertion est possible !
            $this->oModele->editEnclos($controleEnclos);
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('2', $controleEnclos->getEnc_nom());
        }
    }

    public function supprimer() {

        $controleEnclos = new EnclosTable($this->parametre);

        if ($controleEnclos->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleEnclos);
        } else {
            // ici l'insertion est possible !
            $this->oModele->deleteEnclos($controleEnclos);
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('3', $controleEnclos->getEnc_nom());
        }
    }

}
