<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Definir un vector con los nombres de los días de la semana. Luego imprimir el
primero y el último elemento del vector-->
        <?php
        // Definicion de las variables
        $dias[1]="Lunes";
        $dias[2]="Martes";
        $dias[3]="Miercoles";
        $dias[4]="Jueves";
        $dias[5]="Viernes";
        $dias[6]="Sabado";
        $dias[7]="Domingo";
        
        // Mostramos el primer dia y el ultimo
        echo "El primer dia de la semana es: $dias[1]";
        echo "<br>";
        echo "El ultimo dia de la semana es: $dias[7]";
        ?>
    </body>
</html>
