<title>Modulo de Administración</title>
<h2 align="center">Administración</h2>

<?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
<?php endif; ?>

<div class="container" data-view="search">
	<!-- <div id="icons">
		<section id="new">
			<div class="row fontawesome-icon-list">
				<div class="fa-hover col-md-3 col-sm-4">
					<a href="#" style="font-style:sans-serif;font-size: 16px;">
						<i class="fa fa-users" aria-hidden="true" style="height: 32px;padding-left: 15px;padding-right: 15px;">
							<span class="sr-only">Example of </span>Administracion de Usuarios

						</i>
					</a><span style="font-style:sans-serif;font-size: 15px;">Modulo de administración de usuarios. En el puedes ver los usuarios registrados, crear un uevo usuario, actualizar la informacion del usuario.</span>
				</div>
				<div class="fa-hover col-md-3 col-sm-4">
					<a href="#" style="font-style:sans-serif;font-size: 16px;">
						<i class="fa fa-users" aria-hidden="true" style="height: 32px;padding-left: 15px;padding-right: 15px;">
							<span class="sr-only">Example of </span>Administracion de Equipos
						</i>
					</a><span style="font-style:sans-serif;font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, optio voluptate sapiente hic cumque sunt harum porro dolorem blanditiis enim. Eligendi quos minima provident minus, laborum nihil repellendus, ipsa alias.</span>
				</div>

			</div>
		</section>
		
	</div> -->

	<div class="row fontawesome-icon-list">
	<table class="table table-bordered">
		<th colspan="3" style="text-align: center;">Usuarios</th>
		<tr>
			<th>
				<a href="<?php echo base_url();?>Admin/verusers">
					<i class="fa fa-users" aria-hidden="true" >
						<span class="sr-only">Example of </span>Administracion de Usuarios
					</i>
				</a>
			</th>
			<th>
				<a href="#">
					<i class="fa fa-users" aria-hidden="true" >
						<span class="sr-only">Example of </span>Administracion de Equipos
					</i>
				</a>
			</th>
			<th>
				<a href="<?php echo base_url();?>Permisos">
					<i class="fa fa-users" aria-hidden="true" >
						<span class="sr-only">Example of </span>Administracion de Roles
					</i>
				</a>
			</th>
		</tr>
		<tr>
			<td>Modulo de administración de usuarios. En el puedes ver los usuarios registrados, crear un nuevo usuario, actualizar la informacion del usuario.</td>
			<td>Modulo de administración de Equipos. En el puedes ver los equipos registrados, crear un nuevo Equipo, actualizar la informacion del Equipo.</td>
			<td>Modulo de administración de Roles. En el puedes ver los Roles, crear un nuevo Rol, actualizar la informacion de un Rol.</td>
		</tr>
	</table>
</div>

</div>



