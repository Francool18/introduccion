<html>
    <head></head>
    <body>
        <!--
    <ul>
        <li> hola </li>
        <li>como </li>
        <li> estas?</li>
</ul>
    -->
    <?php
        $agenda= ["Dentista a las 12h", "Dentista a las 15h" , "Dentista a las 08h" , "Dentista a las 18h"];

        $agenda[0]="Dentista a las 16h";
        ?>
        <ul>
        <?php
        foreach($agenda as $hora){
            echo "<li>$hora</li>";
        }
    ?>
    </ul>
    </body>
</html>