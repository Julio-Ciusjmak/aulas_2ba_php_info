<?php
echo("<br>");
echo("#############################");
echo("<br>");

$colors = array("red","green","blue","yellow","1","2","A","B");
foreach ($colors as $x){
    echo ("$x <br>");
};

echo("<br>");
echo("#############################");
echo("<br>");

$membros = array("Peter" => "35", "Ben" => "37", "Joe" => "43",);

foreach ($membros as $x => $y){
    echo ("$x : $y <br>");
};

echo("<br>");
echo("#############################");
echo("<br>");

$colors = array("red","green","blue","yellow");

foreach ($colors as $x){
    if ($x == "blue");
    continue;
    echo ("$x <br>");
}
echo("<br>");
echo("#############################");
echo("<br>");
?>