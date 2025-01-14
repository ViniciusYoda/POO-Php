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
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $m = new Mamifero();

        $m->setPeso(85.3);
        $m->setIdade(2);

        print_r($m);

        $m->emitirSom();

        $l = new Lobo();

        $l->emitirSom();

        $c = new Cachorro();

        $c->emitirSom();

        $c->reagirFrase("Olá");
        $c->reagirFrase("Vai apanhar");

        $c->reagirHora(11, 45);
        $c->reagirHora(21, 00);

        $c->reagirDono(true);
        $c->reagirDono(false);

        $c->reagirIdadePeso(2, 12.5);
        
    ?>
    </pre>
</body>
</html>