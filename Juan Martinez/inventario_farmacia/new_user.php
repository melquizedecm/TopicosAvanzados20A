<?php
	require_once('database/Database.php');
	$db = new Database();
	//get all items
	/*$sql = "SELECT *
			FROM item
			ORDER BY item_name ASC";
	$items = $db->getRows($sql);*/
 ?>
<div class="modal fade" id="modal-stock">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Farmacia DIF</h4>
			</div>
			<div class="modal-body">
				<!-- FORM -->
				<form class="form-horizontal">

          <div class="row">
          	<div class="col-md-12">
          	<h1>Agregar Usuario</h1>
          	<br>
          		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=adduser" role="form">


            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
              <div class="col-md-6">
                <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="Apellido">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">Nombre de usuario*</label>
              <div class="col-md-6">
                <input type="text" name="username" class="form-control" required id="username" placeholder="Nombre de usuario">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
              <div class="col-md-6">
                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">Contrase&ntilde;a</label>
              <div class="col-md-6">
                <input type="password" name="password" class="form-control" id="inputEmail1" placeholder="Contrase&ntilde;a">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">Es administrador</label>
              <div class="col-md-6">
          <div class="checkbox">
              <label>
                <input type="checkbox" name="is_admin">
              </label>
            </div>
              </div>
            </div>

            <p class="alert alert-info">* Campos obligatorios</p>

            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-primary">Agregar Usuario</button>
              </div>
            </div>
          </form>
          	</div>
          </div>

				</form>
				<!-- END FORM -->
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
