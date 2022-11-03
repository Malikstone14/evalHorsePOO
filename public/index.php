<?php

use App\Model\Human;
use App\Model\Stable;
use App\Model\Address;
use App\Model\Manager;
use App\Model\Rider;

require_once __DIR__ . "/../src/app.php";

echo "Création d'un manager";

$Manager1 = new Manager("Malik", "Rue Basse", "14000", "Caen");
dump($Manager1);

$Rider1 = new Rider("Marin", "Place Maurice", "14000", "Caen");
dump($Rider1);

$s1 = new Stable("Etable1", "rue de la Hess", "66666", "Enfer", $Manager1);
dump($s1);
echo $s1;
