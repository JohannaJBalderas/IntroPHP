<?php
    function sumar_restar($num1, $num2){
        $resultado = array(
            'suma' => $num1 + $num2,
            'resta' => $num1 - $num2
        );
        return $resultado;
    }
    $resultado_de_suma_resta = sumar_restar (20, 7);
    echo 'La suma es: ' .$resultado_de_suma_resta ['suma'] . '<br />';
    echo 'La resta es: ' .$resultado_de_suma_resta ['resta'] . '<br />';
?>