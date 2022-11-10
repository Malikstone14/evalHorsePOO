<?php

namespace App\Model;

use App\Model\Rider;
use App\Controller\EquineController;

abstract class Equine{

    private string $name;
    private string $id;
    private string $color;
    private string $water;
    public static $count = 0;
    protected Rider $rider;

    public function __construct(string $name, string $color, int $water, Rider $rider)
    {
        $this->setName($name)->setColor($color)->setWater($water);
        $this->rider = $rider;
        $this->setId();
        $this->addEquine();
        
    }


    public function addEquine(){
        self::$count += 1 ;
    }

    /**
     * Get the value of id
     */ 
    public function getId() :string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId() : self
    {
        $this->id = EquineController::makeId($this->name , $this->color , self::$count);
        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        EquineController::checkColor($color);
        $this->color = $color;
        return $this;
    }

    /**
     * Get the value of water
     */ 
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set the value of water
     *
     * @return  self
     */ 
    public function setWater($water)
    {
        EquineController::positiveWater($water);
        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of rider
     */ 
    public function getRider()
    {
        return $this->rider;
    }

    /**
     * Set the value of rider
     *
     * @return  self
     */ 
    public function setRider($rider)
    {
        $this->rider = $rider;

        return $this;
    }
}