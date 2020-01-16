<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau Ex0</title>
</head>

<body>
    <h1>Exercice 0</h1>
    <h5>Testez les différents exemples du cours, à l'aide de la fonction var_dump().</h5>
    <?php
    $prenoms = array("Franck", "Laurent", "Caroline", "Magali", "Véronique");    
 
    rsort($prenoms);
     
    for ($i = 0; $i <= count($prenoms)-1; $i++) 
    {
       echo ".$prenoms[$i].<br>";
    }
     
    var_dump($prenoms);

?>
    
    <?php
    $tab = array(
        "a" => "Lundi",
        "b" => "Mardi",
        "c" => "Mercredi",
        "d" => "Jeudi",
        "e" => "Vendredi"
    );

    asort($tab);

    foreach ($tab as $cle => $valeur) {
        echo $cle . " : " . $valeur . "<br>";
    }

    var_dump("$tab");

    ?>
</body>

</html>