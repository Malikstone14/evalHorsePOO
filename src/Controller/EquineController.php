<?php

namespace App\Controller;
use App\Model\Equine;
use ErrorException;

class EquineController extends Equine{



    static public function checkColor(string $color): bool
    {
        $tabcolor = ["Alzan", "Bai", "Pie", "Grey", "White"];

        if(in_array($color, $tabcolor, true))
            return $color;
        else
            throw new ErrorException("La couleur est invalide");
    }

    static public function makeId(string $name, string $color, int $count): string
    {
        $n = strtolower($name[0]);
        $c = strtoupper($color[0]);
        $numb = $count;
        return "000-($n)-($c)-($numb)";
    }

    static public function positiveWater(int $water): bool {
        if($water > 0 ) 
        return true;
        else
        throw new ErrorException("Water is negative, sorry it's not possible");
    }
}