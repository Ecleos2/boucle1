<?php
$var=15;
$newvar=0;

while ($var>$newvar) 
$newvar ++;
echo $newvar;
echo "<br>";

$var=15;
$newvar=0;

do {$newvar ++;
    echo $newvar;
    echo "<br>";
}while ($var>$newvar);

for ($newvar = 0; $newvar <= 15; $newvar++) {
    echo $newvar;
    echo "<br>";
}




$array =[
    "pomme",
    "poire",
    "banane"];

foreach($array as $index => $fruits){
    echo$fruits;
    echo "<br>";
}

