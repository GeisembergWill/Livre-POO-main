<?php
Class Auteur{
    private string $_nom;
    private string $_prenom;
    private array $_livres;

    public function __construct($nom,$prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = array();
        
       
    }
    public function _getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        $this->_nom=$nom;
    }
    
    public function _getPrenom(){
        return $this->_prenom;
    }
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }
    
   
    
    public function __toString(){
        return "Livres de $this->_nom $this->_prenom";  
    }
  
}

   







