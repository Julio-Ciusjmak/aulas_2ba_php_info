<?php
//Váriavel
$numero = 3;
//Código Se/Senão
if ($numero = 2){
echo("É verdadeiro");
}
else{
    echo("É falso");
}

echo("<br>");
echo("#############################");
echo("<br>");
//Definindo Hora
$z= date('H - 3');
echo("$z");
echo("<br>");
//Código Se/Senão/SenãoSe com Hora
if($z < "13"){
echo("Boa tarde");
}elseif($z < "8"){
echo("Bom dia");
}elseif($z < "18" ){
echo("boa noite");
}
?>
