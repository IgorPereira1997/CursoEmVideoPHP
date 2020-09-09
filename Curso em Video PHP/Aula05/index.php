<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 05 - POO</title>
    </head>
    <pre>
    <body>
        <div>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco(); //Jumentino
            $p2 = new ContaBanco(); //Astorgina
            $p1->abrirConta("CC");
            $p1->setNumConta(1111);
            $p1->setDono("Jumentino");
            $p2->abrirConta("CP");
            $p2->setNumConta(2222);
            $p2->setDono("Astorgina");
            
            $p1->depositar(300);
            $p2->depositar(500);
            
            $p2->sacar(100);
            
            $p1->pagarMensal();
            $p2->pagarMensal();
            
            $p1->sacar(338);
            $p2->sacar(530);
            
            $p1->fecharConta();
            $p2->fecharConta();
            
            print_r($p1);
            echo "<br/>";
            print_r($p2);
        ?>
        </div>
    </body>
    </pre>
</html>
