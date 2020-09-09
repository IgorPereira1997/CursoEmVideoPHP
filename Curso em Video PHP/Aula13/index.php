<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13 - POO</title>
    </head>
    <body><pre>
        <?php
            require_once 'Mamifero.php'; 
            require_once 'Lobo.php';
            require_once 'Cachorro.php';
            
            $c = new Cachorro();
            $c->emitirSom();
        ?>
    </pre></body>
</html>
