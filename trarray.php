<html>
<head></head>

<?php
$semana=[
    'Lunes',
    'Martes',
    'Miercoles',
    'Jueves',
    'Viernes',
    'Sabado',
    'Domingo'
];
var_dump($semana);
//print_r
echo "<br>";
echo $semana[0];
echo "<br>";
echo $semana[5];
echo "<br>";
echo "<br>";
echo "<br>";

$planeta=[];
//añado variables
$planeta[] = 'Marte';
$planeta[] = 'Tierra';
$planeta[] = 'Venus';
var_dump($planeta);
echo "<br>";
//muestra la cantidad de variables
echo count($planeta);
echo "<br>";
echo count($semana);
echo "<br>";
echo "<br>";

foreach ($semana as $dia){ //dia es nueva
    echo $dia . "<br>";
}



?>
</body>
</html>