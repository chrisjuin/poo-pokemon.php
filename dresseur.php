<?php

class Dresseur
{
    private $nom;
    private $typeCarte; 
    private $typeDresseur; 
    private $zoneTexte; 

    public function __construct($nom, $typeCarte, $typeDresseur, $zoneTexte)
{
    $this->nom = $nom; 
    $this->typeCarte = $typeCarte;
    $this->typeDresseur = $typeDresseur;
    $this->zoneTexte = $zoneTexte; 
}

public function setNom($nom)
{
    $this->nom = $nom; 
}

public function getNom()
{
    return $this->nom; 
}

public function setTypeCarte($typeCarte)
{
    $this->nom = $nom; 
}

public function getTypeCarte()
{
    return $this->nom; 
}

public function setTypeDresseur($typeDresseur)
{
    $this->typeDresseur = $typeDresseur; 
}

public function getTypeDresseur($typeDresseur)
{
    return $this->nom; 
}

public function setZoneTexte($zoneTexte)
{
    $this->zoneTexte = $zoneTexte; 
}

public function getZoneTexte($zoneTexte)
{
    return $this->zoneTexte; 
}

}