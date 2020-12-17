<!-- Créer deux variables age et gender. La variable gender peut prendre comme valeur :
Homme
Femme

En fonction de l'âge et du genre afficher la phrase correspondante :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineur 

Gérer tous les cas.  -->

<?php 
        // Création de la variable
        $age = 22;
        $gender = 'Homme';

        if ($age >= 18 && $gender =='Homme') {
            echo 'Vous êtes un homme et vous êtes majeur';
        } else if ($age < 18 && $gender =='Homme') {
            echo 'Vous êtes un homme et vous êtes mineur';
        } else if ($age >= 18 && $gender == 'Femme') {
            echo 'Vous êtes une femme et vous êtes majeur';
        } else if ($age < 18 && $gender == 'Femme') {
            echo 'Vous êtes une femme et vous êtes mineur';
        } else {
            echo 'Error';
        };
?>