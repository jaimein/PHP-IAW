<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio1.2</title>
    </head>
    <body>
        <?php
        /*Sabiendo que la función rand devuelve un valor aleatorio entre un rango de dos
            enteros:
            $num=rand(1,100);
            En la variable $num se almacena un valor entero que la computadora genera en
            forma aleatoria entre 1 y 100.
            Hacer un programa que muestre por pantalla el valor generado. Mostrar además
            un texto que indique si es menor o igual a 50 o si es mayor.*/
        $num=rand(1,100);
        echo "$num ";
                if($num<=50)
                {
                echo "es menor de 50";
                }
                else
                {
                echo "es mayor de 50";
                }
                
        ?>
    </body>
</html>
