<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions PHP</title>
</head>

<body>

    // Mes variables :
    <?php
$prenom ="Jordan"; 
var_dump($prenom);
$surnom = substr($prenom, 0, 2);
var_dump($surnom);
$couleursPref = ['bleu, vert, jaune'];
                        $nbCouleurs = count($couleursPref);
echo $nbCouleurs;

$heure = date('h:i:s');

//-----------------------------------

?>

    <!-- Stockez maintentant les deux premières lettres de la variable utilisée pour le prénom dans une variable surnom et restituez la dans le code HTML suivant : -->

    <p>Mon surnom correspond aux deux premières lettres de mon prénom, on me surnomme donc <?= $surnom ?></p>

    <!-- Affichons désormais la date du jour, stockée dans une variable : -->

    <p>Nous sommes le <?= $date ?></p>

    <!-- Anisi que l'heure : -->

    <p>Il est <?= $heure ?> heures</p>

    <!-- Vous avez probablement à ce niveau un résultat du type 'Il est 12:20 heures', ce qui n'est pas très clair... Tentez d'afficher l'heure comme suit :
    Indice : concaténation -->

    <p>Il est XX heure(s) et XX minute(s).</p>


</body>

</html>