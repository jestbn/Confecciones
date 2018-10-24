<html>
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
</head>
<body>
<!-- Barra de navegacion casi llamado a su vista -->
<!-- NOTA el llamado al navbar ya se hace apartir del controlador cProductos->verProduc; -->
<br><br>
<h2 align="center">Listado de productos</h2>

<?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
<?php endif; ?>

	<div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url();?>index.php/cProductos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Producto</a>
        </div>
    </div>

<div>
<!-- Tabla de los productos recuperacion de informacion a traves del modelo y controlador  -->

	<table class="table table-bordered table-hover" id="example1" style="text-align: center;">
		
		<thead class="thead-dark">
		<th>Codigo de Referencia</th>
		<th>Nombre de Prenda</th>
		<th>Valor Confección</th>
		<th>Valor Venta</th>
		<th>Opciones</th>
		</thead>
		<!-- a traves de contenido instanciado del controlador cProductos->verProduc -->
		
		 <?php foreach($contenido as $c): ?>
		 <tr>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $c->Cod_Ref; ?></td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $c->Nom_Prenda; ?></td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $c->Val_Confecc; ?></td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $c->Val_Venta; ?></td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;">
		 		<div class="btn-group">
                    <button class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $c->Id_Prenda;?>">
                    <span class="fa fa-search" style="font-size:24px"></span>
                    </button>
                    <button class="btn btn-warning"><a href="<?php echo base_url()?>index.php/cProductos/edit/<?php echo $c->Id_Prenda;?>"><span class="fa fa-pencil" style="font-size:24px;color:black"></span></a></button>
                    <button class="btn btn-danger btn-remove" value="<?php echo $c->Id_Prenda;?>"><a href="<?php echo base_url();?>index.php/cProductos/delete/<?php echo $c->Id_Prenda;?>"><span class="fa fa-remove" style="font-size:24px; color:white"></span></a></button>
                </div>
		 	</td>
		 </tr>
		<?php endforeach; ?>
	</table>


</div>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Informacion del Producto</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</body>
</html>