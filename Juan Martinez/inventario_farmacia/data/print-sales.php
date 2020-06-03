<?php
require_once('../class/Sales.php');
require_once('../interface/iUser.php');


$date = $_GET['date'];
$dailySales = $sales->daily_sales($date);


 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reporte de diario de Despachos</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/pdf.css" rel="stylesheet">

    <script type="text/javascript">
        print();
    </script>
  </head>
  <body>

<!-- <img class="anulada" src="../assets/img/masrca_agua2.png" alt="Anulada"> -->
<div id="page_pdf">
    <table id="factura_head">
        <tr>
            <td class="logo_factura">
                <div>
                    <img src="../assets/img/Logo.png">
                </div>
            </td>
            <td class="info_empresa">
                <div>
                    <span class="h2">Reporte Diario de Despachos</span>
                    <p>Inventario de Farmacia Dif</p>
                    <p>Boulevard Turístico Malecón, 97320 Progreso, Yuc.</p>
                </div>
            </td>
            <td class="info_factura">
                <div class="round">
                    <span class="h3">Datos Generales</span>
                    <p>Fecha: <strong><?php echo date('m-d-Y'); ?></strong></p>
                    <p>Usuario que despacho: <strong><?php echo $_SESSION["logged_id"];?></strong></p>
                </div>
            </td>
        </tr>
    </table>

    <table id="factura_detalle">
            <thead>
                <tr>
                    <th class="textleft" width="50px">Código</th>
                    <th class="textcenter" width="50px">Nombre</th>
                    <th class="textcenter" width="50px">Formula</th>
                    <th class="textcenter" width="50px">Cantidad de la Presentación</th>
                    <th class="textcenter" width="50px">Presentación</th>
                    <th class="textcenter" width="50px">Cantidad</th>
                </tr>
            </thead>
            <?php
                $total = 0;
                foreach($dailySales as $ds):
                $subTotal = number_format($ds['price'] * $ds['qty'], 2);
                $total += $subTotal;
            ?>
            <tbody id="detalle_productos">
                <tr>
                    <td class="textleft"><?= $ds['item_code']; ?></td>
                    <td class="textcenter"><?= $ds['generic_name']; ?></td>
                    <td class="textcenter"><?= $ds['brand']; ?></td>
                    <td class="textcenter"><?= $ds['gram']; ?></td>
                    <td class="textcenter"><?= $ds['type']; ?></td>
                    <td class="textcenter"><?= $ds['qty']; ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
    </table>
    <div>
        <p class="nota">Si usted tiene preguntas sobre esta reporte, <br>pongase en contacto con el administrador H Ayuntamiento progreso</p>
        <h4 class="label_gracias">¡Progreso Para Todos!</h4>
    </div>

</div>



<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-sales').DataTable();
    });
</script>

<?php
$sales->Disconnect();
 ?>
