<?php


include 'Auteur.php';
include 'Livre.php';


$auteur = new Auteur("Stephen", "King");
$livre = new Livre("ÇA","1138","1986","20");
$livre2= new Livre("Simetierre","374","1983","16");
$livre3 = new Livre("Le Fléau","823","1978","14");
$livre4 = new Livre("ÇA","447","1977","16");


echo $auteur . "<br>"; 
echo $livre; 
echo $livre2;
echo $livre3;
echo $livre4. "<br>";

var_dump ($auteur);

var_dump($livre);


