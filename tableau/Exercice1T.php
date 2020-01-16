<?php
$a = array(
    "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"),
    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""),
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation")
);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau Ex0</title>
</head>

<body>

    <h1>Exercice 1</h1>
    <h5>Quelle semaine a lieu la validation du groupe 19002 ?</h5>

    <?php // quand on utilise un search ne pas mettre le tableau dans le même ?php ?\>

    echo array_search('Validation', $a["19002"]);
    ?>

    <!-- ""================================================"" -->
    <h1>Exercice 2</h1>
    <h5>Trouver la position de la dernière occurrence de Stage pour le groupe 19001.</h5>
    <!-- Voir definition occurrence -->

    <?php
    echo array_search('Stage', array_reverse($a["19001"]));
    //array_reverse : Inverse l'ordre des éléments d'un tableau

    ?>

    <!-- ""================================================"" -->

    <h1>Exercice 3</h1>
    <h5>Extraire, dans un nouveau tableau, les codes des groupes.</h5>

    <?php

    $i = 0;
    foreach (array_keys($a) as $values) {
        $Cgroupes[$i++] = $values;
    }
    print_r(array_values($Cgroupes));

    ?>
    <!-- ""================================================"" -->

    <h1>Exercice 4</h1>
    <h5>Combien de semaines dure le stage du groupe 19003 ?</h5>

    <?php
    $semaines = array_count_values($a["19003"]);
    print_r($semaines["Stage"]);
    ?>

</body>

</html>