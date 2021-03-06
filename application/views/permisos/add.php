<br><br><div class="w3-card-4">
  <title>Agregar Permiso</title>
  <div class="w3-container w3-teal">
    <h2>Agregar Permiso</h2>
  </div>

    <?php if($this->session->flashdata("error")):?>
        <div class="alert alert-danger alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
          </div>
    <?php endif;?>
  <form class="w3-container" action="<?php echo base_url();?>index.php/Permisos/add_permiso" method="POST">
    <p>      
    <label class="w3-text-teal"><b>Roles</b></label>
      <select id="ddlrol" name="rol" class="form-control" required>
              <option disabled selected value="">Seleccione un Rol...</option>
              <?php foreach ($roles as $c):?>
            <option value="<?php echo $c->id_rol; ?>"><?php echo $c->nombre_rol; ?></option>
              <?php endforeach; ?>
      </select>
    </p>
    <p>      
    <label class="w3-text-teal"><b>Menus</b></label>
      <select id="ddlrol" name="menu" class="form-control" required>
              <option disabled selected value="">Seleccione un Menu...</option>
              <?php foreach ($menus as $c):?>
            <option value="<?php echo $c->id; ?>"><?php echo $c->nombre; ?></option>
              <?php endforeach; ?>
      </select></p>
      <!-- Radiobutton para leer -->
    <p>      
      <div class="form-group">
        <label for="leer">Leer:</label>
        <label class="radio-inline">
          <input type="radio" name="leer" value="1" checked="checked">Sí
        </label>
        <label class="radio-inline">
          <input type="radio" name="leer" value="0">No
        </label>
      </div>
    </p>
    <!-- Radiobutton para insertar -->
    <p>      
      <div class="form-group">
        <label for="insertar">Insertar:</label>
        <label class="radio-inline">
          <input type="radio" name="insertar" value="1" checked="checked">Sí
        </label>
        <label class="radio-inline">
          <input type="radio" name="insertar" value="0">No
        </label>
      </div>
    </p>
    <!-- Radiobutton para actualizar -->
    <p>      
      <div class="form-group">
        <label for="actualizar">Actualizar:</label>
        <label class="radio-inline">
          <input type="radio" name="actualizar" value="1" checked="checked">Sí
        </label>
        <label class="radio-inline">
          <input type="radio" name="actualizar" value="0">No
        </label>
      </div>
    </p>
    <!-- Radiobutton para eliminar -->
    <p>      
      <div class="form-group">
        <label for="eliminar">Eliminar:</label>
        <label class="radio-inline">
          <input type="radio" name="eliminar" value="1" checked="checked">Sí
        </label>
        <label class="radio-inline">
          <input type="radio" name="eliminar" value="0">No
        </label>
      </div>
    </p>
    <button class="w3-btn w3-teal">Guardar</button>
    <p>
    <a href="<?php echo base_url()?>index.php/Permisos/"><input type="button" class="w3-btn w3-red btn-block" value="Volver"></a></p>
  </form>

</div>