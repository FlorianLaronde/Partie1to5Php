<!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département -->


<?php

    $numeroDepartement = array (
        02 => 'Aisne',
        59 => 'Nord',
        60 => 'Oise',
        62 => 'Pas-de-Calais',
        80 => 'Somme'
    );
foreach ( $numeroDepartement as $cle => $element ) {
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>