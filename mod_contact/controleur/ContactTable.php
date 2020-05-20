<?php



/**
 * Description of accompagnateurTable
 *
 * @author paulinedelachaume
 */
class ContactTable {
    
    
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

		// echo "Je suis le constructeur. Tout est en ordre !";
            if($data != null){
               $this->hydrater($data); 
            }
		
	}
        

        function getInt_mai() {
            return $this->int_mai;
        }

                
        // =======================Setters============================
        
        
   
        
        function setInt_mai($int_mai): void {
           
             if(!is_string($int_mai) || ctype_space($int_mai) || empty($int_mai)){
                self::setMessageErreur("Le mail du contact est invalide");
                $this->setAutorisationBD(false);
            }
            $this->int_mai = $int_mai;
           
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
        
    
    

