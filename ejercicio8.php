<?php
    if($_POST){

        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        //suma
        $suma=$valorA+$valorB;
        $resta=$valorA-$valorB;
        $division=$valorA/$valorB;
        $multiplicacion=$valorA*$valorB;

        echo $suma." ";
        echo $resta." ";
        echo $division." ";
        echo $multiplicacion;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        <div>
            <label for="valorA">
                valor A:
            </label>
            <input type="text" name="valorA" id="valorA">
        </div> 
        <div>
            <label for="valorB">
                valor B:
            </label>
            <input type="text" name="valorB" id="valorB">
        </div>   
        <input type="submit" name="Calcular" id="">
    </form>
</body>
</html>