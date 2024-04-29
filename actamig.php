<html>
<head></head>
<?php
$amigos=[
    'Juan',
    'Jose',
    'Luis',
    'Ana',
    'Fernanda',
    'Manolo',
];
$ciudad=[
    'Montevideo',
    'Maldonado',
    'Calelones',
    'Colonia',

];
//ver_dump($amigos);
echo '<br>';
print_r($amigos[1].' se va de viaje');
echo '<br>';
print_r($amigos[2].' se va a de vije a '.$ciudad[0]);
echo '<br>';
echo '<br>';
echo 'Extra:';
echo '<br>';
// barajo aca bajo para no modificar lo de arriba, ya que no se si tengo que modificar todo
shuffle($amigos);
shuffle($ciudad);
print_r($amigos[0].' se va de viaje');
echo '<br>';
print_r($amigos[1].' se va de viaje con '.$amigos[2].' a la bonita ciudad de '.$ciudad[0]);
// Francisco Montes de Oca
?>
</html>