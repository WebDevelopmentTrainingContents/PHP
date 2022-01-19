<?php
setcookie('id', 'JoTestCookie'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST PHP</title>
</head>
<body>
    
<!-- Formulaire POST :
 -->        <form action="azzaro.php" method="POST">
                <input
                type="text"
                name="titre1"
                placeholder="titre1"
                value=""
                required
            />
            <input
                type="text"
                name="titre2"
                placeholder="titre2"
                value="titre 2 defaut"
            />
            <input
                type="text"
                name="titre3"
                placeholder="titre3"
                value="titre 3 defaut"
            />
            <input
                type="text"
                name="cookie"
                placeholder="titre3"
                value=""
            />
            <input
                type="submit"
                name="envoi"
             
            />
        </form>

</body>
</html>