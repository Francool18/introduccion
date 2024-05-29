<!DOCTYPE html>
<head>
    <link rel ="stylesheet" href="estilomicrocuento.css">
</head>
<body>
    <u><h1> Verificación del cuento </h1></u>
<?php 
$cuento="En un rincón olvidado de la ciudad, vive un anciano relojero cuya tienda es un museo de tiempo. 
Destaca un reloj especial que marca siempre las doce campanadas, considerado el reloj del destino. 
Una noche, una joven desesperada entra buscando dirección. El anciano le muestra el reloj del destino y ella, tras girar las manecillas, desaparece en una luz brillante. 
Al día siguiente, la ciudad despierta con la leyenda de la joven que encontró su destino en el tiempo, dejando al anciano relojero satisfecho con su obra.";
?>
<div id="cuento">
<?php
echo $cuento;
?>
</div>
<?php
echo "<br>";
echo "<br>";
$relato=explode(" ",$cuento);
$cantpal=count($relato);
$cantlet=strlen($cuento);
echo "el texto tiene ".$cantpal." palabras y ".$cantlet." caracteres";
echo "<br>";
?>
<?php if($cantpal<=100 && $cantlet<=700){ 
    echo '<p style ="color: green"> El cuento cumple con la condición</p>';
}else{
    echo '<p style="color: red">"No cumple con las condiciones"</p>';
}
?>
</body>
</html>