<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Exercice 1 : Créer puis manipuler des variables en PHP :</h1>
    
    <!--     Remplacez les XXX ci-dessous par des valeurs contenues dans des variables.
    Commencez pour cela par déclarer les variables, puis utilisez les pour insérer leurs valeurs dans le code HTML suivant :  -->

    <p>Bonjour je m'appelle XXX, j'ai XXX ans et je suis XXX de profession.</p>

    <!--     Ensuite, tentez de réstituer un chiffre aléatoire compris entre 1 et 9, qui sera insérer dans le code HTML suivant : -->
    
    <p>Mon chiffre porte bonheur est le XXX</p>

    <!-- Multipliez désormais ce chiffre par 20, en le stockant dans un nouvelle variable et en le restituant dans le code HTML suivant :  -->

    <p>Cette information ne présente aucun intéret, mais si vous vous posez la question, sachez que mon chiffre prote bonheur multiplié par 20 donne XXX</p>

    <!-- Stockez maintentant les deux premières lettres de la variable utilisée pour le prénom dans une variable surnom et restituez la dans le code HTML suivant : -->

    <p>Mon surnom correspond aux deux premières lettres de mon prénom, on me surnomme donc XXX</p>

    <!-- Affichons désormais la date du jour, stockée dans une variable : -->
    
    <p>Nous sommes le XXX</p>

    <!-- Anisi que l'heure : -->

    <p>Il est XXX heures</p>

    <?php
    $date = date('H')+1;
    $time = date('i');
    ?> 
    <?= $date . " heures et ". $time . " minutes." ?>


    
    
</body>
</html>