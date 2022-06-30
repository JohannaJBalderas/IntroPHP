<?php
    #Variable numérica
    $numero=5;
    echo "Esto es una variable número: $numero <br>" ;
    var_dump($numero); //Método var_dump()
    echo "<br><br>";

    #Variable texto
    $palabra = "palabra";
    echo "Esto es una variable de texto: $palabra <br>" ;
    var_dump($palabra); //Método var_dump()
    echo "<br><br>";
    
    #Variable de tipo Boleana
    $boleana = true;
    echo "Esto es una variable boleana: $boleana <br>" ;
    var_dump($boleana); //Método var_dump()
    echo "<br><br>";

    #Variable de tipo Arreglo
    $colores = array ("rojo", "verde");
    echo "Esto es una variable de tipo Arreglo: $colores[1] <br>";
    var_dump($colores); //Método var_dump()
    echo "<br><br>";

    #Variable Arreglo con Propiedades
    $verduras = array ("verdura1"=>"lechuga","verdura2"=>"cebolla","verdura3"=>"jitomate");
    echo "Esto es una variable de Arreglo con Propiedades: $verduras[verdura3], $verduras[verdura2] <br>";
    var_dump($verduras); //Método var_dump()
    echo "<br><br>";
    
    echo "Esto es una variable de Arreglo con Propiedades: $verduras[verdura2]";
    echo "<br><br>";

    #Variable Objeto
    $frutas = (object) ["fruta1"=>"pera","fruta2"=>"manzana","fruta3"=>"sandia"];
    echo "Esto es una variable de Objeto: $frutas->fruta2 <br>";
    var_dump($frutas); //Método var_dump()
    echo "<br><br>";


?>