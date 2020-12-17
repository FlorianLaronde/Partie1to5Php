<!-- Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans. -->

<?php 

    $name = 'Laronde';
    $firstname = 'Florian';
    $age = 22;

    function test ($name, $firstname, $age) {
        return 'Bonjour' . ' ' . $name . ' ' . $firstname . ', ' . 'tu as' . ' ' . $age . ' ' . 'ans.' ;
    }

   echo test ($name, $firstname, $age);
    // Testez les variables dans l'appel de la fonction

?>