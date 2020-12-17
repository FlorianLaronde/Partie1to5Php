<!-- Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  
Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. 
Bonus : L'écrire de deux manières différentes. -->

<?php 
        // Création de la variable
        $isEasy = true;

        if ($isEasy) {
            echo 'C\'est facile!!';
        } else {
            echo 'C\'est difficile !!!';
        }      
?>

<?php 
        // Création de la variable
        $isEasy = true;

        if (!$isEasy) {
            echo 'C\'est difficile!!!';
        } else {
            echo 'C\'est facile !!';
        }      
?>