<?php

$aPacientes[] = array(
    "DNI" => "33.765.012",
    "Nombre y apellido" => "Hitachi",
    "edad" => 45,
    "peso" => 59,
);
$aPacientes[] = array(
    "DNI" => "33.765.012",
    "Nombre y apellido" => "Hitachi",
    "edad" => 45,
    "peso" => 60,
);
$aPacientes[] = array(
    "DNI" => "33.765.012",
    "Nombre y apellido" => "Hitachi",
    "edad" => 45,
    "peso" => 63,
);

$aPacientes[] = array(
    "DNI" => "33.765.012",
    "Nombre y apellido" => "Hitachi",
    "edad" => 45,
    "peso" => 59,
);
$aPacientes[] = array(
    "DNI" => "33.765.012",
    "Nombre y apellido" => "Hitachi",
    "edad" => 45,
    "peso" => 60,
);
$aPacientes[] = array(
    "DNI" => "33.765.012",
    "Nombre y apellido" => "Hitachi",
    "edad" => 45,
    "peso" => 63,
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>listado de productos</title>
</head>

<body>
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <h1 text-align="center"> Listado de Pacientess</h1>
            </div>
        </div>
      
    <div class="row">
        <div class="col-12">
            <table class="table border">
                <tr>
                    <th>DNI</th>
                    <th>Nombre y Apellido</th>
                    <th>Edad</th>
                    <th>Peso</th>
                    <th>Dieta</th>
                </tr>
                <?php $contador = 0;
                while ($contador < 3) { ?>
                    <tr>
                        <td><?php echo $aPacientes[$contador]["DNI"]; ?></td>
                        <td> <?php echo $aPacientes[$contador]["Nombre y apellido"]; ?></td>
                        <td> <?php echo $aPacientes[$contador]["edad"]; ?></td>
                        <td> <?php echo $aPacientes[$contador]["peso"]; ?></td>
                        <td><?php echo $aPacientes[$contador]["peso"] ==60 ? "No " : ($aPacientes[$contador]["peso"] > 60? "si" : "recomendable"); ?></td>
                    </tr>
                <?php
                    $contador++;
                } ?>

    <?php

    foreach ($aPacientes as $paciente){echo "peso";}?>
<?php
$aDocumento=[35,40,60];
foreach($aDocumento as $documento){echo "$documento<br>";}?>
</body>

</html>