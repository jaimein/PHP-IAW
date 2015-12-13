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
        
        $cant=0;
        if (isset($_REQUEST['basket'])){
            $cant++;
        }
        if (isset($_REQUEST['futbol'])){
            $cant++;
        }
        if (isset($_REQUEST['tenis'])){
            $cant++;
        }
        if (isset($_REQUEST['voley'])){
            $cant++;
        }
    echo "$nombre, practica este numero de deportes $cant";
            
        ?>
    </body>
</html>
