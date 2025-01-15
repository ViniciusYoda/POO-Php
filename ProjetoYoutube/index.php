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
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        print_r($v);
        print_r($g);

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[0]->avaliar();
        print_r($vis);

        $vis[1] = new Visualizacao($g[0], $v[1]);
        $vis[1]->avaliarNota(10);
        print_r($vis);

        $vis[2] = new Visualizacao($g[1], $v[0]);
        $vis[2]->avaliarPorc(85);
        print_r($vis);

        


        
    ?>
    </pre>
</body>
</html>