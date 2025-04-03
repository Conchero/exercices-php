<?php

// Exercice 10 : Trouver la somme des chiffres d’un nombre.
// Pseudo-code :
// somme = 0
// tant que n > 0 faire
//   somme += n % 10
//   n = n // 10
// afficher somme

$numberURL = $_GET["number"];

$splittedNumber = str_split($numberURL);

$somme = 0;
foreach ($splittedNumber as $number) {
    if (intval($number))
    {
        $somme += $number;
    }
}

echo $somme;