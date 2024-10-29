<?php
class Livre {
    private string $_titre; 
    // Propriété pour stocker le titre du livre
    private int $_nbreDePages; 
    // Propriété pour stocker le nombre de pages du livre
    private int $_anneeDeParution;
     // Propriété pour stocker l'année de parution du livre
    private int $_prix; 
    // Propriété pour stocker le prix du livre
    private Auteur $_auteur; 
    // Propriété pour stocker l'auteur du livre

    // Constructeur pour initialiser les propriétés de l'objet Livre
    public function __construct($titre, $nbreDePages, $anneeDeParution, $prix, Auteur $auteur) {
        $this->_titre = $titre; 
        // Affecter le titre passé en paramètre à la propriété $_titre
        $this->_nbreDePages = $nbreDePages; 
        // Affecter le nombre de pages passé en paramètre à la propriété $_nbreDePages
        $this->_anneeDeParution = $anneeDeParution; 
        // Affecter l'année de parution passée en paramètre à la propriété $_anneeDeParution
        $this->_prix = $prix; 
        // Affecter le prix passé en paramètre à la propriété $_prix
        $this->_auteur = $auteur; 
        // Affecter l'auteur passé en paramètre à la propriété $_auteur
        $auteur->ajouterLivre($this); 
        // Ajouter le livre à la bibliographie de l'auteur
    }             
    
    
    public function getTitre() {
        return $this->_titre; 
        // Retourner le titre du livre
    }


    public function setTitre($titre) {
        $this->_titre = $titre; 
        // Mettre à jour le titre du livre avec le nouveau titre fourni
    }
    
   
    public function getNbreDePages() {
        return $this->_nbreDePages; 
        // Retourner le nombre de pages du livre
    }

    
    public function setNbreDePages($nbreDePages) {
        $this->_nbreDePages = $nbreDePages; 
        // Mettre à jour le nombre de pages avec le nouveau nombre fourni
    }
     
    
    public function getAnneeDeParution() {
        return $this->_anneeDeParution;
         // Retourner l'année de parution du livre
    }

    
    public function setAnneeDeParution($anneeDeParution) {
        $this->_anneeDeParution = $anneeDeParution; 
        // Mettre à jour l'année de parution avec la nouvelle année fournie
    }

   
    public function getPrix() {
        return $this->_prix;
         // Retourner le prix du livre
    }

    // Méthode pour définir le prix du livre
    public function setPrix($prix) {
        $this->_prix = $prix; 
        // Mettre à jour le prix du livre avec le nouveau prix fourni
    }

    // Méthode magique pour retourner une chaîne représentant le livre
    public function __toString() {
        return "$this->_titre ($this->_anneeDeParution) : $this->_nbreDePages pages / $this->_prix € <br>"; 
        // Retourner une chaîne contenant le titre, l'année de parution, le nombre de pages et le prix du livre
    }
}
?>
