<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio1.5</title>
    </head>
    <body>
        <?php
        /*Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número
            (Ej. si se genera el 3 luego mostrar en la página el string "tres").
            AYUDA: Para ver si una variable es igual a cierto valor debemos plantear una
            condición similar a:
            if ($valor==3) {
             // instrucciones
            }*/
        $valor=  rand(1, 3);
        if ($valor==3)
                {
                    echo "tres";
                }
            elseif ($valor==2) 
                {
                    echo "dos";
                }
                else {
                    echo "uno";
                }
                

        ?>
    </body>
</html>
