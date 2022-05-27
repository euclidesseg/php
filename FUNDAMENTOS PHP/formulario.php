<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulario de envio</h1>
    <form method="get">
        <input type="text" name="nombre" placeholder="escriba su nombre"><br>
        <input type="text" name="apellido" placeholder="escriba su apellido"><br>
        <input type="number" name="tel" placeholder="escriba su telefono"><br>
        <button type="submit">enviar datos</button>
       
    </form>
    <?php
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $telefono = $_GET["tel"];
    
    if(is_numeric($nombre)){
        echo "elnombre no es correcto";
    }else{
        echo $nombre." ". $apellido. " ". $telefono;
    }
    ?>
    
</body>
</html>