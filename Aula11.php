<?php 
$carro = array("Marca" => "Ford", "Modelo" => "Mustang", "Ano" => 1994);
var_dump($carro);

echo("<br>");
echo("#############################");
echo("<br>");

echo $carro["Marca"] . "<br>";
echo $carro["Modelo"] . "<br>";
echo $carro["Ano"] . "<br>";

echo("#############################");
echo("<br>");

foreach ($carro as $x => $y){
    echo "$x: $y <br>";
};

?>