<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set(' error_reporting',E_ALL);  

if (file_exists ("archivo.txt") ) {
    $jsonClientes= file_get_contents("archivo.txt");
    $aClientes= json_decode($jsonClientes, true);
} else {
    $aClientes=array();
}

if($_POST){
    $dni = $_POST["txtDni"];
    $nombre = $_POST["txtNombre"];
    $telefono =$_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];

    $aClientes[] = array (
        "dni" => $dni,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "correo" => $correo, 
    );

    $jsonClientes = json_encode($aClientes);
    file_put_contents ("archivo.txt",$jsonClientes);
    

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
DNI:<input type="text" name="txtDni" id="txtDni">
Nombre:<input type="text" name="txtNombre" id="txtNombre">
Telefono:<input type="text" name="txtTelefono" id="txtTelefono">
Telefono:<input type="text" name="txtCorreo" id="txtCorreo">
Archivo adjunto:<input type="file" name="archivo1" id="archivo1" accept=".jpg,.jpeg,.png">
<button type="submit">Enviar</button>
</form>


</body>
</html>
