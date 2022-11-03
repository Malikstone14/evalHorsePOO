<?php
namespace App\Model;

use App\Model\Address;
use App\Model\Categorie;

abstract class Human{

    public string $name;
    protected Address $address;
    protected Manager $manager;

    public function __construct(string $name, string $street, string $postalCode, string $city)
    {
        $this->setName($name);
        $this->address = new Address($street, $postalCode, $city);


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
}