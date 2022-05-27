<?php
    echo "desde index <br>";
    // declarar arreglos 
    #1
    $frutas = array("mango", "sandia","fresa");
    #2
    $verduras = array("tomate", "cebolla","sandia");

    array_push($frutas,"mora","zapote","piña"); //esto me indica que voy a agrgar mas elementos al arreglo de futas y de ñame 
    array_push($verduras,"papa","ñame","yuca");
    

    echo $frutas[2]. "". $verduras[4];//de esta menera imprimimos manual mente 

    //forma de imprimir el arreglo recorriendolo
// for($i = 0; $i < count($frutas); $i++){
//     echo $i ."". $frutas[$i]."<br>";

    #arreglos asociativos
    $productos = [
        "arroz" => "roa",
        "acerte" => "primier",
        "arepa" => "doña pepita",
    ];
  
    #recorrer los arreglos asociativos 
    foreach($productos as $marca ){
        echo "marcas : ". $marca . "<br>";
        
    }
    //metodo get
    $nombre = $_GET[nombre];
    $apellido = $_GET[apellido];
    $telefono = $_GET[tel];

    echo $nombre." ". $apellido. " ". $telefono



?>