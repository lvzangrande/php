<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos PHP</title>
</head>
<body>
    <h1>Testando tipos primitivos do PHP</h1>/
    
    <?php
    
    //Toda variavel que inicia com os valores abaixo e respectivamente interpretada como:
    // 0x = Hexadecimal(int), 0b = Bool, 0 = Octal

    //$x = "Zangrande";
    //$x = 3e2; // 3 x 10(2) = 300, FLOAT sempre quando se usa potencia da forma demonstrada
    $x = (int)//(intenger)
    3e2;
    // COERSÃO transforma a potencia float em int
    
    var_dump();//mostra caracteristicas de uma váriavel
    
    //$ligado = false; false = vazio
    $ligado = true;
    echo "A lampada está acessa?<br>$ligado"
    ?>

</body>
</html>