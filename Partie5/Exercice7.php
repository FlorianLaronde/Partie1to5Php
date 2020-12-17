<!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->

<?php

    $numeroDepartement = array (
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'
    );

    $numeroDepartement['51'] = 'Reims';

    var_dump($numeroDepartement);
?>