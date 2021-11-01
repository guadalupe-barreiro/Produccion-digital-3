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
          <li class="nav-item btn border-0  btn-sm botonSearch">
          <form class="form-inline" action="resultados_buscar.php" method="post">
              <input class="form-control mr-sm-2" name="buscar" type="search" placeholder="Artistas" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </li>
          <li class="nav-item btn border-0  btn-sm botonLogin">
            <a class="nav-link" href="form_login.php">Iniciar Sesión</a>
          </li>
      </ul>

    </div>
  </nav>
</header>

<section>
       <br></br>

       <?php
       include('conexion.php');
   
       $buscar = $_POST['buscar'];
   
       
       echo "Su consulta: <em>".$buscar."</em><br>";
   
       $consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
     
   
   ?>
   <article style="width:60%;margin:0 auto;border:solid;padding:10px">
       <p>Cantidad de Resultados: 
       <?php
           $nros=mysqli_num_rows($consulta);
           echo $nros;
       ?>
       </p>
       
       <?php
           while($resultados=mysqli_fetch_array($consulta)) {
       ?>
       <p>
       <?php	
               echo $resultados['nombre'] . " ";
               echo $resultados['apellido'];
               echo $resultados['bio'];
       ?>
       </p>

       <img src="<?php  echo $resultados['foto']; ?>">

       <hr/>
       
       <?php
           }
   
           mysqli_free_result($consulta);
           mysqli_close($conexion);
   
       ?>
   </article>

</section>

    <footer>
      <div class="container-fluid text-center bg1 p-5" style="background-color: #185fd5;">
        <h6 style="color: white;">«Copyright © 2021 | Barreiro Guadalupe»</h6>
        <a style="color: white;">Proyecto Integrador Final - Produccion digital II - Universidad de Palermo</a>
      </div>
    </footer>
</body>


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>