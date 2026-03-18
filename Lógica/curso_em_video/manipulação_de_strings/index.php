<?php
$nome = 'Lucas';
$sobrenome = 'Zangrande';

//var_dump($nome);

//Concatenando strings



//echo "Olá $nome ".$sobrenome.",tudo bem?"



//strings heredoc


echo <<< FRASE
    Olá $nome $sobrenome,
    Como você está?
    Já aprendeu php hoje?
    Bons estudos!
FRASE;

//strings nowdoc


echo <<< 'FRASE'
    Olá $nome $sobrenome,
    Como você está?
    Já aprendeu php hoje?
    Bons estudos!
FRASE;



?>