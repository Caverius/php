<?php
$stock= 800;


if ($stock>0){
echo "Hay STOCK";
}
else {
echo "No hay Stock";
}
?>
 <?php
 $valor= rand(1,5);

 if($valor== 1 ||$valor==3 || $valor==5)
  {echo "El numero $valor es impar";}
 else { echo "el numero $valor es par";}


?>
