<?php
require_once('../class/Stock.php');
$stocks = $stock->all_stockGroup();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reporte de Stock de Medicamentos</title>

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
					<span class="h2">Stock de Medicamentos</span>
					<p>Inventario de Farmacia Dif</p>
					<p>Boulevard Turístico Malecón, 97320 Progreso, Yuc.</p>
				</div>
			</td>
			<td class="info_factura">
				<div class="round">
					<span class="h3">Datos Generales</span>
					<p>Fecha: <strong><?php echo date('m-d-Y'); ?></strong></p>
				</div>
			</td>
		</tr>
	</table>

	<table id="factura_detalle">
			<thead>
				<tr>
					<th class="textleft" width="50px">Nombre</th>
					<th class="textcenter" width="50px">Formula</th>
					<th class="textcenter" width="50px">Cantidad</th>
				</tr>
			</thead>
			<?php foreach($stocks as $s): ?>
			<tbody id="detalle_productos">
				<tr>
                    <td class="textleft"><?= ucwords($s['item_name']); ?></td>
                    <td class="textcenter"><?= ucwords($s['item_brand']);  ?></td>
                    <td class="textcenter"><?= $s['qty']; ?></td>					
				</tr>
			</tbody>
            <?php endforeach; ?>			
	</table>
	<div>
		<p class="nota">Si usted tiene preguntas sobre esta reporte, <br>pongase en contacto con el administrador H Ayuntamiento progreso</p>
		<h4 class="label_gracias">¡Progreso Para Todos!</h4>
	</div>

</div>

<?php
$stock->Disconnect();
 ?>



    <script type="text/javascript">
        print();
    </script>
</body>
</html>
