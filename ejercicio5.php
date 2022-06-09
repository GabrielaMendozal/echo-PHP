<?php 
    if($_POST){
        $txtNombre=$_POST['txtNombre'];
        $txtApellido=$_POST['txtApellido'];
        echo "Hola ".$txtNombre." ".$txtApellido;    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        <div>
            <label for="nombre">
                Nombre:
            </label>    
            <input type="text" name="txtNombre" id="nombre">
        </div>
        <div>
            <label for="apellido">
                Apellido:
            </label>
            <input type="text" name="txtApellido" id="apellido">
            <input type="submit" value="Enviar">
        </div>
        
    </form>
</body>
</html>