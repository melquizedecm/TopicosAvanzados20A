<?php
    require_once('../class/Item.php');
    $items = $item->all_items();
    // echo '<pre>';
    //     print_r($items);
    // echo '</pre>';
 ?>
<br />
<div class="table-responsive">
        <table id="myTable-item" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Formula</th>
                    <th>Presentación</th>
                    <th><center>Cantidad de la Presentación</center></th>
                    <th>
                        <center>Acciones</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $it): ?>
                    <tr align="center">
                        <td align="left"><?= $it['item_code']; ?></td>
                        <td align="left"><?= ucwords($it['item_name']); ?></td>
                        <td align="left"><?= $it['item_brand']; ?></td>
                        <td align="left"><?= $it['item_type_desc']; ?></td>
                        <td><?= $it['item_grams']; ?></td>
                        <td>
                           <center>
                               <button onclick="editModal('<?= $it['item_id']; ?>');" type="button" class="btn btn-warning btn-xs">Editar
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                           </center>
                        </td>
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
        $('#myTable-item').DataTable();
    });
</script>

<?php
$item->Disconnect();
 ?>
