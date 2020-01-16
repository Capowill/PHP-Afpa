<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices</title>
</head>
<body>
    <h1>Exercice Boucles</h1>
    <h5>Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...</h5>

    <?php
         $nombre = 1;
         while($nombre<150){
            echo $nombre."<br>";
            $nombre = $nombre+2;
        }
    ?>

</body>
</html>