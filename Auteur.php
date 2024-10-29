<?php
class Auteur {
    
    private string $_nom; 
    // Propriété pour stocker le nom de l'auteur
    private string $_prenom; 
    // Propriété pour stocker le prénom de l'auteur
    private DateTime $_dateDeNaissance; 
    // Propriété pour stocker la date de naissance de l'auteur
    private array $_livres; 
    // Propriété pour stocker un tableau de livres associés à l'auteur

    // Constructeur pour initialiser les propriétés de l'objet Auteur
    public function __construct(string $nom, string $prenom, string $dateDeNaissance) {
        $this->_nom = $nom; 
        // Affecter le nom passé en paramètre à la propriété $_nom
        $this->_prenom = $prenom; 
        // Affecter le prénom passé en paramètre à la propriété $_prenom
        $this->_livres = []; 
        // Initialiser le tableau $_livres à un tableau vide
        $this->_dateDeNaissance = DateTime::createFromFormat('d/m/Y', $dateDeNaissance); 
        // Créer un objet DateTime à partir de la date de naissance fournie
    }    
    
    // Méthode pour obtenir l'âge de l'auteur
    public function getAge(): int {
        $datetime = new DateTime('now'); 
        // Créer un nouvel objet DateTime représentant le moment actuel
        return $datetime->diff($this->_dateDeNaissance)->y; 
        // Calculer et renvoyer la différence en années entre la date actuelle et la date de naissance
    }
    
    // Méthode pour définir la date de naissance de l'auteur
    public function setDateDeNaissance(string $dateDeNaissance): void {
        $this->_dateDeNaissance = DateTime::createFromFormat('d/m/Y', $dateDeNaissance); 
        // Mettre à jour la date de naissance avec la nouvelle date fournie
    }
    
   
    public function getNom(): string {
        return $this->_nom; // Retourner le nom de l'auteur
    }

    public function setNom(string $nom): void {
        $this->_nom = $nom; // Mettre à jour le nom de l'auteur avec le nouveau nom fourni
    }
    
   
    public function getPrenom(): string {
        return $this->_prenom; // Retourner le prénom de l'auteur
    }

    public function setPrenom(string $prenom): void {
        $this->_prenom = $prenom; // Mettre à jour le prénom de l'auteur avec le nouveau prénom fourni
    }

    // Méthode pour ajouter un livre à la bibliographie de l'auteur
    public function ajouterLivre(Livre $livre): void {
        $this->_livres[] = $livre; // Ajouter l'objet livre au tableau $_livres
    }

    // Méthode pour obtenir la bibliographie de l'auteur
    public function bibliographie(): array {
        return $this->_livres; 
        // Retourner le tableau contenant tous les livres de l'auteur
    }
    
    // Méthode magique pour retourner une chaîne représentant l'auteur
    public function __toString(): string {
        return "$this->_nom $this->_prenom"; 
        // Retourner le nom complet de l'auteur (nom + prénom)
    }
}
?>