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
        <!--
        Definir un vector “productos” con tres elementos (azucar, aceite y arroz) y
mostrar todos sus elmentos, primero usando “for” y despues “foreach”
        -->
        <?php
        
        //Defino las varibles
        $productos[0]="Azúcar";
        $productos[1]="Aceite";
        $productos[2]="Arroz";
        
        //Creamos un buccle para que recorra todo el array
        for($i=0;$i<3;$i++){
            print $productos[$i]."<br>";
        }
        print "<ul>";
        
        foreach ($productos as $producto) {
            print "<li>".$producto."</li>";
        }
        print "<ul>";
        ?>
    </body>
</html>
