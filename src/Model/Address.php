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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of posteCode
     */ 
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set the value of posteCode
     *
     * @return  self
     */ 
    public function setPostCode($postCode)
    {
        $this->posteCode = $postCode;

        return $this;
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }


}