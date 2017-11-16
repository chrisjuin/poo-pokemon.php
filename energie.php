<?php

class Energie
{
    private $type; 
    private $pokemon; 
    private $degat; 
    
public function __construct($type , $pokemon, $degat)
{
    $this->type = $type;
    $this->pokemon = $pokemon; 
    $this->degat = $degat; 
}


public function setTypeEnergie($type)
{
    $this->type = $type; 
}

public function getTypeEnergie()
{
    return $this->type; 
}

public function setPokemon($pokemon)
{
    $this->pokemon = $pokemon; 
}

public function getPokemon()
{
    return $this->pokemon; 
}

public function setDegat($degat)
{
    $this->degat = $degat; 
}

public function getDegat()
{
    return $this->degat; 
}

}