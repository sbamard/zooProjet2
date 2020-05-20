<?php

/**
 * Description of accompagnateurTable
 *
 * @author paulinedelachaume
 */
class IntervenantTable {

    // 1 Déclarer les proprietes
    private $int_ide = "";
    private $int_pre = "";
    private $int_nom = "";
    private $int_tel = "";
    private $int_mai = "";
    private $int_spe = "";
    private $int_log = "";
    private $int_mpa = "";
    private $autorisationBD = true;
    private static $messageErreur = "";
    private static $messageSucces = "";

// 2 Importer la méthode hydrater

    public function hydrater(array $row) {

        foreach ($row as $k => $v) {
            // Concaténation : nom de la méthode setter à appeler
            $setter = 'set' . ucfirst($k);
            // fonction prend 2 paramètres : l'objet en cours et le nom de la méthode
            if (method_exists($this, $setter)) {
                // Invoquer la méthode
                $this->$setter($v);
            }
        }
    }

    public function __construct($data = null) {

        if ($data != null) {
            $this->hydrater($data);
        }
    }

    // =======Getters=====================

    function getInt_ide() {
        return $this->int_ide;
    }

    function getInt_pre() {
        return $this->int_pre;
    }

    function getInt_nom() {
        return $this->int_nom;
    }

    function getInt_tel() {
        return $this->int_tel;
    }

    function getInt_mai() {
        return $this->int_mai;
    }

    function getInt_spe() {
        return $this->int_spe;
    }

    function getInt_log() {
        return $this->int_log;
    }

    function getInt_mpa() {
        return $this->int_mpa;
    }

    // =======================Setters============================


    function setInt_ide($int_ide): void {

        $this->int_ide = $int_ide;
    }

    function setInt_nom($int_nom): void {

        if (!is_string($int_nom) || ctype_space($int_nom) || empty($int_nom)) {
            self::setMessageErreur("Le nom est invalide");
            $this->setAutorisationBD(false);
        }

        $this->int_nom = $int_nom;
    }

    function setInt_pre($int_pre): void {

        if (!is_string($int_pre) || ctype_space($int_pre) || empty($int_pre)) {
            self::setMessageErreur("Le prenom du contact est invalide");
            $this->setAutorisationBD(false);
        }
        $this->int_pre = $int_pre;
    }

    function setInt_tel($int_tel): void {

        if (ctype_space($int_tel) || empty($int_tel)) {
            self::setMessageErreur("Le telephone du contact est invalide");
            $this->setAutorisationBD(false);
        }

        $this->int_tel = $int_tel;
    }

    function setInt_mai($int_mai): void {

        if (!is_string($int_mai) || ctype_space($int_mai) || empty($int_mai)) {
            self::setMessageErreur("Le mail du contact est invalide");
            $this->setAutorisationBD(false);
        }
        $this->int_mai = $int_mai;
    }

    function setInt_spe($int_spe): void {
        $this->int_spe = $int_spe;
    }

    function setInt_log($int_log): void {
        if (!is_string($int_log) || ctype_space($int_log) || empty($int_log)) {
//                self::setMessageErreur("Le login du contact est invalide");
            $this->setAutorisationBD(false);
        }
        $this->int_log = $int_log;
    }

    function setInt_mpa($int_mpa): void {

        $this->int_mpa = $int_mpa;
        $pw = $this->int_mpa;
//            // technique du salage
        $gauche = 'ar30&y%';
        $droite = 'tk!@';

        $this->int_mpa = hash('ripemd128', "$gauche$int_mpa$droite");
    }

    /*     * ***************************************** */


    /*     * *************AutorisationBD()************** */

    function getAutorisationBD() {
        return $this->autorisationBD;
    }

    function setAutorisationBD($autorisationBD): void {
        $this->autorisationBD = $autorisationBD;
    }

    /*     * *******getMessageErreur ou getMessageSucces************ */

    public static function getMessageErreur() {
        return self::$messageErreur;
    }

    public static function getMessageSucces() {
        return self::$messageSucces;
    }

    /*     * *******setMessageErreur ou setMessageSucces********** */

    public static function setMessageErreur($msg): void {
        self::$messageErreur = self::$messageErreur . $msg . "<br>";
    }

    public static function setMessageSucces($msg): void {
        self::$messageSucces = self::$messageSucces . $msg . "<br>";
    }

}
