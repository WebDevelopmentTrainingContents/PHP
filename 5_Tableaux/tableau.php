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
$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
/* echo $mickael[0]; */
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];


//-----------------

$users = [$mickael, $mathieu, $laurene];

$communaute = ["test" , $users , "test2"];

$monde = ["testMonde" , "testMonde2" , $communaute];
/* var_dump($users); */

echo $monde[2][1][1][2]; // "mathieu.nebra@exemple.com"
?>
</body>
</html>