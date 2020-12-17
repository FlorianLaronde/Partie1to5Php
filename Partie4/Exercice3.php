<!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines. -->

<?php 

    $a = 'Salut';
    $b = 'ça va ?';

    function test ($a, $b) {
        return $a . ' ' . $b;
    }

   echo test($a,$b);
    
?>