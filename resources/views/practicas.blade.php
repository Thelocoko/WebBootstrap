@extends('cabecera')
@section('contenido_especifico')
<!DOCTYPE html>
<html>
<body>
	<div class="container">		
		<h4 class="text-light">Desarrollo</h4>
		<br>
		<h6 class="text-light">Puedes dar click en las imagenes para verlas en tamaño completo.</h6>
		<br>
		<div id="accordion">
  			<div class="card">
    			<div class="card-header" id="headingOne">
      				<h5 class="mb-0">
        				<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          				Sensores
        				</button>
      				</h5>
    			</div>
    			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      				<div class="card-body">
      					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;En esta primer seccion de desarrollo necesitamos crear nuestros primeros scripts, el primer script en donde utilizaremos el sensor de acelerometro y giroscopio de nuestro smartphone.<br>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para verificar que estamos utilizando correctamente estos sensores y poder verlo dentro de la pantalla necesitamos crear otro script para controlar algun aset y este se mueva.<br><br>
						<a href="media/giroscopio.jpg" target="_blank"><img class="logo" alt="Responsive image" src="media/giroscopio.jpg"></a>
      				</div>
    			</div>
  			</div>
		  	<div class="card">
		    	<div class="card-header" id="headingTwo">
		      		<h5 class="mb-0">
		        		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          			Personalización
		        		</button>
		      		</h5>
		    	</div>
		    	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		      		<div class="card-body">
		        	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Una vez que tenemos estos scripts funcionando podemos empezar a personalizar un poco el entorno para hacerlo todo mas agradable a la vista al momento de ejecutar la aplicacion como lo puede ser el fondo y el objeto a lanzar, todo esto lo realizamos dentro del entorno de diseño que nos sea mas interesante.<br><br>
					<a href="media/fondo.png" target="_blank"><img class="logo" alt="Responsive image" src="media/fondo.png"></a>
		      		</div>
		    	</div>
		  	</div>
  			<div class="card">
    			<div class="card-header" id="headingThree">
      				<h5 class="mb-0">
        				<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          					Simulación
        				</button>
      				</h5>
    			</div>
    			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      				<div class="card-body">
        				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para poder simularlo debemos de conocer las formulas que podemos ocupar para realizar un cálculo correcto, a continuación muestro las formulas para poder calcular algunos parametros importantes para programar la simulación.<br><br>
						<p>Velocidad inicial:<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V0 = √(((distancia*gravedad))/(sen(2* angulo)))<br>
						Altura máxima:<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hmax = (〖V0〗^2*SEN〖(°a)〗^2)/(2*g)<br>
						Distancia en x para algún momento en especifico<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = (v0 * cos(α)) * t<br>
						Distancia en y para algún momento en especifico<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y = (v0 * sin(α)) * t + 1/2 * g * t2 <br>
						Tiempo de vuelo<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tiempo = (2V0*SEN (°α))/gravedad<br>
						Fuerza<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F = m * a<br>
						</p>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conociendo estas formulas podemos comenzar a implementarlas dentro de un script, tomando en cuenta los valores de este objeto al ser lanzado. Podemos tomar en cuenta que ciertos parametros como lo es la distancia y el tiempo lo podemos obtener desde unity ya que tiene algunas variables integradas.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A pesar de que no tenemos algo con que se muestra nuestra simulacion, podemos colocar etiquetas en las cuales podemos ver como avanzan los distintos parametros al momento de la simulacion. Incluso colocando un slider para poder cambiar el peso del objeto<br><br>
						<a href="media/avance.jpg" target="_blank"><img class="logo" alt="Responsive image" src="media/avance.jpg"></a>
      				</div>
    			</div>
  			</div>
  		  	<div class="card">
		    	<div class="card-header" id="headingFour">
		      		<h5 class="mb-0">
		        		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		          			Maquetado
		        		</button>
		      		</h5>
		    	</div>
		    	<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
		      		<div class="card-body">
		        	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Al final de la simulacion podriamos ver un menu como el siguiente, maquetando y cubriendo ciertas necesidades que se nos vayan ocurriendo al momento como lo puede ser este menu de "game over" <br><br>
					<a href="media/simulacion1.jpg" target="_blank"><img class="logo" alt="Responsive image" src="media/simulacion1.jpg"></a>
		      		</div>
		    	</div>
		  	</div>
		  	<div class="card">
		    	<div class="card-header" id="headingFive">
		      		<h5 class="mb-0">
		        		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
		          			Parametros especificos
		        		</button>
		      		</h5>
		    	</div>
		    	<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
		      		<div class="card-body">
						<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Si nos ubicamos dentro del boton"simulacion" encontraremos mas parametros especificos que quisieramos saber acerca de nuestra simulacion, todo esto es gracias a nuestro script de operaciones para calcular el tiro parabolico, lo demas es simples etiquetas<br><br>
						<a href="media/simulacion2.jpg" target="_blank"><img class="logo" alt="Responsive image" src="media/simulacion2.jpg"></a>
		      		</div>
		    	</div>
		  	</div>
		  	<div class="card">
		    	<div class="card-header" id="headingSix">
		      		<h5 class="mb-0">
		        		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
		          			Menu principal
		        		</button>
		      		</h5>
		    	</div>
		    	<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
		      		<div class="card-body">
		        		<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Como hemos visto podemos ir a un menu principal, para el cual necesitamos crear un script, ya que necesitamos saber el manejo de escenas. Las escenas son distintos espacios en blanco para poder crear distintos niveles, sin embargo, tambien son utilizados para crear un menu principal. La manera de implementarlo fue la siguiente: <br><br>
						<a href="media/menu.jpg" target="_blank"><img class="logo" alt="Responsive image" src="media/menu.jpg"></a>
		      		</div>
		    	</div>
		  	</div>
		  	<div class="card">
		    	<div class="card-header" id="headingSeven">
		      		<h5 class="mb-0">
		        		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
		          			Final
		        		</button>
		      		</h5>
		    	</div>
		    	<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
		      		<div class="card-body">
		        		<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;El resultado final de esta aplicacion seria que fue capaz de realizar una simulacion de tiro parabolico utilizando los sensores de un smartphone, haciendo cada uno de sus calculos correctamente sin errores, comprobable desde haciendo calculos a papel y lapiz, incluso con simuladores online como el de geogebra. Todo desde la palma de tu mano, haciendo las matematicas un poco mas divertidas. <br><br>	
		      		</div>
		    	</div>
		  	</div>
		</div>
		<br>
		<div class="text-center">
			<a class="btn btn-outline-success btn-lg" href="media/protocolo_de_investigacion_del_proyecto_formato_b1.pdf" target="_blank" role="button">Conocimiento general del tiro parabolico</a>
		</div>
		<br>
	</div>

@endsection
@extends('pie')
</body>
</html>
