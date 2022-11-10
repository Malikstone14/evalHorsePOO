<?php

namespace App\Model;


use App\Model\Address;
use App\Model\Categorie;


class Manager extends Categorie{

    private string $categorie;

    public function __construct( string $name, Address $address, $categorie = "Manager"){
        $this->categorie = $categorie;
        parent::__construct( $name , $address);
        
    }



    /**
     * Get the value of manager
     */ 
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * Set the value of manager
     *
     * @return  self
     */ 
    public function setcategorie($categorie): self
    {
        $this->manager = $categorie;

        return $this;
    }

    public function __toString()
    {
        return parent::__toString() . "And I'm {$this->getCategorie()}";
    }
}