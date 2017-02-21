<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta cAula02 POOharset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        // put your code here
        require_once 'caneta.php';
        $c1 = new Caneta();
        $c1 ->modelo = "BIC CRISTAL";
        $c1 ->cor = "Azul";
        print_r($c1);
        
       
        
        //print_r($c1);
        ?>
</pre>
    </body>
</html>
