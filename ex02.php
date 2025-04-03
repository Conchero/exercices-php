<?php

// Exercice 2 : Afficher les nombres pairs de 0 à 20.
// Pseudo-code :
// pour i de 0 à 20 faire
//   si i % 2 == 0 alors
//     afficher i
// fin

for ($i = 0; $i < 20; $i++) {
    if ($i%2 === 0)
    {
        echo $i . "<br>";
    }
}