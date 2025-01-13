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
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        
        $a1 = new Aluno("Pedro", 1111, 16, "M", "Informática");
        $a1->pagarMensalidade();
        print_r($a1);

        $b1 = new Bolsista("Jubileu", 2222, 17, "M", "Administração");
        $b1->pagarMensalidade();
        print_r($b1);

        
        
    ?>
    </pre>
</body>
</html>