@extends('cabecera')
@section('contenido_especifico')
<!DOCTYPE html>
<html>
<body>

	<div class="container">
			<br>
			<h4 class="text-light">Requisitos para el desarrollo</h4>
			<br>
			<h6 class="text-light">Puedes dar click en las imagenes para verlas en tamaño completo.</h6>
			<br>
			<div class="row g-0 bg-light position-relative">
			 	<div class="col-md-6 mb-md-0 p-md-4">
			    	<a href="media/version.png" target="_blank"><img src="media/version.png" class="mw-100 " alt="Responsive image"></a>
			  	</div>
			  	<div class="col-md-6 p-4 ps-md-0">
			    	<h5 class="mt-0">Entorno de desarrollo (Unity)</h5>
			    	<p>&nbsp;&nbsp;&nbsp;Unity es una herramienta de desarrollo de videojuegos creada por la empresa Unity Technologies.</p>
			    	<p>En la imagen izquierda se muestran los requisitos dentro de unity para la elaboracion del proyecto.</p>
			    	<p>Lo primero es tener descargado unity y crear una cuenta para poder utilizar el entorno<br><br></p>
			    	<a href="https://unity.com/es" target="_blank" class=" link-success stretched-link text-center ">Pagina principal de unity</a>
			  	</div>
			</div>
			<br>
			<div class="row g-1 bg-light position-relative">			 	
			  	<div class="col-md-6 mb-md-0 p-md-4 ">
			    	<h5 class="mt-0">Photoshop</h5>
					<p>&nbsp;&nbsp;&nbsp;Necesitamos alguna aplicacion con la cual podamos diseñar los asets para nuestra aplicacion por lo que podemos utilizar algun software de diseño como lo puede ser gimp si queremos algo libre, adobe illustrator o adobe photoshop que sera en el cual me enfocare debido a que es el que mas se utilizar.<br></p>
			    	<a href="https://www.adobe.com/mx/products/photoshop.html" target="_blank" class="stretched-link text-center">Página oficial de Photoshop</a><br><br>
			  	</div>
			  	<div class="col-md-6 p-4 ps-md-0">
			    	<a href="media/photoshop.png" target="_blank"><img src="media/photoshop.png" class="mw-100 " alt="Responsive image"></a>
			  	</div>
			</div>
			<br><br><br>
			<div class="text-center">
				<a class="btn btn-outline-success btn-lg" href="/practicas" role="button">DESARROLLO</a>
			</div>
			<br><br><br>		
	</div>
@endsection
@extends('pie')
</body>
</html>
