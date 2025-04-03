<?php

// Exercice 5 : Vérifier si un nombre est pair ou impair.
// Pseudo-code :
// si nombre % 2 == 0 alors
//   afficher 'pair'
// sinon
//   afficher 'impair'

$nombre = $_GET['number'];


echo $nombre%2 === 0 ? "pair" : "impair"; 