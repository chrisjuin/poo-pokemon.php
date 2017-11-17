<?php
require_once('pokemon.php');
require_once('energie.php');
require_once('dresseur.php');


$deck = array(
    new Pokemon("Pikachu", 165, "Foudre", 12, 83),
    new Pokemon("Morvax", 145, "Morve", 1, 76),
    new Pokemon("Racaillou", 185, "Foudre", 8, 100),
    new Pokemon("Germiflor", 124, "Herbe", 4, 45)
);


$deck[2]->Attaquer($deck[3]);

var_dump($deck[3]);

