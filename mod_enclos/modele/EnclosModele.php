<?php

/**
 * Description of lieuModele
 *
 * @author paulinedelachaume
 */

class EnclosModele extends Modele {
    
    private $parametre;
    
    public function __construct($parametre) {
        
        $this->parametre = $parametre;
    }
    
    public function getListeEnclos(){
        
        // Requete attendue de type SELECT (liste des enclos)
        $sql = "SELECT * FROM enclos";
        
        $idRequete = $this->executeQuery($sql);
        
        return $idRequete->fetchall(PDO::FETCH_ASSOC);
        
    }
    
    public function getUnEnclos(){
        // Requete attendue de type SELECT (liste des enclos)
        $sql = "SELECT * FROM enclos WHERE enc_ide = ?";
        
        $idRequete = $this->executeQuery($sql, array($this->parametre['enc_ide']));
        
        //var_dump($idRequete->fetch());
       
        $enclos = new EnclosTable($idRequete->fetch());
        
        return $enclos;
        
    }
    
    public function getAnimauxParEnclos(){
        
        $sql = "SELECT * FROM animal WHERE ani_rac = ?";
        $idRequete = $this->executeQuery($sql, array($this->parametre['enc_rac']));
        return $idRequete->fetchall(PDO::FETCH_ASSOC);
    }
    
    
    public function addEnclos(EnclosTable $valeurs){
        // Requête de type insert (création)
        $sql = "INSERT INTO enclos (enc_nom, ani_rac)"
                . "VALUES (?,?)";
        
        $idRequete = $this->executeQuery($sql, array(
            $valeurs->getEnc_nom(),
            $valeurs->getAni_rac()
        ));
        
    }
    
    public function editEnclos(EnclosTable $valeurs){
        // Requête de type insert (création)
        $sql = "UPDATE enclos SET enc_nom = ? WHERE enc_ide = ?";
              
        
        $idRequete = $this->executeQuery($sql, array(
            $valeurs->getEnc_nom(),  
            $valeurs->getEnc_ide()
        ));
        
    }
    
    public function deleteEnclos(EnclosTable $valeurs){
        // Requête de type DELETE (suppression)
        $sql = "DELETE FROM enclos WHERE enc_ide = ?";
              
        
        $idRequete = $this->executeQuery($sql, array(
         
            $valeurs->getEnc_ide()

        ));
        
    }
    
    
}
