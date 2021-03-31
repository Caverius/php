<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
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
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <?php ?>
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
                    <?php $subtotal = 0;
                    for ($contador = 0; $contador < count($aProductos); $contador++) { ?>
                        <tr>
                            <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                            <td> <?php echo $aProductos[$contador]["marca"]; ?></td>
                            <td> <?php echo $aProductos[$contador]["modelo"]; ?></td>
                            <td><?php echo $aProductos[$contador]["stock"] == 0 ? "No hay stock" : ($aProductos[2]["stock"] > 10 ? "Hay stock" : "Poco stock"); ?></td>
                            <td> <?php echo $aProductos[$contador]["precio"]; ?></td>
                        </tr>
                    <?php
                        $subtotal += $aProductos[$contador]["precio"];
                    } ?>
                </table>
                <h2>el subtotal es <?php echo $subtotal; ?> </h2>
            </div>
        </div>
</body>

</html>