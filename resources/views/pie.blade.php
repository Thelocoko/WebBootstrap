@section('pief')
<!DOCTYPE html>
<html>
	<body>
		<footer class="page-footer bg-secondary">
			<div class="bg-success">
				<div class="container">
					<div class="row py-4 d-flex align-items-center">
						<div class="col-md-12 text-center">
							<a href="http://www.facebook.com/thelocoko" target="_blank"><i class="social fab fa-facebook-square text-light mr-4"></i></a>
							<a href="http://www.twitter.com/condeoc" target="_blank"><i class="social fab fa-twitter text-light mr-4"></i></a>
							<a href="https://instagram.com/thelocoko" target="_blank"><i class="social fab fa-instagram text-light mr-4"></i></a>
							<a href=""data-toggle="modal" data-target="#mcorre"><i class="social far fa-envelope text-light mr-4"></i></a>
							<a href="" data-toggle="modal" data-target="#mtel"><i class="social fas fa-phone-square-alt text-light mr-4"></i></a>
						</div>
					</div>
				</div>
			</div>			
			<div class="container text-center text-md-left mt-5">
				<div class="row">					
					<div class="col-md-12 mx-auto mb-4">
						<h4 class="text-light font-weight-bold">Sobre el autor:</h6>
						<hr class="bg-success">
						<h2 class="text-light">Elias Conde Reyes</h2>
						<h3 class="text-light">Grado en Ingenieria en Sistemas Computacionales</h3>
						<h4 class="text-light">Tutor: Victor Hugo de la O Martinez</h4>
					</div>
				</div>
			</div>
		<div class="modal fade" id="mcorre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			   	<div class="modal-content">
			    	<div class="modal-header">
			       		<h5 class="modal-title text-secondary text-center" id="exampleModalLabel">Correo</h5>
			       		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			       			<span aria-hidden="true">&times;</span>
			       		</button>
			    	</div>
			    	<div class="modal-body text-secondary text-center">thelocoko@outlook.es</div>			      
			    	<div class="modal-footer">
        				<a class="btn btn-success" href="mailto:thelocoko@outlook.es">Enviar correo</a>
        				<button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
        			</div>
			   	</div>
			</div>
		</div>
		<div class="modal fade" id="mtel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			   	<div class="modal-content">
			    	<div class="modal-header">
			       		<h5 class="modal-title text-secondary text-center" id="exampleModalLabel">Telefono</h5>
			       		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			       			<span aria-hidden="true">&times;</span>
			       		</button>
			    	</div>
			    	<div class="modal-body text-secondary text-center">+52 1 55 3788 3946</div>			      
			    	<div class="modal-footer">
        				<button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
        			</div>
			   	</div>
			</div>
		</div>
		</footer>
	</body>
</html>
@endsection('pief')