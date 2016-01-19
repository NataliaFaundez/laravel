
@extends('layouts.app')

@section('content')
 
<div class="container">
	<div class="row">

		<div class="panel panel-primary">
		  <div class="panel-body">
    
			<form class="form-horizontal">
			  <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Folio</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="folio" placeholder="ingrese nº de folio ">
			    </div> 
			    <div class="col-sm-1">
			      <input type="text" class="form-control" name="folio" placeholder=" ">
			    </div>  			  
			  </div>
			  
			  <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Rut Encuestador</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="rut_encuestador" placeholder=" ">
			    </div>
			    <div class="col-sm-1">
			      <input type="text" class="form-control" name="folio" placeholder=" ">
			    </div>  	
	 		 </div>

	 		  <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Región</label>
			    <div class="col-sm-5">
			      
			      <div class="btn-group">
					  <!--<button type="button" class="btn btn-default"></button>-->
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">I.Tarapacá</a></li>
					    <li><a href="#">II.Antofagasta</a></li>
					    <li><a href="#">III.Atacama</a></li>
					    <li><a href="#">IV.Coquimbo</a></li>
					    <li><a href="#">V.Valparaiso</a></li>
					    <li><a href="#">RM.Metropolitana de Santiago</a></li>
					    <li><a href="#">VI.O'Higgins</a></li>
					    <li><a href="#">VII.Maule</a></li>
					    <li><a href="#">VIII.Bío-Bío</a></li>
					    <li><a href="#">IX.La Araucanía</a></li>
					    <li><a href="#">X.Los Lagos</a></li>
					    <li><a href="#">XI.Aysén</a></li>
					    <li><a href="#">XII.Magallanes</a></li>
					    <li><a href="#">VIV.Los Ríos</a></li>
					    <li><a href="#">XV.Arica y Parinacota</a></li>			    
					  </ul>
					</div>



			    </div>
			  </div>

  			  <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Direccion</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" placeholder=" ">
			      <span class="help-block">TODO CON MAYUSCULAS</span>
			    </div>
	 		  </div>

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Numero</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control"  placeholder=" ">
			    </div>
	 		 </div>

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Block</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" placeholder=" ">
			    </div>
	 		 </div>

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Depto/Casa</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" placeholder=" ">
			    </div>
	 		 </div>

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Nº de telefono</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" placeholder=" ">
			    </div>
	 		 </div>

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Celular</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" placeholder=" ">
			    </div>
	 		 </div>

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Contacto1</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" placeholder="Ingrese Nombre ">
			      <span class="help-block">TODO CON MAYUSCULAS</span>
			    </div>
	 		 </div>

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Contacto2</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" placeholder="Ingrese Nombre ">
			      <span class="help-block">TODO CON MAYUSCULAS</span>
			    </div>
	 		 </div>

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Ingreso Familiar</label>
			    <div class="col-sm-5">
			      <div class="btn-group">
					  <button type="button" class="btn btn-default">  </button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#"> menor a 300.000</a></li>
					    <li><a href="#">entre 300.000y 500.000</a></li>
					    <li><a href="#">entre 500.000 y 700.000</a></li>
					    <li><a href="#">entre 700.000 y 900.000</a></li>
					    <li><a href="#">sobre 900.000</a></li>					    	    
					  </ul>
					</div>
			    </div>
	 		 </div>

	 		 <div class="form-group">
	 		 	<label for="" class="col-sm-2 control-label">Vehiculos</label>
			    <div class="col-sm-5">
		 		 <label class="checkbox-inline">
				 <input type="checkbox" id="inlineCheckbox1" value="automovil"> automovil
				 </label>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox2" value="camioneta"> camioneta
				</label>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox3" value="moto"> moto
				</label>	
	 		 </div>
	 		 </div>
	 		 

	 		 <div class="form-group">
			    <label for="" class="col-sm-2 control-label">Observacion</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" placeholder=" ">
			      <span class="help-block">TODO CON MAYUSCULAS</span>
			    </div>
	 		 </div>

	 		 <div class="row">
				  <div class="col-md-6 col-md-offset-3">
		 		  <button type="button" class="btn btn-primary btn-lg">Ingresar Encuesta</button>
			 </div> 
			 </div>
	 		 



</form>

  </div>
</div>


		</div>
	</div>

</nav>	
 @endsection

