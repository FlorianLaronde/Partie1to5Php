<!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->

<?php 

    $a = 21;
    $b = 'km';

    function test ($a,$b) {
        return $a . $b;
    }

   echo test ($a,$b);

?>