<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Echo</title>
</head>
<body>

    <?php
    
        //String
        $nome = 'Roberto Carlos';
        
        //int
        $idade = 29;

        //Float
        $peso = 82.5;

        //boolean
        $fumante_sn = true; // true ou false

    ?>  

    <h1>Ficha Cadastral</h1>
    <br/>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Peso: <?= $peso ?> </p>
    <p>Fumante: <?= $fumante_sn ?> </p>

</body>
</html>