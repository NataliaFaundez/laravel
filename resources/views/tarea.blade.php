<!DOCTYPE html>
<html>
<head>
	<title>Tarea</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body >
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-9">
				<form class="navbar-form navbar-left" role="search">
				  <div class="form-group">
				    <input type="text" class="form-control" placeholder="Buscar">
				  </div>
				  <button type="submit" class="btn btn-default">Buscar</button>
				</form>		
			</div>
			<div class="col-md-12">
				<div class="jumbotron">
					<h1>Control de Encuesta </h1>
					<p>El siguiente formulario tiene por objetivo el confi</p>
					<!--este boton no esta sirviendo para nada -->
					<p><a class="btn btn-info btn-lg" href="#" role="button">Leer más</a></p>
				
				</div>
			</div>
		</div>
		<BR>
		<div class="row">
 		 	<div class="col-md-6">
 		 		<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Actores Principales</div>

				  <!-- Table -->
				  <table class="table table-bordered table-hover">
					<tr>
						<th>#</th>
						<th>Actor</th>
						<th>Personaje</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Lea Michele</td>
						<td>Rachel Berry</td>			
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				  	<tr>
				  		<td></td>
				  		<td></td>
				  		<td></td>
				  	</tr>
				  </table>
				</div>	


 		 		
 		 	</div>
 		 	
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<form class="form-horizontal" action="/formulario/form" method="POST">
	  <div class="form-group">
	    <label for="numero1" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-5">
	      <input type="text" name="nombre" class="form-control" placeholder="Ingrese actor/actriz">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="numero2" class="col-sm-2 control-label">Personaje</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" name="personaje" placeholder="Ingrese personaje">
	    </div>
	   </div>
	  <div class="form-group">
	    <label for="numero3" class="col-sm-2 control-label">Prioridad</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" name="prioridad" placeholder="Ingrese numero de importancia">
	    </div>  
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <select name="operacion" class="btn btn-info">
	  		<option value="add">Agregar</option>
	  		<option value="rest">Elimina</option>
	  		<option value="cambio">Modificar</option>
	  		
	  		
		</select>
		  </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-info">Mostrar</button>

	    </div>
	  </div>
<!--en resultado deberia refrescar la tabla que esta al costado -->
	@if (isset($result))
	<div class="form-group">
	    <label for="numero2" class="col-sm-2 control-label">El resultado es</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" value="{{$result}}" placeholder=" ">
	    </div>
	  </div>
	<!--El resultado es:{{$result}}-->
	@endif

	@if ( isset($errors) )
		@if (count($errors) > 0)

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
			    <div class="alert alert-info">
			        <ul>
			            @foreach ($errors as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
		
		    </div>
		</div>
		@endif
	@endif

	</form>

				  </div>
				</div>		 		
 		 	</div>
 		</div>
		
	
</body>
</html>