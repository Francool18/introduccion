<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $persona =[
            "nombre" => "Gonzalo",
            "apellido" => "García",
            "edad" => 18,
            "ciudad" => "Montevideo",
            "sexo" => "Masculino"
        ];
        echo "<p>";
        echo "Su nombre es <b>".$persona['nombre']."</b>, su apellido es <b>".$persona['apellido']."</b>, su edad es <b>".$persona['edad']."</b>, su ciudad es <b>".$persona['ciudad']."</b> y su sexo es <b>".$persona['sexo']."</b>.";
        echo "</p><br>";

        $persona["nombre"] = "Gonzalito";
        $persona["edad"] = 19;
        $persona["ciudad"] = "Salto";
        echo "<p>";
        echo "Su nombre es <b>".$persona['nombre']."</b>, su apellido es <b>".$persona['apellido']."</b>, su edad es <b>".$persona['edad']."</b>, su ciudad es <b>".$persona['ciudad']."</b> y su sexo es <b>".$persona['sexo']."</b>.";
        echo "</p><br>";
        
        $persona["auto"] = true;

        if($persona["auto"] == true) {
            echo "<p>";
            echo "Ahora si tiene auto.";
            echo "</p><br>";
        }else{
            echo "<p>";
            echo "Ahora no tiene auto.";
            echo "</p><br>";
        }

        $persona["auto"] = false;

        if($persona["auto"] == true) {
            echo "<p>";
            echo "Ahora si tiene auto.";
            echo "</p><br>";
        }else{
            echo "<p>";
            echo "Ahora no tiene auto.";
            echo "</p><br>";
        }
        $persona["vacaciones"]=true;
        var_dump($persona);
        ?>
</body>
</html>