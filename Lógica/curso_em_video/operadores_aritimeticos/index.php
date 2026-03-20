<?php

//+ adição
//. concatenação

$r = "2" + "2";
var_dump($r);//resultado = 4 inteiro, devido ao sinal "+" as strings "2" foram convertidas para int

/*
    + Adição
    - Subtração
    * Multiplicação
    ** Exponenciaçâo
    / Divisão
    % Módulo (Resto de divisão)
*/

//Aula expressões aritméticas

$test = 2**(3+4)-11;
echo $test;

//Aula funções aritméticas

$a = abs(-2000);//retorna o valor absoluto sem o sinal aritimético(2000)
echo "$a<br>";


$b = base_convert(965,10,16);//retorna o valor em outra base(binário(2),octal(8),decimal(10) e hexadecimal(16))
echo "$b<br>";

#Funções arredondamento

$c = ceil(4.6);//retorna o arredondamento para cima
echo "$c<br>";

$d = floor(4.6);//retorna o arredondamento para baixo
echo "$d<br>";

$e = round(4.6);//retorna o arredondamento para o valor mais próximo
echo "$e<br>";

#Funções de cálculo

$f = intdiv(5,2);//retorna o calculo da divisão inteira
echo "$f<br>";

$g = hypot(2,5);//retorna o calculo de hipotenusa
echo "$g<br>";

$h = pi();//ou M_PI retorna o valor de pi
$h2 = M_PI;
echo "$h e $h2<br>";

$i = pow(2,3);//retorna o cálculo da potência entre os dois parâmetros ignorando a ordem de precedência
echo "$i<br>";

$j = sqrt(81);// retorna a raiz quadrada
$j2 = 81**(1/2);//raiz quadrada sem função 'sqrt'

echo "$j e $j2<br>";

#Valor minímo e máximo

$k = min(1000,1621,6780,0);//retorna o valor minímo de uma sequência de números
echo "$k<br>";

$l = max(1000,1621,6780,0);//retorna o valor máximo de uma sequência de números
echo "$l<br>";
?>