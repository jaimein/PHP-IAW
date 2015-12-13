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
        <?php
        /*Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último
el do/while.*/
        echo "Primero con for";
        echo "<br/>";
        for ($f=2;$f<=20;$f=$f+2)
        {
            echo $f;
            echo "-";
        }
        echo "<hr/>";
        
        echo "Ahora con while";
        echo "<br/>";
        $fac="0";
        while ($fac <= 10)
        {
            $result=$fac*2;
            echo "$result";
            echo "-";
            $fac=$fac+1;
        }
        echo "<hr/>";
        
        echo "Ahora con do/while";
        echo "<br/>";
        
        $fa=0;
       do
       {
           $result=$fa*2;
           echo "$result";
           echo "-";
           $fa=$fa+1;
       } while ($fa<=10)
        
        ?>
    </body>
</html>
