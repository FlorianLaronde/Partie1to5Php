<!-- Traduire ce code avec des if et des else :

    echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!'; -->


<?php
    $gender = 'Homme';

    if (!$gender) {
        echo 'C\'est un développeur !!!';
    } else {
        echo 'C\'est une développeuse !!!';
    }
?>
