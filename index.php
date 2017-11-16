<?php


require_once('pokemon.php');
require_once('energie.php');
require_once('dresseur.php'); 

$Pikachu = new Pokemon("Pikachu", 165 , "Foudre", 12 , 83);
$Morvax = new Pokemon("Morvax", 165, "Morve", 1 , 42);

$Pikachu->Attaquer($Morvax); 

var_dump($Pikachu->Attaquer($Morvax));

