<!-- Créer une variable age et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur. -->

<?php 
        // Création de la variable
        $age =rand(1,99);
        echo 'Age :' . ' ' . $age . '</br>';

        if ($age >= 18 ) {
            echo 'Vous êtes majeur';
        } else {
            echo 'Vous êtes mineur';
        }      
?>