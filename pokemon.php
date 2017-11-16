<?php

class Pokemon
{
    private $nom;
	private $pv;
	private $type;
	private $niveau;
    private $atk; 
	

    public  function __construct($nom, $pv, $type, $niveau, $atk)
{
    $this->nom = $nom;
    $this->pv = $pv;
    $this->type = $type; 
    $this->niveau = $niveau; 
    $this->atk = $atk;
}
    
    public function setNomPokemon($nom)
{
    $this->nom = $nom; 
}

    public function getNomPokemon()
{
    return $this->niveau; 
}

public function setPv($pv)
{
    $this->pv = $pv; 
}

public function getPv()
{
    return $this->pv; 
}

public function setType($type)
{
    $this->type = $type; 
}

public function getType()
{
    return $this->type; 
}

public function setNiveau($niveau)
{
    $this->niveau = $niveau; 
}

public function getNiveau()
{
    return $this->niveau; 
}

public function setAtk($atk)
{
    $this->atk = $atk; 
}

public function getAtk()
{
    return $this->atk; 
}

public function Attaquer($defenseur)
{
    $defenseur->pv = $defenseur->pv-$this->atk;
    $this->Attaquer = $defenseur->pv-$this->atk;
    if($defenseur->pv <= 0){
        return "mort";
}
}
}

