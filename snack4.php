<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php

 function getArrayOfIntegers($min, $max, $nItems)
{
    $newArray = [];

    while(count($newArray) < $nItems) {
        $number = rand($min, $max);
        if(!in_array($number, $newArray)) {
            $newArray[] = $number;
        }
    }
    return $newArray;
};
var_dump(getArrayOfIntegers(1, 15, 15));



?>

