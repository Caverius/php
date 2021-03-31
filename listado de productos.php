<?php

$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000
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
                <h1 text-align="center"> Listado de Productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border">
                    <tr>
                        <th>nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[0]["nombre"]; ?></td>
                        <td> <?php echo $aProductos[0]["marca"]; ?></td>
                        <td> <?php echo $aProductos[0]["modelo"]; ?></td>
                        <td> <?php echo $aProductos[0]["stock"] > 10 ? "Hay Stock" : ( $aProductos[0]["stock"] == 0 ? "Poco Stock" : "Sin Stock"); ?></td>
                        <td> <?php echo $aProductos[0]["precio"]; ?></td>
                    </tr>
                    <tr>
                       <td> <?php echo $aProductos[1]["nombre"]; ?></td>
                        <td> <?php echo $aProductos[1]["marca"]; ?></td>
                        <td> <?php echo $aProductos[1]["modelo"]; ?></td>
                        <td> <?php echo $aProductos[1]["stock"] > 10 ? "Hay Stock" : ($aProductos[1]["stock"] <= 10 || $aProductos[1]["stock"] == 0 ? "Poco Stock" : "Sin Stock"); ?></td>
                        <td> <?php echo $aProductos[1]["precio"]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[2]["nombre"]; ?></td>
                        <td> <?php echo $aProductos[2]["marca"]; ?></td>
                        <td> <?php echo $aProductos[2]["modelo"]; ?></td>
                        <td> <?php echo $aProductos[2]["stock"] > 10 ? "Hay Stock" : ($aProductos[2]["stock"] <= 10 || $aProductos[2]["stock"] == 0 ? "Poco Stock" : "Sin Stock"); ?></td>
                        <td> <?php echo $aProductos[2]["precio"]; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-12">
                <table class="table border">
                    <tr>
                        <th>nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                    </tr>
                    <?php $contador=0;
                    while($contador<3){?>
                    <tr>
                        <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                        <td> <?php echo $aProductos[$contador]["marca"]; ?></td>
                        <td> <?php echo $aProductos[$contador]["modelo"]; ?></td>
                        <td><?php echo $aProductos[$contador]["stock"] == 0? "No hay stock" : ($aProductos[$contador]["stock"] > 10? "Hay stock" : "Poco stock"); ?></td>
                        <td> <?php echo $aProductos[$contador]["precio"]; ?></td>
                    </tr>
                    <?php
$contador++;
                }?>

</body>

</html>