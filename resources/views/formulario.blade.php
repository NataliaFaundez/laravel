<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<Br><Br>
<form class="form-horizontal" action="/formulario/form" method="POST">
	  <div class="form-group">
	    <label for="numero1" class="col-sm-2 control-label">numero 1</label>
	    <div class="col-sm-5">
	      <input type="text" name="n1" class="form-control" placeholder="Ingrese numero">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="numero2" class="col-sm-2 control-label">numero 2</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" name="n2" placeholder="Ingrese numero">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <select name="operacion" class="btn btn-info">
	  		<option value="sumar">sumar</option>
	  		<option value="restar">restar</option>
	  		<option value="multiplicar">multiplicar</option>
	  		<option value="dividir">dividir</option>
		</select>
		  </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-info">Calcular</button>

	    </div>
	  </div>

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



	
	
	<!-- esto es una linea roja <hr> es linea sola <HR align="CENTER" size="2" width="400" color="Red" noshade>-->



</body>
</html>





