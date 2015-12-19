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
        <!-- Crear un vector asociativo que almacene las claves de acceso de 5 usuarios de un
sistema. Cada elemento debe ser accesible por el nombre de usuario. Imprimir el
primero y el último elemento del vector (accediendo por el nombre)-->
        <?php
        // Definicion de las variables
        $password['elias']="qwe123";
        $password['pepe']="asdzxc";
        $password['jose']="qweasd";
        $password['javi']="zxcqwe";
        $password['luis']="123qwe";
        
        // Ahora mostamos el primero y el ultimo
        echo "La clave de elias es: ".$password['elias'];
        echo "<br>";
        echo "La clave de luis es: ".$password['luis'];
        ?>
    </body>
</html>
