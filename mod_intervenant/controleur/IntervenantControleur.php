<?php

/**
 * Description of accompagnateurControleur
 *
 * @author paulinedelachaume
 */
class IntervenantControleur {

    private $parametre; //array
    private $oModele; // Objet
    private $oVue; // Objet

    public function __construct($parametre) {

        $this->parametre = $parametre;
        // Création d'un objet modele
        $this->oModele = new IntervenantModele($this->parametre);
        // Création d'un objet vue
        $this->oVue = new IntervenantVue($this->parametre);
    }

    public function liste($ajoutSucces = false, $IntervenantNom = "", $IntervenantModif = "", $IntervenantDelete = "") {

        $valeurs = $this->oModele->getListeIntervenants();

        $this->oVue->genererAffichageListe($valeurs, $ajoutSucces, $IntervenantNom, $IntervenantModif, $IntervenantDelete);
    }

    public function form_consulter() {

        $valeurs = $this->oModele->getUnIntervenant();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_ajouter() {

        $prepareIntervenant = new IntervenantTable();

        $this->oVue->genererAffichageFiche($prepareIntervenant);
    }

    public function form_modifier() {

        $valeurs = $this->oModele->getUnIntervenant();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_supprimer() {

        $valeurs = $this->oModele->getUnIntervenant();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function ajouter() {

        $controleIntervenant = new IntervenantTable($this->parametre);

        if ($controleIntervenant->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleIntervenant);
        } else {
            // ici l'insertion est possible !
            $this->oModele->addIntervenant($controleIntervenant);
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('1', $controleIntervenant->getInt_nom());
        }
    }

    public function modifier() {

        $controleIntervenant = new IntervenantTable($this->parametre);

        if ($controleIntervenant->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleIntervenant);
        } else {
            // ici l'insertion est possible !
            $this->oModele->editIntervenant($controleIntervenant);
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('2', $controleIntervenant->getInt_nom());
        }
    }

    public function supprimer() {

        $controleIntervenant = new IntervenantTable($this->parametre);

        if ($controleIntervenant->getAutorisationBD() == false) {
            //ici nous sommes en erreur
            $this->oVue->genererAffichageFiche($controleIntervenant);
        } else {
            // ici l'insertion est possible !
            $this->oModele->deleteIntervenant();
            // ici l'objet controleur (oControleur)
            //  Il a été créé dans le routeur
            $this->liste('3', $controleIntervenant->getInt_nom());
        }
    }

}
