<?php 

$getal1 = rand(1, 100);
$getal2 = rand(1, 100);

echo $getal1 . " * " . $getal2 . " = " . ($getal1 * $getal2) . "<br>" ; 

tafel(6);   

function tafel($getal3) {
    for ($i=1; $i <= 10; $i++) {
        echo "<br>" .  $i * $getal3;
    }
    echo "<br>";
}

$tafels = [3, 5, 8, 12];

foreach($tafels as $value) {
    for ($i=1; $i <= 10; $i++) {
        echo "<br>" .  $i * $value;
    }
     echo "<br>";
}
?>