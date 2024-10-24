<?php
Class Auteur{
    private string $_nom;
    private string $_prenom;


    public function __construct($nom,$prenom){
        $this->_Nom =$nom;
        $this->_Prenom =$prenom;
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
        return $this->_prenom. " " . $this->_nom;  
    }
}

   







