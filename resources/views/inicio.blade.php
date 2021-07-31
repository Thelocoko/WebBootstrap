@extends('cabecera')
@section('contenido_especifico')
<!DOCTYPE html>
<html>
	<body>
		<div class="container-fluid bg-secondary">
			<div class="row justify-content-start">				
			 	<div class="col-lg-4 ">
			 		<div class="card-deck ">
					  	<div class="card">
					    	<img class="card-img-top " src="media/iot5.png" alt="Card image cap">
					    	<div class="card-body ">
					      		<h5 class="card-title">Resumen</h5>
					      		<p class="card-text">&nbsp;&nbsp;&nbsp;El tiro parabólico es la unión de 2 movimientos, el movimiento rectilíneo y el movimiento horizontal por lo que es un tema interesante que podemos investigar debido a lo que se puede hacer de una manera no tan teórica si no que de una manera visual y divertida donde seas capaz de interactuar con él.<br><br>
								&nbsp;&nbsp;&nbsp;Lo que quiero abordar dentro de esta web es poder conocer más acerca de la fuerza y la distancia por lo que vamos a desarrollar una aplicación para así poder simular el tiro parabólico.<br><br>
								&nbsp;&nbsp;&nbsp;La pregunta a resolver dentro de esta web es: será posible calcular el tiempo de vuelo, la posición del objeto lanzado en un cierto momento y la altura máxima utilizando los sensores de un smartphone.<br><br>
								&nbsp;&nbsp;&nbsp;Todo esto analizando a través de la experimentación con la aplicación desarrollada, haciendo pruebas constantemente y agregando algunos eventos especiales, concluyendo que el tiro parabólico mostrado de manera gráfica es algo interesante y entretenido, en especial por todo el trabajo que hay detrás para poder simularlo.</p>
					    	</div>
					  </div>			   		
					</div>
				</div>
			 	<div class="col-lg-4">
			 		<div class="card-deck">
					  	<div class="card">
					    	<img class="card-img-top" src="media/Problema.jpg" alt="Card image cap">
					    	<div class="card-body">
					      		<h5 class="card-title">Definición del problema</h5>
					      		<p class="card-text">&nbsp;&nbsp;&nbsp;Muchas veces el tema de las matemáticas resulta algo difícil de comprender mediante la pura teoría por lo que la mayoría de las personas nos dicen que son tediosas, difíciles de comprender y nos responden con la misma pregunta de siempre “¿Para qué me va a servir esto en la vida diaria?” y tienen razón, es algo tedioso tener que estar haciendo las matemáticas, sin embargo, algo que puede que utilicen más o por lo menos puedan visualizar más en la vida diaria es el tiro parabólico.<br></p>
					    	</div>
						</div>
					</div>
				</div>
			 	<div class="col-lg-4">
			 		<div class="card-deck">
					  	<div class="card">
					    	<img class="card-img-top" src="media/tiro.jpg" alt="Card image cap">
					    	<div class="card-body">
					      		<h5 class="card-title">Justificación</h5>
					      		<p class="card-text">&nbsp;&nbsp;&nbsp;Las matemáticas siempre han sido un tema complicado de comprender ante los alumnos, también es considerado un tema aburrido por el hecho de no comprenderlo, entonces al ser un tema muy largo las matemáticas decidí enfocarme solamente en el tiro parabólico ya que considero que es un tema interesante y un poco complejo por las ecuaciones, dentro de internet no he encontrado un simulador donde la fuerza del tiro sea aplicada por ti mismo en lugar de escribir un número.<br>
								&nbsp;&nbsp;&nbsp;La simulación del tiro parabólico es un tema matemático aplicado en algunos juegos como angry birds, la caida de la bala en algún tanque o un arco, por lo que sería una opción interesante para estudiar, no solo es interesante desde el apartado de los videojuegos si no que también la actualidad el tiro parabólico es algo importante que se implementa en acontecimientos importantes de nuestra época como puede ser el cálculo de lanzamiento de objetos desde un avión, o algo más actual como lo  fue el lanzamiento de space X y el desprendimiento de su motor para caer exactamente en un barco.<br></p>
					    	</div>
						</div>
					</div>			    	
				</div>
		  	</div>	
		  	<br>
		 	<div class="text-center">
	  			<a class="btn btn-lg btn-outline-success" href="/instalacion">INICIAR</a>		    		  
			</div>
			<br>
		</div>		
	</body>
</html>
@endsection
@extends('pie')
