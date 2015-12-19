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
        <!-- Escribe un programa en PHP que declare dos variables de tipo string, una con tu
nombre y otra con tu lugar de nacimiento. El programa debe imprimirlas en dos
párrafos distintos usando negrita para los valores de las variables, por ejemplo:
        Mi nombre es: Luis
        Naci en: Valencia-->
        <?php
        // Definicion de las variables
        $nombre="Jaime";
        $poblacion="Valencia";
        
        // Ahora lo mostramos
        echo "Mi nombre es: <strong>".$nombre."</strong>";
        echo "<br>";
        echo "Naci en: <strong>".$poblacion."</strong>";
        ?>
    </body>
</html>
