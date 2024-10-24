<?php

include 'auteur.php';
include 'livre.php';


$auteur = new Auteur("Victor", "Hugo");
$livre = new Livre("Les Misérables");


echo $auteur . "<br>"; 
echo $livre;  
