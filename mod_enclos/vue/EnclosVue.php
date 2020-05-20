<?php

/**
 * Description of enclosVue
 *
 * @author paulinedelachaume
 */
class EnclosVue {

    private $parametre; // array
    private $tpl; //objet
    private $valeurs;

    public function __construct($parametre) {
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function chargementValeurs() {
        $this->tpl->assign('titre', 'Enclos Zoo Disii');
        $this->tpl->assign('deconnexion', 'Déconnexion');
        $this->tpl->assign('piedPage', 'ZooDisii - Intranet Projet 2 - Armand Simon Pauline');

        $this->tpl->assign('role', $_SESSION['role']);
        $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);
    }

    public function genererAffichageListe($valeurs, $ajoutSucces = false, $EnclosNom = "", $EnclosModif = "", $EnclosDelete = "") {
        $this->valeurs = $valeurs;
        $this->chargementValeurs();

        $this->tpl->assign('message', EnclosTable::getMessageSucces());
        $this->tpl->assign('titreGestion', 'Liste des enclos');

        $this->tpl->assign('Succes', $ajoutSucces);
        $this->tpl->assign('EditEnclos', $EnclosModif);
        $this->tpl->assign('DeleteEnclos', $EnclosDelete);
        $this->tpl->assign('NomEnclos', $EnclosNom);

        $this->tpl->assign('listeEnclos', $this->valeurs);
        $this->tpl->display('mod_enclos/vue/enclosListeVue.tpl');
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

                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('message', AnimalTable::getMessageSucces());

                $this->tpl->assign('titreGestion', 'Liste des animaux');

                $this->tpl->assign('listeAnimal', $this->valeurs);

                $this->tpl->display('mod_animal/vue/animalListeVue.tpl');

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_ajouter':
            case 'ajouter':

                $this->tpl->assign('titreGestion', 'Ajouter un enclos');

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('leEnclos', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('titreGestion', 'Modifier un enclos');

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('leEnclos', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_supprimer':
            case 'supprimer':

                $this->tpl->assign('titreGestion', 'Supprimer un enclos');

                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('leEnclos', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;
        }


        $this->tpl->display('mod_enclos/vue/enclosFicheVue.tpl');

        // Fin méthode
    }

}
