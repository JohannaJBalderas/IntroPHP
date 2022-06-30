<?php
#Funciones con retorno
    function setearVariable(){
        global $nombre;
        global $ciudad;
        $nombre = "Omar Ordoñez Toledo";
        $ciudad = "Morelia";
    }
    setearVariable();
    echo $nombre;
    echo "<br>";
    echo $ciudad
?>