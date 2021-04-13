<?php

if  (file_exists("archivo.txt")) {
$jsonClientes = file_get_contents("archivo.txt");
$aClientes= json_decode($jsonClientes, true);
print_r($aClientes);
} else {
    $aClientes= array();
    
}

if ($_POST) {
    $DNI = $_POST["txtDNI"];
    $Nombre = $_POST["txtNombre"];
    $Telefono = $_POST["txtTelefono"];
    $Correo = $_POST["txtCorreo"];

    } else {
     echo "";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12"> Formulario</div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="" enctype="multipart/form-data">
                    DNI: *<input type="text" name="txtDNI" id="txtDNI" placeholder="DNI"> <br>
                   Nombre: *<input type="text" id="txtNombre" name="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["nombre"] : "" ?>
"><br>
                   Telefono:<input type="text" name="txtTelefono" id="txtTelefono" placeholder=""> <br>
                   Correo: *<input type="text" name="txtCorreo" id="txtCorreo" placeholder=""><br>
                   Adjuntar archivo: <input type="file" name="archivo"><br>
                    <button type="submit" color="blue">Enviar</button>
                </form>
            </div>

            <table class="table table-hover border">
            
            <tr>
            <th>imagen</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
            </tr>
            <?php
            foreach ($aClientes as $cliente): ?>
             <tr>
             <td></td>
             <td><?php echo $cliente ["DNI"]; ?></td>
             <td><?php echo $cliente ["Nombre"]; ?></td>
             <td><?php echo $cliente ["Telefono"]; ?></td>
             <td><?php echo $cliente ["Correo"]; ?></td></tr>
            </table>
</body>

</html>
$id = isset($_GET["id"]) && $_GET["id"] > 0? $_GET["id"] : "";
<input type="text" id="txtNombre" name="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["nombre"] : "" ?>
">
