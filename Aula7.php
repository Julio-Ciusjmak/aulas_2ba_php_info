<?php 

echo("<br>");
echo("###################");
echo("<br>");

date_default_timezone_set('America/Sao_Paulo');
//Código hora, minuto e segundo
$y = date("H:i:s");
echo($y);

echo("<br>");
//Código para Dia, Mês, Ano, Hora, Minuto e Segundo
$y = date("d-m-Y H:i:s");
echo($y);

echo("<br>");
//Código para Dia(Semana), Mês(Escrito por extenço), Dia(Número), Hora, Minuto, Segundo, UTC e Ano
$y = date("D M j  G:i:s T Y");
echo($y);
?>