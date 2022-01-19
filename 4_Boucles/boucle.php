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
//--- Mes variables :
$a = 3;
$a++; // revient à $a = $a + 1;
echo $a;
echo "<br>";
// revient à :
$a = $a + 1;
echo $a;
echo "<br>";

$groupe = ['Jo' , 'Elo' , 'Sid' , 'Zélie', 'Tom', 'Sylvie'];



//--- boucles :
for ($a; $a <= 10; $a++) {
    echo $a . "<br>";
}
echo "<br>";

/* echo $a; */

echo "<br>";

for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
} 

echo "<br>";

foreach ($groupe as $individu) {
    echo $individu . "<br>";
}

echo "<br>";

while ($a <= 20) {
    echo 'A est inférieur à 20, il vaut' . $a . '<br />';
    $a++; // $lines = $lines + 1
}
?>
</body>
</html>