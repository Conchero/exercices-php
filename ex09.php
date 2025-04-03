<?php

// Exercice 9 : Vérifier si un mot est un palindrome.
// Pseudo-code :
// inverser le mot
// si mot == mot inversé alors
//   afficher 'palindrome'
// sinon
//   afficher 'non'

$stringURL = $_GET["s"];

echo strtolower(strrev($stringURL)) === strtolower($stringURL) ? "palindrome" : "non";