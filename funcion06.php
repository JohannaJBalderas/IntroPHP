
<html>
    <head>
        <title>Ejemplo calcular IVA</title>
    </head>
    <body>
        <?php
            function iva($base, $porcentaje=16){
                return $base * $porcentaje /100;
            }
            echo iva(1000) . "<br>";
            echo iva(1000, 3) . "<br>";
            echo iva(10, 2) . "<br>";
        ?>
    </body>
</html>
