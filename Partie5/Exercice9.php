<!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->

<?php

    $numeroDepartement = array (
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'
    );
foreach ( $numeroDepartement as $element ) {
    echo $element . '</br>';
}
?>