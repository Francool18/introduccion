<!DOCTYPE html>
<head></head>
<body>
    <?php
$palabra = 'abcdef';
echo $palabra;
echo '<br>';
$palabra[2] = 'z';
echo $palabra;
echo '<br>';
echo '<br>';

$lista="manzana,naranja,platano,fresa";
$frutas = explode(",",$lista);
print_r($frutas);
echo "<br>";
$frutas[1]="mandarina";
print_r($frutas);
?>


</body>
</html>