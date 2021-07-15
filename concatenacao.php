<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Echo</title>
</head>
<body>

    <?php

        $nome = 'Roberto';
        $cor = 'Preto';
        $idade = 29;
        $atividade_preferida = 'andar de bicicleta';

        //Operador

        echo 'Olá'  . $nome . ', vi que sua cor preferida é' .$cor. ', e tambem que você tem' .$idade. 'anos e que gosta de' .$atividade_preferida ;

        //aspas duplas

        echo '<br/>';
        
        echo "Olá $nome, vi que sua cor preferida é $cor e tambem que você tem $idade anos e que gosta de $atividade_preferida" ;
        
    
    ?>  

</body>
</html>