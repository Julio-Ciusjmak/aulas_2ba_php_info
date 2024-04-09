<?php
/*
(For) é um laço de repetição, onde ele só para qunado o valor definido
($x = 0;) for igual ao valor maximo definido ($x <=10;), e definimos
Como a variável vai mudar ($x--) ou ($x++)
*/
for ($x = 0; $x <=10; $x++){
    echo("O número é: $x <br>");
}
echo("<br>");
echo("#############################");
echo("<br>");
/*
Comando (Break;) faz uma quebra quando uma condição é ativada, parando
o código.
Comando (if) coloca uma condição para algo, como no exemplo, se ($x == 3),
o comando break é ativado
*/
for ($x = 0;  $x <= 10; $x++){
    if ($x == 3)
    break;
echo("O número é: $x <br>");
}
echo("<br>");
echo("#############################");
echo("<br>");
/*
O Comando (Continue;) faz o contrario de (Break;), ele continua o código quando
a condição é ativada
*/
for ($x = 0;  $x <= 10; $x++){
    if ($x == 3) continue;
echo("O número é: $x <br>");
}
echo("<br>");
echo("#############################");
echo("<br>");
/*
(While) é um comando que continua o código enquanto a condição não é ativada.
*/
$i = 0;
while ($i < 6){
    echo ("O número é: $i <br>");
    $i++;
}
echo("<br>");
echo("#############################");
echo("<br>");
$z = 0;
while ($z <= 10){
    if ($z % 2 == 1){
        echo("O número $z é impar <br>");
    }
    else{
        echo("O número $z é par <br>");
    }
    $z++;
}
?>