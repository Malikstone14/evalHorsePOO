<?php
namespace App\Model;

use App\Model\Address;
use App\Model\Human;



abstract class Categorie extends Human{


    public function __construct(string $name, Address $address)
    {   
        parent::__construct($name , $address);
    }

}