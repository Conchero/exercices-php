<?php

// Exercice 8 : Inverser une chaîne de caractères.
// Pseudo-code :
// pour i de longueur-1 à 0 faire
//   concaténer caractère à une nouvelle chaîne
// afficher la nouvelle chaîne

$stringURL = $_GET["s"];


echo gettype($stringURL) === gettype(" ") ? strrev($stringURL) : "Please enter a string";
