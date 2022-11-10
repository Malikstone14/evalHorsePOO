<?php
namespace App\Model;

use App\Model\Equine;

class Sheitland extends Equine{

    private string $category;

    public function __construct(string $name, string $color, int $water, Rider $rider , string $category = "Sheitland")
    {
        $this->setCategory($category);
        parent::__construct($name, $color, $water, $rider);
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}