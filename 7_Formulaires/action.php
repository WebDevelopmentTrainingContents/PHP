<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page destination formulaire PHP</title>
</head>
<?php
// Est-ce qu'une valeur age a été soumise ?
if (!empty($_POST['age'])) {
    $age = $_POST['age'];
}
// Dans le cas contraire :
else {
    $age = "euhhhh";
    echo "<p>C'est vide pour l'âge !</p>";
}

// Est-ce qu'une valeur nom a été soumise ?
if (!empty($_GET['nom'])) {
    $nom = $_GET['nom'];
}
// Dans le cas contraire :
else {
    $nom = "euhhhh";
    echo "<p>C'est vide pour le nom !</p>";
}
?>
<body>

<p>Bonjour <?= $nom ?>, tu as <?= $age ?> ans.</p>
    
<?php var_dump($nom);
var_dump($age); ?>
</body>
</html>