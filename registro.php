<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Aprendiendo Bauhaus</title>
	<link rel="shortcut icon" href="img/icono.png">
	<!-- Instalamos Bootstrap CSS--> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="css/bootstrap.min.css" rel="stylesheet">

  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<header> 
  <nav class="">
    <div style="background-color: #ff0000;"> 
    <a class="navbar-brand navbar-nav navbar-expand-xl col-12" href="index.html">
      <h1 class="fs-1">Aprendiendo Bauhaus</h1>
    </a>
    </div>


    <div class="menu" >
      <ul class="opcionesmenu border border-start-0 border-end-0 border-warning">
        <li class="nav-item btn border-0 btn-outline-warning btn-sm">
          <a class="nav-link" href="filosofia.html">Filosofia</a>
        </li>
        <li class="nav-item btn border-0 btn-outline-warning btn-sm">
          <a class="nav-link" href="creaciones.html">Creaciones</a>
        </li>
        <li class="nav-item btn border-0 btn-outline-warning btn-sm">
          <a class="nav-link" href="Personajes.html">Personajes principales</a>
        </li>
           <li class="nav-item btn border-0 btn-outline-warning btn-sm">
          <a class="nav-link" href="1919a1933.html">1919 - 1933</a>
        </li>
        <li class="nav-item btn border-0 btn-outline-warning btn-sm">
            <a class="nav-link" href="despuesde1933.html">Actualidad</a>
          </li>
          <li class="nav-item btn border-0 btn-outline-warning btn-sm">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item btn border-0 btn-outline-warning btn-sm">
            <a class="nav-link" href="semana.php">Semanal</a>
          </li>
          <li class="nav-item btn border-0  btn-sm botonSearch">
            <form class="form-inline" action="resultados_buscar.php" method="post">
              <input class="form-control mr-sm-2" name="buscar" type="search" placeholder="Artistas" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </li>
          <li class="nav-item btn botonLogin">
            <a class="nav-link" href="form_login.php"><i class="fas fa-user"></i></a>
          </li>
      </ul>
     
    </div>
  </nav>
</header>

<section class="vh-100">

<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$password=md5($_POST['password']);

include("conexion.php");


$consulta = mysqli_query($conexion, "INSERT INTO usuarios VALUES(0,'$nombre', '$email','$usuario','$password')");


header("Location:form_login.php?registro=1");

?>	
    
</section>

</body>

<footer>
  <div class="container-fluid text-center bg1 p-5" style="background-color: #185fd5;">
    <h6 style="color: white;">«Copyright © 2021 | Barreiro Guadalupe»</h6>
    <a style="color: white;">Proyecto Integrador Final - Produccion digital II - Universidad de Palermo</a>
  </div>
  </footer>
	
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>

</body>
</html>