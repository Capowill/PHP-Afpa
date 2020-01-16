<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>premier</title>
</head>
<body>
    <h1>Ecrivez un script qui affiche l'adresse IP du serveur et celle du client.</h1>

    <?php       
        echo "<br>";
        echo $_SERVER["REMOTE_ADDR"]; /* IP du visiteur */
        echo "<br>";
        echo $_SERVER['SERVER_ADDR']; /* IP serveur */
    ?>

</body>
</html>