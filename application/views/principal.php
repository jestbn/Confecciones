<!DOCTYPE html>
<html>
<title>Confecciones Feliangie</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head> <style>
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
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
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
</style></head>
<body id="myPage">

<?php include "navbar.php" ?>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="imagenes/fondo.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <!-- <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">LOGIN</button>
  </div> -->
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Nuestro Equipo</h2>
<p>Conoce nuestro equipo de trabajo!</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="imagenes/jorge.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Jorge arturo garcia</h3>
  <p>Supervisor planta 2</p>
</div>

<div class="w3-quarter">
  <img src="imagenes/reicito.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>REy lopez</h3>
  <p>soporte</p>
</div>

<div class="w3-quarter">
  <img src="imagenes/miriam.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Miriam Garcia</h3>
  <p>Supervisora Plnata 1</p>
</div>

<div class="w3-quarter">
  <img src="imagenes/miguel.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Miguel Angel Garcia</h3>
  <p>Soporte</p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Nuestro trabajo</h2>
<p>Confecciones feliangie, es una empresa con 21 años de experiencia en el ámbito laboral, enfocado al gremio de la elaboración de prendas de vestir, que pertenece al sector del ensamblaje, entre ellas chaquetas, blusas y/o vestidos.
 <h5><p>Administrar los precios y costos por prenda y por empleado.</p></h5>
 <h5><p>Asentar registros semanales de inventario y producto por empleado para el pago de su respectiva nómina.<p><h5>
 <h5><p>Controlar el precio de cada parte de las prendas registradas.</p></h5>
 <h5><p>Permitir tener control de la entrada de materia prima y salida de producción.</p></h5>
 <p>Cumpliendo con los objetivos a diario y gracias a esto, con la oportunidad de trabajar con marcas reconocidas a nivel nacional y conocer grandes empresarios del gremio.</p>
</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="imagenes/americanino.png" alt="Vernazza" style="width:100%">
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="imagenes/nafnaf.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="imagenes/ragged.png" alt="Monterosso" style="width:100%">
  </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a id="pricing" onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<h3><p>Quienes somos</p></h3>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Paris')" id="defaultOpen">Mision</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Vision</button>
</div>

<div id="Paris" class="tabcontent">
  <h3>Mision</h3>
  <p>Producir prendas de vestir de la más alta calidad, de acuerdo a los gustos y tendencias del mercado, logrando plena satisfacción de nuestros clientes y contribuyendo al desarrollo económico, ofrecer a nuestro personal un entorno laboral estable y plenamente identificado con los objetivos de la empresa y con la integración de cada uno de nosotros, formando la familia FELIANGIE.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Vision</h3>
  <p>Ser reconocido como una empresa líder en confecciones de prendas de vestir con calidad internacional, ser una empresa cada vez mas competitiva y eficiente en la confeccion de excelente calidad, ofrecer el mejor servicio, para satisfacer las exigencias de los clientes del mercado nacional y extranjero, utilizando procesos de mejoramiento continuo que aseguren nuestro progreso y permanencia en el mercado, optimizando al mismo tiempo el bienestar de nuestros trabajadores y nuestro aporte a la sociedad.</p>
</div>
<script type="text/javascript">function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();</script>
<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contactenos</span></div>
      <h3>Direccion</h3>
      <p>Calle xx # xx xx</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Medellin,Colombia</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> 2 xx xx xx</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>fexxxxxxxxxxxxxx</p>
    </div>
    <div class="w3-col m7">
      <!-- <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank"> -->
      <?php 
    echo form_open('cProductos/InsertContac');
   ?>
      <div class="w3-section">      
        <label>Nombre</label>
        <input class="w3-input" type="text" name="name" required>
      </div>
      <div class="w3-section">      
        <label>Correo</label>
        <input class="w3-input" type="text" name="email" required>
      </div>
      <div class="w3-section">      
        <label>Mensaje</label>
        <textarea class="w3-input" name="mensaje" rows="5" style="border: solid 1px"></textarea>
      </div> 
      <button type="submit" class="w3-button w3-right w3-theme">Enviar</button>
      <?php 
    echo form_close();
    ?>
      <!-- </form> -->
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Siguenos</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Instagram"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Los vagos esos</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

</script>

</body>
</html>
