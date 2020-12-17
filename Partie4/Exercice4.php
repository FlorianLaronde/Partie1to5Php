<!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux -->

<?php 

    $a = 1;
    $b = 4;

    function test ($a,$b) {
        $response ='';
        if ($a > $b) {
            $response = 'Le premier nombre est plus grand.';
        } else if ($a < $b) {
            $response = 'Le premier nombre est plus petit.';
        } else {
            $response = 'Les deux nombres sont identiques.' ;
        } 
        return $response;
    }

    echo test ($a, $b)
?>