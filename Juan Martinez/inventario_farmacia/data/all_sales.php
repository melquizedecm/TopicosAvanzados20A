<?php
require_once('../class/Sales.php');

$date = $_GET['date'];
$dailySales = $sales->daily_sales($date);


 ?>
<br />
<div class="table-responsive">
        <table id="myTable-sales" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Formula</th>
                    <th><center>Cantidad de la Presentación</center></th>
                    <th><center>Presentación</center></th>

                    <th><center>Cant.</center></th>

                </tr>
            </thead>
            <tbody>
            <?php
                $total = 0;
                foreach($dailySales as $ds):
                $subTotal = number_format($ds['price'] * $ds['qty'], 2);
                $total += $subTotal;
            ?>
                <tr>
                    <td><?= $ds['item_code']; ?></td>
                    <td><?= $ds['generic_name']; ?></td>
                    <td><?= $ds['brand']; ?></td>
                    <td><?= $ds['gram']; ?></td>
                    <td><?= $ds['type']; ?></td>
                    <td align="center"><?= $ds['qty']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-sales').DataTable();
    });
</script>

<?php
$sales->Disconnect();
 ?>
