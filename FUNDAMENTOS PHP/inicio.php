<?php
    /* */
    //
    #
    $saludo = "hola";
    $nombre = "euclides";
    
    echo $saludo." ".$nombre;
    print "<h1>hola yo soy </h1>";


    $nombre = $_GET[nombre];
    $apellido = $_GET[apellido];
    $telefono = $_GET[tel];
    
    if(is_numeric($nombre)){
        echo "elnombre no es correcto";
    }else{
        echo $nombre." ". $apellido. " ". $telefono;
    }

    

?>