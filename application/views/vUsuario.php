<html>
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>	
</head>
<body>
<!-- Barra de navegacion casi llamado a su vista -->
<?php include "navbar.php" ?>
<br>
<h2 align="center">Login</h2>

<?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
<?php endif; ?>

  <form class="modal-content animate" action="<?php echo base_url();?>index.php/auth/login" method="post">

	<div class="container" id="contenido">

      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Ingrese Usuario" name="username" required>

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingrese Contraseña" name="password" required>
        
      <button type="submit" name="btniniciar" id="btniniciar" value="Iniciar sesión">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember">Recordar usuario
      </label>
    </div>
  </form>

</body>
</html>