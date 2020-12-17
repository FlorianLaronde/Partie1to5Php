<!-- Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme  

La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineure -->


<?php 

    $age = 25;
    $gender = 'Homme';


    function test ($age, $gender) {
        $response = '';
        if ($age >= 18 && $gender =='Homme') {
            $response = 'Vous êtes un homme et vous êtes majeur';
        } else if ($age < 18 && $gender =='Homme') {
            $response =  'Vous êtes un homme et vous êtes mineur';
        } else if ($age >= 18 && $gender !='Homme') {
            $response = 'Vous êtes une femme et vous êtes majeure';
        } else {
            $response = 'Vous êtes une femme et vous êtes mineure';
        }
        return $response;
    }

        echo test($age, $gender);


?>