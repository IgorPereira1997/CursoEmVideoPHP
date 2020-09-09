<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - POO</title>
    </head>
    <pre>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("Bic", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Verde", 1.0);
            print_r($c1);
            echo "<br/>";
            print_r($c2);
            //echo "I have a pen {$c1->getModelo()} with a tip of {$c1->getPonta()}";
            
        ?>
    </body>
    </pre>
</html>
