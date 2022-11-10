<?php
namespace App\Model;

use App\Model\Address;
use App\Model\Categorie;

abstract class Human{

    public string $name;
    protected Address $address;

    public function __construct(string $name, Address $address)
    {
        $this->setName($name);
        $this->address = $address;


    }



    /**
     * Get the value of nom
     */ 
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setName($name): Self
    {
        $this->name = $name;

        return $this;
    }

    Public function __toString()
    {
        return "My name is {$this->getName()} and i live in {$this->address->getPostCode()} , {$this->address->getCity()} at {$this->address->getStreet()}.";
    }
}