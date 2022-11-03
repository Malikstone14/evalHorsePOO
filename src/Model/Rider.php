<?php

namespace App\Model;


class Rider extends Categorie{

    private string $categorie;

    public function __construct(string $city,string $postalCode,string $street,string $name, $categorie = "Rider"){
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
    public function setcategorie($categorie): self
    {
        $this->rider = $categorie;

        return $this;
    }
}