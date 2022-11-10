<?php
namespace App\Model;

use App\Model\Address;
use App\Model\Manager;

class Stable{

    private string $nameStable;
    protected Address $address;
    protected Manager $manager;


    public function __construct(string $nameStable,Address $address , Manager $manager)
    {
        $this->setnameStable($nameStable);
        $this->address = $address;
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
        return "Stable {$this->getnameStable()} who is in the city of  {$this->address->getCity()} belongs to the Manager {$this->manager->getName()}";
    }
}