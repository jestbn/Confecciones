<?php $id_user ="";
    
    if ($this->session->userdata("id") != null || $this->session->userdata("id") != "") {
      $id_user = $this->session->userdata("id");
      $idrol = $this->session->userdata("rol");
    }

 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- DataTables JS-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<!-- DataTables CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script>
  $(document).ready(function (){
    var base_url= "<?php echo base_url();?>";
    //Esto es para eliminar un producto 
    $(".btn-remove").on("click", function(e){
        e.preventDefault();
        var id = $(this).val();
        var ruta = base_url+"index.php/cProductos/delete/"+id;
        //alert(ruta);
        if (confirm("Esta seguro de que quiere eliminar")) {
              $.ajax({
                  url: ruta,
                  type:"POST",
                  success:function(resp){
                      window.location.href = base_url + resp;
                  }
              });
        }
        
    });
    //Esto es para que se vea el view en listar de productos
    $(".btn-view").on("click", function(){
        var id = $(this).val();
        $.ajax({
            url: base_url + "index.php/cProductos/view/" + id,
            type:"POST",
            success:function(resp){
                $("#modal-default .modal-body").html(resp);
                //alert(resp);
            }
        }); 
    });

    $('#example1').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });

    setTimeout(function (){
        $(".alert-danger").fadeOut(1500);
    },2000);

    $("#ddlrol").on("change",function(){
        option = $(this).val();

        if (option != "") 
        {
          inforol = option.split("*");
          $("#idrol").val(inforol[0]);
          $("#nrol").val(inforol[1]);
        }
        else
        {
          $("#idrol").val(null);
          $("#nrol").val(null);
        }
    });

  })
</script>


  <style type="text/css">
      body {font-family: Arial, Helvetica, sans-serif;}

      /* Full-width input fields */
      input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
      }

      /* Set a style for all buttons */
      button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
      }

      button:hover {
          opacity: 0.8;
      }

      /* Extra styles for the cancel button */
      .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
      }

      /* Center the image and position the close button */
      .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
      }

      img.avatar {
          width: 40%;
          border-radius: 50%;
      }

      .container {
          padding: 16px;
      }

      span.psw {
          float: right;
          padding-top: 16px;
      }

      /* The Modal (background) */
      

      /* Modal Content/Box */
      .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; 
          border: 1px solid #888;
          width: 80%; 
      }

      /* The Close Button (x) */
      .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          color: red;
          cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
      }
       * {box-sizing: border-box}
      body {font-family: "Lato", sans-serif;}

      /* Style the tab */
      .tab {
          float: left;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
          width: 30%;
          height: 300px;
      }

      /* Style the buttons inside the tab */
      .tab button {
          display: block;
          background-color: inherit;
          color: black;
          padding: 22px 16px;
          width: 100%;
          border: none;
          outline: none;
          text-align: left;
          cursor: pointer;
          transition: 0.3s;
          font-size: 17px;
      }

      /* Change background color of buttons on hover */
      .tab button:hover {
          background-color: #ddd;
      }

      /* Create an active/current "tab button" class */
      .tab button.active {
          background-color: #ccc;
      }

      /* Style the tab content */
      .tabcontent {
          float: left;
          padding: 0px 12px;
          border: 1px solid #ccc;
          width: 70%;
          border-left: none;
          height: 300px;
      }
      @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
      }
          
      @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
      }
      .btn-info1{
        /*ghostwhite*/
        color:white;
        background-color: #6c757d;
        border-color: #6c757d;
      }
  </style>

</head>
<div class="w3-top">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="padding-top: 2px;padding-bottom: 2px;">
      <a class="navbar-brand" href="<?php echo base_url();?>">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="<?php echo base_url();?>#team" class="nav-link">Nuestro Equipo</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>#work" class="nav-link">Nuestro Proyectos</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>#pricing" class="nav-link">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>#contact" class="nav-link">Contactenos</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>cProductos/verProduc" class="nav-link">Productos</a>
          </li>
        </ul>
        <!-- Esto seria para el login --> 
          <span class="">
            <div class="btn-group">
            <?php if ($id_user == ""): ?>
              
                  <a class="btn btn-info1 btn-lg" href="<?php echo base_url();?>cProductos/verLogin" style="padding-top: 3px;
                  padding-bottom: 3px;"><span class="fa fa-user-circle" style="padding-top: 5px;
                  padding-bottom: 5px;color: white;"></span>Iniciar Sesion</a>
              

              <?php else: ?>
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: 1px;margin-bottom: 1px;">
                <span class="fa fa-user"><?php echo " ".$this->session->userdata("username")?></span>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button"><a href="<?php echo base_url();?>admin">Administración</a></button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button"><a href="<?php echo base_url();?>auth/logout">Cerrar Sesion</a></button>
              </div>

            <?php endif; ?>
            </div>
          </span>
        
      </div>
    </nav>
  </div>

<!-- Navbar -->
<!-- <div class="w3-top"> -->
<div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="<?php echo base_url();?>" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Inicio</a>
  <a href="<?php echo base_url();?>#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Nuestro Equipo</a>
  <a href="<?php echo base_url();?>#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Nuestro Proyectos</a>
  <a href="<?php echo base_url();?>#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Quienes Somos</a>
  <a href="<?php echo base_url();?>#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contactenos</a>
  <a href="<?php echo base_url();?>index.php/cProductos/verProduc" class="w3-bar-item w3-button">Productos</a>
  
 
  <span class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal"><?php echo $this->session->userdata("username")?></span>

  <?php if ($id_user != "") : ?>
    <a href="<?php echo base_url();?>index.php/auth/logout" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal">Cerrar sesion</a>

      <?php else: ?>
        <ul><a href="<?php echo base_url();?>index.php/cProductos/verLogin" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal">Login</a>
  <?php endif; ?>


  <!-- <ul><a onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal">Login</a><div id="id01" class="modal"> -->
</div>
  
<!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Nuestro Equipo</a>
    <a href="#work" class="w3-bar-item w3-button">Nuestros trabajos</a>
    <a href="#pricing" class="w3-bar-item w3-button">Quienes Somos</a>
    <a href="#contact" class="w3-bar-item w3-button">Contactenos</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>

</div>







