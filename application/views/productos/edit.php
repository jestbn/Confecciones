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
    <input type="hidden" value="<?php echo $contenido->Id_Prenda ?>" name="idprodu">
    <p>      
    <label class="w3-text-teal"><b>Codigo de Referencia</b></label>
    <input class="w3-input w3-border w3-sand" name="codprod" type="text" value="<?php echo $contenido->Cod_Ref ?>"></p>
    <p>      
    <label class="w3-text-teal"><b>Nombre de Prenda</b></label>
    <input class="w3-input w3-border w3-sand" name="nomprod" type="text" value="<?php echo $contenido->Nom_Prenda ?>"></p>
    <p>      
    <label class="w3-text-teal"><b>Valor Confección</b></label>
    <input class="w3-input w3-border w3-sand" name="vlrconfe" type="text" value="<?php echo $contenido->Val_Confecc ?>"></p>
    <p>      
    <label class="w3-text-teal"><b>Valor Prenda</b></label>
    <input class="w3-input w3-border w3-sand" name="vlrprenda" type="text" value="<?php echo $contenido->Val_Venta ?>"></p>
    <p>
    <button class="w3-btn w3-teal">Actualizar</button>
    <button class="w3-btn w3-red">Cancelar</button></p>
  </form>
</div>