<?php

/**
 * Description of animalModele
 *
 * @author paulinedelachaume
 */
class AnimalModele extends Modele {
    
    private $parametre;
    
    public function __construct($parametre) {
        
        $this->parametre = $parametre;
    }
    
    public function getListeAnimal(){
        
        // Requete attendue de type SELECT (liste des animaux)
        $sql = "SELECT * FROM animal WHERE ani_rac = ?";
        
        $idRequete = $this->executeQuery($sql,array($this->parametre['ani_rac']));
        
        return $idRequete->fetchall(PDO::FETCH_ASSOC);
        
    }
    
    public function getUnAnimal(){
        
        // Requete attendue de type SELECT (liste des animaux)
        $sql = "SELECT * FROM animal WHERE ani_ide = ?";
        
        $idRequete = $this->executeQuery($sql, array($this->parametre['ani_ide']));
        
        $animal = new AnimalTable($idRequete->fetch());
        
        return $animal;
        
    }
    
    public function addAnimal(AnimalTable $valeurs){
        // Requête de type insert (création)
        $sql = "INSERT INTO animal (ani_pre, ani_rac, ani_sex, ani_nai, ani_pix, ani_tex)"
                . "VALUES (?,?,?,?,?,?)";
        
        $idRequete = $this->executeQuery($sql, array(
            $valeurs->getAni_pre(),
            $valeurs->getAni_rac(),
            $valeurs->getAni_sex(),
            $valeurs->getAni_nai(),
            $valeurs->getAni_pix(),
            $valeurs->getAni_tex()
            
        ));
    }
    
    public function editAnimal(AnimalTable $valeurs){
        // Requête de type insert (création)
        $sql = "UPDATE animal SET ani_pre = ?, ani_rac = ?, ani_sex = ?, ani_nai = ?, ani_pix = ?, ani_tex = ? WHERE ani_ide = ?";
              
        
        $idRequete = $this->executeQuery($sql, array(
            $valeurs->getAni_pre(),
            $valeurs->getAni_rac(),
            $valeurs->getAni_sex(),
            $valeurs->getAni_nai(),
            $valeurs->getAni_pix(),
            $valeurs->getAni_tex(),
            $valeurs->getAni_ide()
            

        ));
        
    }
    
    public function deleteAnimal(){
        // Requête de type DELETE (suppression)
        $sql = "DELETE FROM animal WHERE ani_ide = ?";
              
        
        $idRequete = $this->executeQuery($sql, array(
         
           $this->parametre['ani_ide']

        ));
        
    }
    
    
}