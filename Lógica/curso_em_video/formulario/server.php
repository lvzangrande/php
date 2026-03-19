<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado forms</title>
</head>
<body>
    <h1>Bem Vindo</h1>    
    <main>
        <?php
            $cnpj = $_POST["CNPJ"] ?? "<b>empresa desconhecida</b>";    
            $senha = $_POST["senha"] ?? "<b>sem senha</b>";
            // ?? Operador para exibir determinada mensagem quando nenhum dado é retornado do formulário
            echo "o CNPJ da sua empresa é $cnpj e sua senha é $senha"
        ?>
    <main>
</body>
</html>
