<!-- Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  
Afficher : Bonjour + lastname + firstname + , tu as + age + ans. -->

<?php 
        // Création des 3 variables (string et int)

        $lastName = 'Will';
        $firstName = 'Smith';
        $age = 25;
       
        //    Affichage des variables
        echo 'Bonjour' . ' ' . $lastName . ' ' . $firstName . '  ,' . 'tu as' . ' ' . $age . ' ' . 'ans.';
?>