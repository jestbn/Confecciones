<br><br><div class="w3-card-4">
  <title>Actualizar Producto</title>
  <div class="w3-container w3-teal">
    <h2>Editar Producto</h2>
  </div>

    <?php if($this->session->flashdata("error")):?>
        <div class="alert alert-danger alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
          </div>
    <?php endif;?>
  <form class="w3-container" action="<?php echo base_url();?>index.php/cProductos/update" method="POST">
    <input type="hidden" value="<?php echo $contenido->id ?>" name="iduser">
    <p>      
    <label class="w3-text-teal"><b>Nombre de Usuario</b></label>
    <input class="w3-input w3-border w3-sand" name="username" type="text" value="<?php echo $contenido->username ?>"></p>
    <p>      
    <label class="w3-text-teal"><b>Contraseña</b></label>
    <input class="w3-input w3-border w3-sand" name="pass" type="text" value="<?php echo $contenido->password ?>"></p>
    <p>      
    <label class="w3-text-teal"><b>Rol</b></label>
    <input class="w3-input w3-border w3-sand" name="nrol" type="text" value="<?php echo $contenido->rol ?>"></p>
    <input type="hidden" value="<?php echo $contenido->idrol ?>" name="idrol">
    <p>      
    <label class="w3-text-teal"><b>Nombre Completo</b></label>
    <input class="w3-input w3-border w3-sand" name="nomcomple" type="text" value="<?php echo $contenido->Nom_Completo ?>"></p>
    <p>      
    <label class="w3-text-teal"><b>Correo Electronico</b></label>
    <input class="w3-input w3-border w3-sand" name="correo" type="text" value="<?php echo $contenido->Correo ?>"></p>
    <p>
    <button class="w3-btn w3-teal">Actualizar</button>
    <button class="w3-btn w3-red">Cancelar</button></p>
  </form>
</div>