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

        if($valorA==$valorB){

            echo " El valor de A es igual que el valor de B ";

            if($valorA==4){
                
                echo " El valor es 4 ";

            }
            if($valorA==5){

                echo " El valor es 5";
            }
        }
        if(($valorA==$valorB) && ($valorA==4)){

            echo " El valor de A es igual a B y es un numero 4 ";
        }
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
    <form action="ejercicio11.php" method="post">
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