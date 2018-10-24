<html>
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<style>
		td{
			font-size: 20px;
		}
	</style>
</head>
<body>
<!-- Barra de navegacion casi llamado a su vista -->
<!-- NOTA el llamado al navbar ya se hace apartir del controlador cProductos->verProduc; -->
<br><br>
<h2 align="center">Listado de Usuarios</h2>

<?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
<?php endif; ?>

	<div class="row">
        <div class="col-md-12" style="margin-left: 5%;">
            <a href="<?php echo base_url();?>index.php/Admin/adduser" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Usuario</a>
        </div>
    </div>
<div style="margin-left: 5%;margin-right: 5%;">
<!-- Tabla de los productos recuperacion de informacion a traves del modelo y controlador  -->

	<table class="table table-bordered table-hover" id="example1" style="text-align: center;">
		
		<thead class="thead-dark">
		<th>Username</th>
		<th>Rol</th>
		<th>Opciones</th>
		</thead>
		<!-- a traves de contenido instanciado del controlador cProductos->verProduc -->
		
		 <?php foreach($contenido as $c): ?>
		 <tr>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $c->username; ?></td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $c->rol; ?></td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;">
		 		<div class="btn-group">
                    <button class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $c->id;?>">
                    <span class="fa fa-search" style="font-size:24px"></span>
                    </button>
                    <button class="btn btn-warning"><a href="<?php echo base_url()?>index.php/admin/edit/<?php echo $c->id;?>"><span class="fa fa-pencil" style="font-size:24px;color:black"></span></a></button>
                    <button class="btn btn-danger btn-remove" value="<?php echo $c->id;?>"><a href="<?php echo base_url();?>index.php/cProductos/delete/<?php echo $c->id;?>"><span class="fa fa-remove" style="font-size:24px; color:white"></span></a></button>
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