<!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut. -->

<?php 

    // $number1 = 76;
    // $number2 = 87;
    // $number3 = 22;

    function test ($number1 = 1 , $number2 = 5, $number3 = 23) {
        return $number1 + $number2 + $number3 ;
    }

    test ($number1, $number2, $number3);

?>