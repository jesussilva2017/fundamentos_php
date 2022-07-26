<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> DECLARACION DE VARIABLES Y TIPOS DE DATOS EN PHP</h2>
    <?php
            //Ejemplo de declaracion de variables
            $nombre="Jesus"; //variables tipo texto
            $apellido="Silva"; // variables tipo texto
            $edad=32; // variable tipo numericas

            echo " El señor ".$nombre." ".$apellido." Tiene la edad de ".$edad." años.";
    ?>

    <h2> ESTRUCTURAS DE CONTROL</h2>

    <p>Ejemplo: se solicita la edad para determinar si es mayor de edad o menor</p>

    <?php
            $edad2=18;

            if($edad2>=18){
                echo "La persona es mayor de edad con ".$edad2." años.";
            }else{
                echo "La persona es menor de edad con ".$edad2." años.";
            }
    ?>


</body>
</html>