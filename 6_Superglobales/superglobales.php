<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les SuperGlobales PHP</title>
</head>
<body>
<?php
/*Retourne les infos fournies par le serveur :
NB : implode("", XXX) sert à transformer un array en string*/
echo implode("",$_SERVER);
echo nl2br("\n");
//Retourne les infos GET (présentes dans l'URL):
echo implode("",$_GET);

?>

</body>
</html>