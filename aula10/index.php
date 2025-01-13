<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Pessoa("Pedro", 22, "M");
        $p2 = new Aluno("Maria", 31, "F", 1234, "Informática");
        $p3 = new Professor("Cláudio", 45, "M", "Matemática", 2500);
        $p4 = new Funcionario("Fabiana", 39, "F", "Recepção", true);

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

        $p2->pagarMensalidade();

        $p3->receberAumento(500);

        $p4->mudarTrabalho();

        print_r($p2);

        print_r($p3);

        print_r($p4);

        $p1->fazerAniversario();

        $p2->cancelarMatricula();
        
    ?>
    </pre>
</body>
</html>