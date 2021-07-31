<!DOCTYPE html>
<html>
<head>
	<title>Tiro parabolico</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">	
	<link rel="stylesheet" type="text/css" href="css/mis.css">
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
</head>
<body class="bg-secondary">	
	<header>    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success" >
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Tiro parabolico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>      
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/instalacion">Requisitos para el desarrollo<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/practicas">Desarrollo<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="media/protocolo_de_investigacion_del_proyecto_formato_b1.pdf" target="_blank">Conocimiento general del tiro parabolico<span class="sr-only">(current)</span></a>
            </li>          
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>
    <div class="contenedor bg-secondary">
      <img class="logo" src="media/logoETSIDI4.png">
    </div>
    <br>
	</header>
	<script type="text/javascript" src="js/app.js"></script>  
  <script type="text/javascript" src="js/mis.js"></script>  
		@yield('contenido_especifico')
		@yield('pief')
</body>
</html>