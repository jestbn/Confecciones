<html>
<head>
	<meta charset="UTF-8">
	<title>Permisos</title>
</head>
<body>
<!-- Barra de navegacion casi llamado a su vista -->
<!-- NOTA el llamado al navbar ya se hace apartir del controlador cProductos->verProduc; -->
<br><br>
<h2 align="center">Listado de Permisos</h2>

<?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
<?php endif; ?>
	<div class="row">
        <div class="col-md-12">
          <?php if($conpermiso->insertar == 1): ?>
            <a href="<?php echo base_url();?>index.php/Permisos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Permiso</a>
          <?php endif; ?>
        </div>
    </div>

<div>
<!-- Tabla de los productos recuperacion de informacion a traves del modelo y controlador  -->

	<table class="table table-bordered table-hover" id="example1" style="text-align: center;">
		
		<thead class="thead-dark">
		<th>#</th>
		<th>Menú</th>
		<th>Rol</th>
    <th>Leer</th>
    <th>Insertar</th>
    <th>Actualizar</th>
    <th>Eliminar</th>
		<th>Opciones</th>
		</thead>
		<!-- a traves de contenido instanciado del controlador cProductos->verProduc -->
		
		 <?php foreach($permisos as $permiso): ?>
		 <tr>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $permiso->id; ?></td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $permiso->menu; ?></td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;"><?php echo $permiso->nombre_rol; ?></td>
      <!-- para campo leer -->
      <td style="padding-top: 1px;padding-bottom: 1px;">
        <?php if($permiso->leer == 0): ?>
          <span class="fa fa-times"></span>
          <?php else: ?>
          <span class="fa fa-check"></span>
        <?php endif; ?>
      </td>
      <!-- para campo insertar -->
      <td style="padding-top: 1px;padding-bottom: 1px;">
        <?php if($permiso->insertar == 0): ?>
          <span class="fa fa-times"></span>
          <?php else: ?>
          <span class="fa fa-check"></span>
        <?php endif; ?>
      </td>
      <!-- para campo actualizar -->
      <td style="padding-top: 1px;padding-bottom: 1px;">
        <?php if($permiso->actualizar == 0): ?>
          <span class="fa fa-times"></span>
          <?php else: ?>
          <span class="fa fa-check"></span>
        <?php endif; ?>
      </td>
      <!-- para campo eliminar -->
      <td style="padding-top: 1px;padding-bottom: 1px;">
        <?php if($permiso->eliminar == 0): ?>
          <span class="fa fa-times"></span>
          <?php else: ?>
          <span class="fa fa-check"></span>
        <?php endif; ?>
      </td>
		 	<td style="padding-top: 1px;padding-bottom: 1px;">
		 		<div class="btn-group"><!-- 
                    <button class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="">
                    <span class="fa fa-search" style="font-size:24px"></span>
                    </button> -->

    <!-- A travez del controlador Permisos que a su vez accede a la libreria backed_lib, puedo establecer los permisos de editar y eliminar -->

                  <?php if($conpermiso->actualizar == 1): ?>
                    <button class="btn btn-warning"><a href="<?php echo base_url()?>Permisos/edit/<?php echo $permiso->id;?>"><span class="fa fa-pencil" style="font-size:24px;color:black"></span></a></button>
                  <?php endif; ?>

                  <?php if($conpermiso->actualizar == 1): ?>
                    <button class="btn btn-danger" value="<?php echo $permiso->id;?>"><a href="<?php echo base_url();?>Permisos/delete/<?php echo $permiso->id;?>"><span class="fa fa-remove" style="font-size:24px; color:white"></span></a></button>
                  <?php endif; ?>
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