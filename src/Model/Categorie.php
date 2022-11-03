<?php
namespace App\Model;



abstract class Categorie extends Human{


    public function __construct(string $name, string $street, string $postalCode, string $city)
    {   
        parent::__construct($name , $street,  $postalCode,  $city);
    }

}