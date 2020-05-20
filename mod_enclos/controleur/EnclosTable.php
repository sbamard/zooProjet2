<?php

/**
 * Description of lieuTable
 *
 * @author paulinedelachaume
 */

class EnclosTable {
    
    // 1 Déclarer les proprietes
    
    private $enc_ide = "";
    private $enc_nom = "";
    private $ani_rac = "";
   
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
        
        function getEnc_ide() {
            return $this->enc_ide;
        }

        function getEnc_nom() {
            return $this->enc_nom;
        }

        function getAni_rac() {
            return $this->ani_rac;
        }

       
        
        // =======================Setters============================
        
        
        function setEnc_ide($enc_ide): void {
            $this->enc_ide = $enc_ide;
        }

        function setEnc_nom($enc_nom): void {
            $this->enc_nom = $enc_nom;
        }

        function setAni_rac($ani_rac): void {
            $this->ani_rac = $ani_rac;
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