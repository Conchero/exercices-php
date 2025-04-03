<?php

// Exercice 3 : Calculer la somme des nombres de 1 à 100.
// Pseudo-code :
// somme = 0
// pour i de 1 à 100 faire
//   somme += i
// afficher somme

$somme = 0;

for ($i = 0; $i < 100; $i) {
    $somme += $i;
}

echo $somme;
