<?php

include 'Auteur.php'; 
// Charge la définition de la classe Auteur depuis le fichier Auteur.php
include 'Livre.php';  
// Charge la définition de la classe Livre depuis le fichier Livre.php

// Créer une instance de la classe Auteur avec les informations de l'auteur
$auteur = new Auteur("Stephen", "King", "01/09/1947");
// Ici, on crée un nouvel objet Auteur en lui passant le prénom, le nom et la date de naissance


$livre = new Livre("ÇA", "1138", "1986", "20", $auteur); 
// Crée un livre avec le titre "ÇA"
$livre2 = new Livre("Simetierre", "374", "1983", "16", $auteur); 
// Crée un livre avec le titre "Simetierre"
$livre3 = new Livre("Le Fléau", "823", "1978", "14", $auteur); 
// Crée un livre avec le titre "Le Fléau"
$livre4 = new Livre("ÇA", "447", "1977", "16", $auteur); 
// Crée un autre livre avec le titre "ÇA"


$livres = array($livre, $livre2, $livre3, $livre4); 
// Met les objets livre dans un tableau


array_push($livres, "autre livre"); 
// Ajoute "autre livre" à la fin du tableau $livres

// Afficher des informations sur l'auteur et son âge
echo "L'auteur est $auteur, âgé de " . $auteur->getAge() . " actuellement.<br>"; 
// Affiche une chaîne contenant le nom de l'auteur et son âge, en utilisant la méthode getAge()

// Afficher les informations de chaque livre
echo $livre;  
echo $livre2; 
echo $livre3; 
echo $livre4 . "<br>"; 

// Afficher les détails de l'auteur et du livre en utilisant var_dump
var_dump($auteur); 

var_dump($livre); 