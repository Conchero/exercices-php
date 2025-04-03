<?php

// Exercice 7 : Calculer la factorielle d'un nombre.
// Pseudo-code :
// fact = 1
// pour i de 1 à n faire
//   fact *= i
// afficher fact


$factNumber = intval($_GET['factor']);
$fact = 1;

for ($i = 0; $i < $factNumber; $i++) {
    $fact *= $i+1;
}

echo $fact;