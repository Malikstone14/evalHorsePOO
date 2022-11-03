<?php

namespace App\Model;

use App\Model\Human;


class Manager extends Categorie{

    private string $categorie;

    public function __construct(string $city , string $postalCode, string $street, string $name, $categorie = "Manager"){
        $this->categorie = $categorie;
        parent::__construct( $city, $postalCode, $street, $name);
        
    }


    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of manager
     */ 
    public function getCategorie()
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
}