<?php 
setcookie('theme', $_GET['theme']);
setcookie('id', 'jo');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "<p>" . $_COOKIE['theme'] . "</p>";


    var_dump($_SERVER);
    echo '<br>';
    echo '<br>';
    var_dump($_SESSION);
    echo '<br>';
    echo '<br>';
    var_dump($_COOKIE);
    echo '<br>';
    echo '<br>';
    var_dump($_GET);
    echo '<br>';
    echo '<br>';
    var_dump($_POST);
    echo '<br>';
    echo '<br>';
    ?>
</body>
</html>