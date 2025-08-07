<?php
$cosas = [5, 'carlitos', false, 'c', 7.4];

$planetas = ["venus", "mercurio", "tierra", "jupiter",
             "Planeta 5", "Planeta 6", "Planeta 7", "Planeta 8", "Planeta 9"];

echo "<hr>";

echo $planetas[1] . "<br>";
echo $planetas[2] . "<br>";
echo "<hr>";

foreach($cosas as $cosa){
    echo $cosa;
    echo "<br>";
}
?>


