<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <div class="boxform">
        <form>
            <?php
                $num = $_GET["numero"] ?? 0;//$_REQUEST interpreta tanto método GET quanto o método POST
                echo "<h2>Você digitou $num</h2><br><p>O antecessor de $num é ".($num-1)."<br> E o sucessor é ".($num+1).".</p>";
            ?>
        </form>
    </div>
</body>
</html>