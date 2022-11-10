<?php


use App\Model\Horse;
use App\Model\Human;
use App\Model\Rider;
use App\Model\Equine;
use App\Model\Stable;
use App\Model\Address;
use App\Model\Manager;
use App\Controller\EquineController;
use App\Model\Poney;
use App\Model\Sheitland;

require_once __DIR__ . "/../src/app.php";

/* It's creating a new address */


$address1 = new Address("Rue Basse", "14000", "Caen");
$address2 = new Address("Place Maurice", "14000", "Caen");
$address3 = new Address("rue de la Hess", "66666", "Enfer");
$address4 = new Address("Porte 2", "66600", "Jenpepu");
$address5 = new Address("Porte 3", "16660", "Mercy");

/* It's creating a new manager */

echo "Creating a new manager \n";

$Manager1 = new Manager("Malik", $address1);
$Manager2 = new Manager("Maxime", $address2);


/* It's creating a new rider */

$Rider1 = new Rider("Marin", $address2);
$Rider2 = new Rider("Romain", $address4);
$Rider3 = new Rider("Vincent", $address3);


/* It's creating a new stable with a name, an address and a manager. */
$s1 = new Stable("Etable1", $address3 , $Manager1);
$s1 = new Stable("Etable2", $address1 , $Manager2);

// It's creating a new horse with a wrong color for test EquineController::checkColor()
// $horse = new Horse("1", "Pied",50,$Rider1);

$horse = new Horse("Croquette","Pie",50,$Rider1);
$horse1 = new Horse("Salade","Alzan",120,$Rider2);
$horse2 = new Horse("Fruitos","Bai",50,$Rider3);
$horse3 = new Horse("Legume","Grey",60,$Rider1);
$horse4 = new Horse("Findus","White",20,$Rider2);

$poney = new Poney("Croquette","Pie",50,$Rider1);
$poney1 = new Poney("Salade","Alzan",120,$Rider2);
$poney2 = new Poney("Fruitos","Bai",50,$Rider3);
$poney3 = new Poney("Legume","Grey",60,$Rider1);
$poney4 = new Poney("Findus","White",20,$Rider2);

$sheitland = new Sheitland("Croquette","Pie",50,$Rider1);
$sheitland1 = new Sheitland("Salade","Alzan",120,$Rider2);
$sheitland2 = new Sheitland("Fruitos","Bai",50,$Rider3);
$sheitland3 = new Sheitland("Legume","Grey",60,$Rider1);
$sheitland4 = new Sheitland("Findus","White",20,$Rider2);

