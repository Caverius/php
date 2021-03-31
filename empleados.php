<?php

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" =>70000);

function calcularNeto($bruto){return $bruto - ($bruto*0.17);}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
        <div class="col-12">
            <table class="table border">
                <tr>
                    <th>DNI</th>
                    <th>Nombre y Apellido</th>
                    <th>bruto</th>

                </tr>
<?php 
               foreach ($aEmpleados as $empleado) { ?>
                    <tr>
                        <td><?php echo $empleado ["dni"]; ?></td>
                        <td> <?php echo $empleado["nombre"]; ?></td>
                        <td> <?php echo $empleado["bruto"]; ?></td>
                    </tr>
                <?php
                
                } ?>

</body>
</html>



