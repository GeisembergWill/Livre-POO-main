<?php


include 'Auteur.php';
include 'Livre.php';


$auteur = new Auteur("Stephen", "King");
$livre = new Livre("ÇA","1138","1986","20",$auteur);
$livre2= new Livre("Simetierre","374","1983","16",$auteur);
$livre3 = new Livre("Le Fléau","823","1978","14",$auteur);
$livre4 = new Livre("ÇA","447","1977","16",$auteur);

$livres = array ($livre,$livre2,$livre3,$livre4);
array_push($livres,"autre livre");

echo $auteur . "<br>"; 
echo $livre; 
echo $livre2;
echo $livre3;
echo $livre4. "<br>";


    

var_dump ($auteur);

var_dump($livre);


