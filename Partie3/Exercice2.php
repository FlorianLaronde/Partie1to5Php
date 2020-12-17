<!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable -->

<?php

$firstNumber = 0;
$secondNumber = 5;

while ($firstNumber <= 20) {
   echo $firstNumber * $secondNumber;
   echo '</br>';
   $firstNumber++;
}

?>