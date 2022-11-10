<?php 
namespace App\Model;

class Address{

    protected string $street;
    protected string $postCode;
    protected string $city;

    public function __construct(string $street, string $postCode, string $city)
    {
        $this->setStreet($street)->setPostCode($postCode)->setCity($city);
    }


    /**
     * Get the value of city
     */ 
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of postCode
     */ 
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     *
     * @return  self
     */ 
    public function setPostCode($postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of street
     */ 
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street): self
    {
        $this->street = $street;

        return $this;
    }


}