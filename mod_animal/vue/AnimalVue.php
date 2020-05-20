<?php

/**
 * Description of animalVue
 *
 * @author paulinedelachaume
 */
class AnimalVue {

    private $parametre; // array
    private $tpl; //objet
    private $valeurs;

    public function __construct($parametre) {

        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function chargementValeurs() {

        $this->tpl->assign('titre', 'Animaux Zoo Disii');
        $this->tpl->assign('deconnexion', 'Déconnexion');
        $this->tpl->assign('piedPage', 'ZooDisii - Intranet Projet 2 - Armand Simon Pauline');

        $this->tpl->assign('role', $_SESSION['role']);
        $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);
    }

    public function genererAffichageListe($valeurs, $ajoutSucces = false, $AnimalPre = "", $AnimalModif = "", $AnimalDelete = "") {
        $this->valeurs = $valeurs;
        $this->chargementValeurs();

        $this->tpl->assign('message', AnimalTable::getMessageSucces());
        $this->tpl->assign('titreGestion', 'Liste des animaux');

        $this->tpl->assign('Succes', $ajoutSucces);
        $this->tpl->assign('EditAnimal', $AnimalModif);
        $this->tpl->assign('DeleteAnimal', $AnimalDelete);
        $this->tpl->assign('PreAnimal', $AnimalPre);

        $this->tpl->assign('listeAnimal', $this->valeurs);
        $this->tpl->display('mod_animal/vue/animalListeVue.tpl');
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

                $this->tpl->assign('titreGestion', 'Consulter un animal');

                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('unAnimal', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_ajouter':
            case 'ajouter':

                $this->tpl->assign('titreGestion', 'Ajouter un animal');

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('unAnimal', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('titreGestion', 'Modifier un animal');

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('unAnimal', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;

            case 'form_supprimer':
            case 'supprimer':

                $this->tpl->assign('titreGestion', 'Supprimer un animal');

                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('unAnimal', $this->valeurs);

                $this->tpl->assign('role', $_SESSION['role']);

                $this->tpl->assign('prenomNom', $_SESSION['prenomNom']);

                break;
        }

        $this->tpl->display('mod_animal/vue/animalFicheVue.tpl');
    }

}
