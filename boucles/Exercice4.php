<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 3 boucle</title>
</head>

<body>
    <h1>Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant :</h1>
    <br>
    <?php /* zerate */
    echo "<table style='border : 1px solid black'>";
    echo "<thead>";
    echo "<th style='border : 1px solid black'></th>";
    for ($i_head = 0; $i_head <= 12; $i_head++) {
        echo "<th style='border : 1px solid black'>$i_head</th>";
    }
    echo "</thead>";
    for ($i_12 = 0; $i_12 <= 12; $i_12++) {
        echo "<tr>";
        echo "<th style='border : 1px solid black'>$i_12</th>";
        for ($td = 0; $td <= 12; $td++) {
            $resultat = $td * $i_12;
            echo "<td style='border : 1px solid black'>$resultat</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <?php /*  roy */

    function multi($j)
    {
        for ($i = 0; $i < 13; $i++) {
            echo $i * $j . " ";
        }
    }

    for ($i = 0; $i < 13; $i++) {
        echo $i, " ", multi($i),  " ", "<br>";
    }

    ?>
    <br>
    <!--  -->
    <?php

    echo "<table style='border : 1px solid black'>";
    echo "<thead>";
    echo "<th style='border : 1px solid black'></th>";
    for ($i_head = 0; $i_head <= 12; $i_head++) {
        echo "<th style='border : 1px solid black'>$i_head</th>";
    }
    echo "</thead>";
    for ($i = 0; $i < 13; $i++) {
        echo $i, " ", multi($i),  " ", "<br>";
        echo "<td style='border : 1px solid black'>$i</td>";
    }



    echo "</table>";

    ?>

</body>

</html>