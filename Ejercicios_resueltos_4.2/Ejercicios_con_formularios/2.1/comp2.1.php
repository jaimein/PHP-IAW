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
        // put your code here
            
        $nombre=$_POST['nombre'];
        $edad=$_POST['edad'];
        
        echo "$nombre ";
                if($edad<18)
                {
                echo "es menor de edad";
                }
                else
                {
                echo "es mayor de edad";
                }
        ?>
    </body>
</html>
