<?php
    function sumar($num1, $num2, $num3){
        $resultado = $num1 + $num2 + $num3;
        $resultado1 = $num1 - $num2;
        $resultado2 = $num1 * $num2 * $num3;
        $resultado3 = $num1 / $num2;
        echo "El resultado de la suma es: $resultado";
        echo "<br>";
        echo "El resultado de la resta es: $resultado1";
        echo "<br>";
        echo "El resultado de la multiplicación es: $resultado2";
        echo "<br>";
        echo "El resultado de la división es: $resultado3";
        echo "<br>";
    }
    sumar(20,7,2);
?>

