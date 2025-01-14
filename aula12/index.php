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
        require_once 'Mamifero.php';
        require_once 'Peixe.php';
        require_once 'Reptil.php';
        require_once 'Ave.php';

        $m = new Mamifero();
        $p = new Peixe();
        $r = new Reptil();
        $a = new Ave();

        $m->setPeso(85.3);
        $m->setIdade(2);

        $m->setMembros(4);
        $m->locomover();
        $m->alimentar();

        print_r($m);

        $p->setPeso(0.35);
        $p->setIdade(1);

        $p->setMembros(0);
        $p->locomover();

        print_r($p);
    ?>
    </pre>
</body>
</html>