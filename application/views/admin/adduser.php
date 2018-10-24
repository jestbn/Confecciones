<title>Agregar Usuario</title>
<br>
<div class="w3-card-4">
	<div class="w3-container w3-teal">
		<h2>Agregar Usuario</h2>
	</div>
	<?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
<?php endif; ?>
	<form class="w3-container" action="<?php echo base_url();?>index.php/Admin/guardarusuario" method="POST">
		  <div class="form-row" style="padding-bottom: 0px;">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Usuario</label>
		      <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de Usuario">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Contraseña</label>
		      <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Nombre Completo</label>
		    <input type="text" name="nomcomple" class="form-control" id="nomcomple" placeholder="Nombre y Apellidos">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Correo Electronico</label>
		    <input type="email" name="correo" class="form-control" id="correo" placeholder="ejemplo@gmail.com">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity" style="margin-bottom: 15px;">Rol</label>
		      <!-- Aqui empiezo a trae los datos de la tabla rol para insertarlos en la tabla usuarios -->
			      <select id="ddlrol" name="ddlrol" class="form-control">
			        <option disabled selected value="">Seleccione un Rol...</option>
			        <?php foreach ($contenido as $c):?>
			        	<?php $datorol = $c->id_rol."*".$c->nombre_rol; ?>
						<option value="<?php echo $datorol; ?>"><?php echo $c->nombre_rol; ?></option>
			        <?php endforeach; ?>
			      </select>
			      <!-- Aqui atravez pongo en un input hidden de Jquery llevo el value de id_rol de el option seleccionado arriba -->
			      <input type="hidden" id="idrol" name="idrol">
			      <input type="hidden" id="nrol" name="nrol">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputState">Telefono</label>
		      <input type="text" name="tel" class="form-control" id="tel">
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputZip">Numero de Celular</label>
		      <input type="text" name="cel" class="form-control" id="cel">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">Crear Usuario</button>
		  <a href="<?php echo base_url()?>index.php/Admin/verusers"><input type="button" class="w3-btn w3-red btn-block" value="Cancelar"></a></p>
    </form>
</div>
