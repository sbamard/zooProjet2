<?php

/**
 * Description of accompagnateurModele
 *
 * @author paulinedelachaume
 */

class IntervenantModele extends Modele {
    
    private $parametre;
    
    public function __construct($parametre) {
        
        $this->parametre = $parametre;
    }
    
    public function getListeIntervenants(){
        
        // Requete attendue de type SELECT (liste des intervenants)
        $sql = "SELECT * FROM intervenant";
        
        $idRequete = $this->executeQuery($sql);
        
        return $idRequete->fetchall(PDO::FETCH_ASSOC);
        
    }
    
    public function getUnIntervenant(){
        
        // Requete attendue de type SELECT (liste des intervenants)
        $sql = "SELECT * FROM intervenant WHERE int_ide = ?";
        
        $idRequete = $this->executeQuery($sql, array($this->parametre['int_ide']));
        
        $intervenant = new IntervenantTable($idRequete->fetch());
        return $intervenant;
        
    }
    
    public function addIntervenant(IntervenantTable $valeurs){
        
        // Requête de type insert (création)
        $sql = "INSERT INTO intervenant (int_pre, int_nom, int_tel, int_mai, int_spe, int_log, int_mpa)"
                . "VALUES (?,?,?,?,?,?,?)";
        
        $idRequete = $this->executeQuery($sql, array(
            $valeurs->getInt_pre(),
            $valeurs->getInt_nom(),
            $valeurs->getInt_tel(),
            $valeurs->getInt_mai(),
            $valeurs->getInt_spe(),
            $valeurs->getInt_log(),
            $valeurs->getInt_mpa()
            
        ));
        
    }
    
    public function editIntervenant(IntervenantTable $valeurs){
        // Requête de type insert (création)
        $sql = "UPDATE intervenant SET int_pre = ?, int_nom = ?, int_tel = ?, int_mai = ?, int_spe = ?, int_log = ? WHERE int_ide = ?";
              
        
        $idRequete = $this->executeQuery($sql, array(
            $valeurs->getInt_pre(),
            $valeurs->getInt_nom(),
            $valeurs->getInt_tel(),
            $valeurs->getInt_mai(),
            $valeurs->getInt_spe(),
            $valeurs->getInt_log(),
            $valeurs->getInt_ide()
            

        ));
        
    }
    
    public function deleteIntervenant(){
        // Requête de type DELETE (suppression)
        $sql = "DELETE FROM intervenant WHERE int_ide = ?";
         
        $idRequete = $this->executeQuery($sql, array(
         
           $this->parametre['int_ide']

        ));
        
        
    }
    
    
}
