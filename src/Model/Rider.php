<?php

namespace App\Model;

use App\Model\Address;
use App\Model\Categorie;
use Exception;

class Rider extends Categorie{

    private string $categorie;
    private array $gameType;
    private array $tabEquine;

    public function __construct( string $name, Address $address, $categorie = "Rider", array $gameType = [],array $tabEquine = []){
        $this->categorie = $categorie;
        $this->setGameType($gameType);
        $this->tabEquine = $tabEquine;
        parent::__construct( $name , $address);
    }

    public function addEquine($tabEquine, Equine $equine){
        if(count($this->$tabEquine) < 5)
            $this->tabEquine[] = $equine;
        else
            throw new Exception("Rider have too much equide");
    }

    /**
     * Get the value of rider
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of rider
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->rider = $categorie;

        return $this;
    }

    /**
     * Get the value of gameType
     */ 
    public function getGameType(): array
    {
        return $this->gameType;
    }

    /**
     * Set the value of gameType
     *
     * @return  self
     */ 
    public function setGameType($gameType): self
    {
        $this->gameType = $gameType;

        return $this;
    }


    /**
     * Get the value of tabEquine
     */ 
    public function getTabEquine()
    {
        return $this->tabEquine;
    }

    /**
     * Set the value of tabEquine
     *
     * @return  self
     */ 
    public function setTabEquine($tabEquine)
    {
        $this->tabEquine = $tabEquine;

        return $this;
    }

    public function __toString()
    {
        return parent::__toString() . "And I'm {$this->getCategorie()}, I have " . count($this->getTabEquine()) . " Horses or Poneys\n";
    }

}