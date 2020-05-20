<?php

/**
 * Description of animalTable
 *
 * @author paulinedelachaume
 */
class AnimalTable {
     // 1 Déclarer les proprietes
    private $ani_ide = "";
    private $ani_pre = "";
    private $ani_rac = "";
    private $ani_sex = "";
    private $ani_nai = "";
    private $ani_pix = "";
    private $ani_tex = "";
    
    
    private $autorisationBD = true;
    
    private static $messageErreur = "";
    private static $messageSucces = "";

    

// 2 Importer la méthode hydrater

    public function hydrater(array $row){

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

            if($data != null){
               $this->hydrater($data); 
            }
		
	}
        
        
        // =======Getters=====================
        
        function getAni_ide() {
            return $this->ani_ide;
        }

        function getAni_pre() {
            return $this->ani_pre;
        }

        function getAni_rac() {
            return $this->ani_rac;
        }

        function getAni_sex() {
            return $this->ani_sex;
        }

        function getAni_nai() {
            return $this->ani_nai;
        }

        function getAni_pix() {
            return $this->ani_pix;
        }
        
        function getAni_tex() {
            return $this->ani_tex;
        }

        
             
        // =======================Setters============================
        
        function setAni_ide($ani_ide): void {
            $this->ani_ide = $ani_ide;
        }

        function setAni_pre($ani_pre): void {
            $this->ani_pre = $ani_pre;
        }

        function setAni_rac($ani_rac): void {
            $this->ani_rac = $ani_rac;
        }

        function setAni_sex($ani_sex): void {
            $this->ani_sex = $ani_sex;
        }

        function setAni_nai($ani_nai): void {
            $this->ani_nai = $ani_nai;
        }

        function setAni_pix($ani_pix): void {
            $this->ani_pix = $ani_pix;
        }
        
        function setAni_tex($ani_tex): void {
            $this->ani_tex = $ani_tex;
        }

        
        
       /***************AutorisationBD()***************/
        function getAutorisationBD() {
            return $this->autorisationBD;
        }
        
        function setAutorisationBD($autorisationBD): void {
            $this->autorisationBD = $autorisationBD;
        }
        
        
        /*********getMessageErreur ou getMessageSucces*************/
        public static function getMessageErreur() {
            return self::$messageErreur;
        }
        
        public static function getMessageSucces() {
            return self::$messageSucces;
        }
        
        
        /*********setMessageErreur ou setMessageSucces***********/
        public static function setMessageErreur($msg): void {
            self::$messageErreur = self::$messageErreur.$msg. "<br>";
        }

        public static function setMessageSucces($msg): void {
            self::$messageSucces = self::$messageSucces.$msg. "<br>";
        }


        
    }