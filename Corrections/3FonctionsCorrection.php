<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions PHP</title>
    <link href="../CSS/style.css" rel="stylesheet">
</head>
<body>

// Mes variables :
<?php
$prenom = 'Jordan';
$surnom = substr($prenom, 0, 2);
$heure = "Il est " . date("H:i:s");
//----------------------------------------
$nom = "Jordan";
$pays = 'France';
$date = date('d/m/y');
$couleurs = ['jaune', 'bleu', 'vert'];

?>
    <!-- Stockez maintentant les deux premières lettres de la variable utilisée pour le prénom dans une variable surnom et restituez la dans le code HTML suivant : -->

    <p>Mon surnom correspond aux deux premières lettres de mon prénom, on me surnomme donc <?= $surnom ?></p>

    <!-- Affichons désormais la date du jour, stockée dans une variable : -->
    
    <p>Nous sommes le <?= $date ?></p>

    <!-- Anisi que l'heure : -->

    <p><?= $heure ?></p>

    <!-- Vous avez probablement à ce niveau un résultat du type 'Il est 12:20 heures', ce qui n'est pas très clair... Tentez d'afficher l'heure comme suit :
    Indice : concaténation -->

    <p>Il est XX heure(s) et XX minute(s).</p>

    <?php 
    //--------------- Je déclare ma fonction 

    function maFonction($identite, $naissance, $chiffre, $couleur, $class) {

        $nombreRand = rand(12, 600) + $chiffre;
        $identiteCourte = substr($identite, 0, 2);
       echo ("<p style='color:$couleur'>Je m'apelle " . $identite . " et on me surnomme " . $identiteCourte . "</p>");
       echo ("<p class='$class'>Je suis né le " . $naissance . "</p>");
       echo ("<p>J'ai " . $nombreRand. " couleurs préférées.</p>");
       echo ("<div style='height: 100px; background-color:$couleur'></div>");
       };
       
       echo maFonction('Thierry', '30 juin', 22, 'blue', 'class');
?>
</body>
</html>