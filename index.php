
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
                    DNI:<input type="text" name="txtDNI" id="txtDNI" placeholder="DNI"> <br>
                   Nombre:<input type="text" name="txtNombre" id="txtNombre" placeholder="Usuario"><br>
                   Telefono:<input type="text" name="txtTelefono" id="txtTelefono" placeholder=""> <br>
                   Correo:<input type="text" name="txtCorreo" id="txtCorreo" placeholder=""><br>
                   Adjuntar archivo: <input type="file" name="archivo"><br>
                    <button type="submit" color="blue">Enviar</button>
                </form>
            </div>
</body>

</html>