<?php

function promediar($aNumeros){
    $suma = 0;
    foreach($aNumeros as $numero){
    $suma += $numero;
}
return $suma / count($aNumeros);
}

function maximo($aNumeros)
{
    $maximo=0;
    foreach ($aNumeros as $numero){
        if ($numero>$maximo) {
            $maximo=$numero;
        }
    }
    return $maximo;
}

$aNotas = array(8,4,5,5,9,10);
$aSueldo = array(800,400,500,300,900,100,900,1800);

echo "La nota maxima es: ". maximo($aNotas) . "<br>";

