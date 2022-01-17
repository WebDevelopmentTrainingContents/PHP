<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variables PHP</title>
</head>
// Vos variables :
<?php
 
$nom = 'Paul';
$chiffre = 7;
$nombre = 7 * 20;
// Anciennce façon de déclarer un tableau :
$personne = array(
    "taille" => "192cm",
    "genre" => "femme",
    "travail" => "développeuse"
);
// Nouvelle et bonne façon de déclarer un tableau :
$personne2 = [
    1 => "192cm",
    2 => "femme",
    3 => "développeuse",
    4 => 4
];
$personne3 = ['test', 'test2', 'test3'];

// Les constantes :

define('temperature',"100");

?>
<body>

<?= $lorem ?>
    <h1>Exercice 1 : Créer puis manipuler des variables en PHP :</h1>
    
    <!--     Remplacez les XXX ci-dessous par des valeurs contenues dans des variables.
    Commencez pour cela par déclarer les variables, puis utilisez les pour insérer leurs valeurs dans le code HTML suivant :  -->

    <p>Bonjour je m'appelle <?= $nom ?>, j'ai XXX ans et je suis XXX de profession.</p>

    <!--     Ensuite, tentez de réstituer un chiffre aléatoire compris entre 1 et 9, qui sera insérer dans le code HTML suivant : -->
    
    <p>Mon chiffre porte bonheur est le <?= $chiffre ?></p>

    <!-- Multipliez désormais ce chiffre par 20, en le stockant dans un nouvelle variable et en le restituant dans le code HTML suivant :  -->

    <p>Cette information ne présente aucun intéret, mais si vous vous posez la question, sachez que mon chiffre prote bonheur multiplié par 20 donne <?= $nombre ?></p>

    <?php 

    $nom = 'Tim';

    ?>

    <p style="color: red;">Bonjour, en fait, je m'appelle <?= $nom ?>, j'ai XXX ans et je suis XXX de profession.</p>

    <?= $nom ?>
  
<!-- Les types de variables : -->
    <p>Le type de la variable est <?= gettype($nom) ?></p> 
    <p>Le type de la variable est <?= gettype($chiffre) ?></p> 
<?php var_dump($personne) ?>
<?php echo nl2br("\n"); ?> <!--Saut de ligne-->
<?php var_dump($personne2) ?>
<?php echo $personne ?>
<?php var_dump($personne2[3]); ?>
<?php echo nl2br("\n"); ?> <!--Saut de ligne-->
<p>Je mesure <?echo($personne["taille"]) ?></p>
<?php echo nl2br("\n"); ?> <!--Saut de ligne-->
<?php echo($personne3[0]); ?>
<?= temperature; ?>
<?php echo temperature ?>
</body>
</html>