<?php
$hr= date("H");
$min= date("i");

for ($i=0; $i < 60; $i++) { 
    echo "La hora es $hr:$min <br>";
    $min++;
    if($min == 60){
        $min = 0;
        $hr++;
    }
    if($hr == 24){
        $hr=0;
    }
}
echo "La hora es $hr:$min <br>";
