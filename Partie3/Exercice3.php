<!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable -->

<?php

   $firstNumber = 100;
   $secondNumber = 5;

   while ($firstNumber >= 10) {
      echo $firstNumber * $secondNumber;
      echo '</br>';
      $firstNumber--;
}

?>