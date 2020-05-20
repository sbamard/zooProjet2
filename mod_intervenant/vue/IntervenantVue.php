<?php

/**
 * Description of accompagnateurVue
 *
 * @author paulinedelachaume
 */
class IntervenantVue {

    private $parametre; // array
    private $tpl; //objet
    private $valeurs;

    public function __construct($parametre) {
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function chargementValeurs() {
        $this->tpl->assign('titre', 'Intervenant Zoo Disii');
        $this->tpl->assign('deconnexion', 'Déconnexion');
        $this->tpl->assign('piedPage', 'ZooDisii - Intranet Projet 2 - Armand Simon Pauline');

        $this->tpl->assign('role', $_SESSION['role']);
        $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);
    }

    public function genererAffichageListe($valeurs, $ajoutSucces = false, $IntervenantNom = "", $IntervenantModif = "", $IntervenantDelete = "") {
        $this->valeurs = $valeurs;
        $this->chargementValeurs();

        $this->tpl->assign('message', IntervenantTable::getMessageSucces());
        $this->tpl->assign('titreGestion', 'Liste des intervenants');

        $this->tpl->assign('Succes', $ajoutSucces);
        $this->tpl->assign('EditInt', $IntervenantModif);
        $this->tpl->assign('DeleteInt', $IntervenantDelete);
        $this->tpl->assign('NomIntervenant', $IntervenantNom);

        $this->tpl->assign('listeIntervenants', $this->valeurs);
        $this->tpl->display('mod_intervenant/vue/intervenantListeVue.tpl');
        $this->tpl->assign('role', $_SESSION['role']);
        $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);
    }

    public function genererAffichageFiche($valeurs) {

        $this->valeurs = $valeurs;
        $this->chargementValeurs();

        $this->tpl->assign('role', $_SESSION['role']);
        $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

        switch ($this->parametre['action']) {

            case 'form_consulter':

                $this->tpl->assign('titreGestion', 'Fiche intervenant');

                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('unIntervenant', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_ajouter':
            case 'ajouter':

                $this->tpl->assign('titreGestion', 'Ajouter un intervenant');

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('unIntervenant', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('titreGestion', 'Modifier un intervenant');

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('unIntervenant', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_supprimer':
            case 'supprimer':

                $this->tpl->assign('titreGestion', 'Supprimer un intervenant');

                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('unIntervenant', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;
        }

        $this->tpl->display('mod_intervenant/vue/intervenantFicheVue.tpl');

        // Fin méthode
    }

}
