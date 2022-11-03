<?php
namespace App\Model;

use App\Model\Address;
use App\Model\Manager;

class Stable{

    private string $nameStable;
    protected Address $address;
    protected Manager $manager;


    public function __construct(string $nameStable, string $street, string $postCode, string $city , Manager $manager)
    {
        $this->setnameStable($nameStable);
        $this->address = new Address($street, $postCode, $city);
        $this->manager = $manager;
        
        
    }

    /**
     * Get the value of nameStable
     */ 
    public function getnameStable(): string
    {
        return $this->nameStable;
    }

    /**
     * Set the value of nameStable
     *
     * @return  self
     */ 
    public function setnameStable($nameStable): self
    {
        $this->nameStable = $nameStable;

        return $this;
    }

    public function __toString()
    {
        return "L'écurie {$this->getnameStable()} qui est dans la ville de {$this->address->getCity()} appartient au Manager {$this->manager->getName()}";
    }
}