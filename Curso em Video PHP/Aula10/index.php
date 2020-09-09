<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10 - POO</title>
    </head>
    <body><pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $p1 = new Pessoa("Pedro", 22, "M");
            $p2 = new Aluno("Maria", 31, "F");
            $p3 = new Funcionario("Claudio", 43, "M");
            $p4 = new Professor("Fabiana", 25, "F");
            
            $p2->setCurso("Informática");
            $p3->setSetor("Estoque");
            $p4->setSalario(2500.75);
            
            $p4->receberAum(550.20);
            $p3->mudarTrabalho("Secretário(a)");
            
            var_dump($p1);
            var_dump($p2);
            var_dump($p3);
            var_dump($p4);
            
        ?>
    </pre></body>
</html>
