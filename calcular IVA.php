<?php

$iva=0;
$resPrecioConIva=0;
$resPrecioSinIva=0; 
$resIvaCantidad=0;

if($_POST){
    $iva = $_REQUEST["lstIva"];
    $precioSinIva = $_REQUEST["txtImporteSinIva"];
    $precioConIva = $_REQUEST["txtImporteConIva"];

if($precioSinIva>0 && $precioConIva == ""){
    $resPrecioConIva = $precioSinIva *($iva/100+1); 
    $resPrecioSinIva = $precioSinIva;
    $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
}
if ($precioConIva>0 && $precioSinIva==""){
    $resPrecioSinIva = $precioConIva/ ($iva/100+1);
    $resPrecioConIva = $precioConIva;
    $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
}
    if($precioSinIva != "" && $precioConIva != ""){
        $precioSinIva = 0; 
        $precioConIva = 0;
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1> Calculador de IVA</H1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2">
                <form action="" method="POST">
                    <div>
                        <LABel for="">IVA</LABel>
                        <SELEct name="lstIva" id="" class="form-control">
                            <option value="21">21</option>
                            <option value="10.5">10.5</option>
                        </SELEct>
                    </div>
                    <div class="my-3">
                        <label for="">Precio sin IVA
                            <input type="text" name="txtImporteSinIva" id="txtImporteSinIva" class="form-control">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="">Precio con IVA
                            <input type="text" name="txtImporteConIva" id="txtImporteConIva" class="form-control">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for=""> IVA cantidad:
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary"> CALCULAR</button>
                    </div>
                </form>
            </div>
            <div class="col-6 my-3">
                <table class="table table-hover border">
                    <tr>
                    <tr>
                        <th>IVA</th>
                        <td><?php echo $iva; ?></td>
                    </tr>
                    <tr>
                        <th> Precio sin IVA</th>
                        <td><?PHP echo $resPrecioSinIva;?></td>
                    </tr>
                    <tr>
                        <th> Precio con IVA</th>
                        <td><?php echo $resPrecioConIva;?></td>
                    </tr>
                    <tr>
                        <th>IVA cantida</th>
                        <td><?php echo $resIvaCantidad?></td>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>