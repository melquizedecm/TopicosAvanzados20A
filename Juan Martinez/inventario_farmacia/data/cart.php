<?php
    require_once('../class/Cart.php');
    $stocks = $stock->all_stockList();
    $cartDatas = $cart->all_cartDatas($_SESSION['logged_id']);
    // echo '<pre>';
    //     print_r($cartDatas);
    // echo '</pre>';
 ?>


 <div class="col-md-6">
     <div class="panel panel-primary">
         <div class="panel-heading">
             <h3 class="panel-title">
             <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
             Carrito
             </h3>
         </div>
         <div class="panel-body">
             <!-- cart -->
             <div class="table-responsive">
                     <table id="myTable-cart" class="table table-bordered table-hover table-striped">
                         <thead>
                             <tr>
                                 <th><center>Nombre</center></th>
                                 <th><center>Precio</center></th>
                                 <th><center>Cant.</center></th>
                                 <th><center>Sub</center></th>
                                 <th><center></center></th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php
                         $total = 0;
                          foreach($cartDatas as $c):
                             $price = $c['item_price'];
                             $qty = $c['cart_qty'];
                             $subTotal = $price * $qty;
                             $total += $subTotal;
                         ?>
                             <tr align="center">
                                 <td><?= ucwords($c['item_name']); ?></td>
                                 <td><?= "$ ".number_format($c['item_price'], 2); ?></td>
                                 <td><?= $c['cart_qty']; ?></td>
                                 <td><?= number_format($subTotal,2); ?></td>
                                 <td>
                                 <button onclick="delCart('<?= $c['cart_stock_id']; ?>','<?= $qty; ?>','<?= $c['cart_id']; ?>');" type="button" class="btn btn-danger btn-xs">
                                     <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                 </button>
                                 </td>
                             </tr>
                         <?php endforeach; ?>
                         </tbody>
                             <tr>
                                 <td></td>
                                 <td></td>
                                 <td align="right"><strong>Total:</strong></td>
                                 <td align="center">
                                     <strong><?= number_format($total, 2); ?></strong>
                                 </td>
                                 <td>
                                     <?php if($total > 0): ?>
                                     <button onclick="confirm_cart()" type="button" class="btn btn-success btn-xs">
                                     Confirmar
                                     <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                     </button>
                                     <?php endif; ?>
                                 </td>
                             </tr>
                     </table>
             </div>

             <script type="text/javascript">
                 $(document).ready(function() {
                     $('#myTable-cart').DataTable();
                 });
             </script>

             <!-- cart -->
         </div>
     </div>
 </div>
