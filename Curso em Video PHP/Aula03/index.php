<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - POO</title>
    </head>
    <pre>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";
            
            $c1->rabiscar();
            $c1->tampar();
            
            var_dump($c1);
            
        ?>
    </body>
    </pre>
</html>
