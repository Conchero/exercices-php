<?php

// Exercice 6 : Trouver le plus grand de trois nombres.
// Pseudo-code :
// si a >= b et a >= c alors
//   afficher a
// sinon si b >= a et b >= c alors
//   afficher b
// sinon
//   afficher c

$nombre = $_GET['number'];


function parseURLNumbers($numberURLArray)
{
    $explodedURLNumbers = explode(" ", $numberURLArray);
    $parsedNumbersArray = [];
    $largerNumber = 0;
    for ($i = 0; $i < count($explodedURLNumbers); $i++) {
        if (intval($explodedURLNumbers[$i])) {
            array_push($parsedNumbersArray, intval($explodedURLNumbers[$i]));
        }

        if ($parsedNumbersArray[$i] > $largerNumber)
        {
            $largerNumber = $parsedNumbersArray[$i];
        }
    }

    echo $largerNumber . ' is the largest number';
}

parseURLNumbers($nombre);

// function getLargerNumber($numbers)
// {
//     for ($i = 0; $i<var_dump(count($numbers)); $i++)
//     {
//         echo $i;
//     }
// }


//getLargerNumber($nombre);