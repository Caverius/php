<?php
function calcularAreaRect($base,$altura)
{ return $base * $altura; }

echo "El area es". calcularAreaRect(800,300)."<br>";
?>
<?php
function calcularNeto($bruto){return $bruto - ($bruto*0.17);}

echo "El sueldo neto es". calcularNeto(50000). "<br>" ;
echo "me pagan". calcularNeto(40000). "<br>"?>

<?php $aNotas= array(9,8,9.50,4,7,8);
$aEmpleados= array();
function contar($aArray){
    $cont =0 ;
    foreach($aArray as $item){
        $cont++;
    }
    return $cont;
}

echo "cantidad de notas". contar($aNotas);
