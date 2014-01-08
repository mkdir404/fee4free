<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Laravel PHP Framework</title>

	<!--JQuery-->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

	<!-- Font awesome -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<!-- Costum Style CSS-->

	<style type="text/css">
	
		.bottomSpace input{
			margin-bottom: 3px;
		}

		.container{
			width: 1024px;
		}

	</style>


</head>
<body>
	
	<nav class="navbar navbar-inverse " role="navigation">	 
	    <ul class="nav navbar-nav">
	      <li><a href="/honorarios/laravel/public/alta">Altas</a></li> <!--class="active"-->
	      <li><a href="#">Perfil</a></li>
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recibos <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Nuevo</a></li>
	          <li><a href="#">Administrador</a></li>
	        </ul>
	      </li>
	    </ul>	   
	 	<form class="navbar-form navbar-right">
	 	  <div class="form-group">
		    <input type="text" class="form-control" placeholder="User">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-default">Entrar</button>
		  <button type="submit" class="btn btn-info">Registro</button>
		</form>
	</nav>

	<div class="container">

		<h3>Alta Usuario / Empresa</h3>

		<div class="panel panel-default">
		  <div class="panel-heading"> 
			<i class="fa fa-user fa-3x" style="float:left; color:#41a096; padding-right:10px"></i>
			<h4 style="color:#41a096;">Alta Empresa</h4>
		</div>
		  <div class="panel-body">	    
		    <form role="form">
			  <div class="form-group">
			    <input type="text" class="form-control"  placeholder="Nombre / Empresa">
			  </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Calle">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Colonia">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Delegacion/Municipio">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Codigo Postal">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="RFC">
			 </div>	
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Telefono">
			 </div>		
			  <button type="submit" class="btn btn-default">Guardar</button>
			  <button class="btn btn-danger">Cancelar</button>
			</form>

		  </div>
		</div>

		<h3>Perfil Usuario</h3>

		<div class="panel panel-default">
		  <div class="panel-heading"> 
			<i class="fa fa-user fa-3x" style="float:left; color:#41a096; padding-right:10px"></i>
			<h4 style="color:#41a096;">Perfil Usuario</h4>
		</div>
		  <div class="panel-body">	    
		    <form role="form">
			  <div class="form-group">
			    <input type="text" class="form-control"  placeholder="Nombre / Empresa">
			  </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Calle">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Colonia">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Delegacion/Municipio">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Codigo Postal">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="RFC">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Telefono">
			 </div>	
			 <div class="form-group">
			    <label for="exampleInputFile">File input</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Selecciona tu biocodigo que te proporciona el SAT.</p>
			  </div>
			  <div class="form-group">
			 	<textarea class="form-control" rows="5" placeholder ="Leyenda"></textarea>
			 </div>	
			  <button type="submit" class="btn btn-default">Guardar</button>
			  <button class="btn btn-danger">Cancelar</button>
			</form>

		  </div>
		</div>

		<h3>Honorario</h3>	

		<div class="panel panel-default">
		  <div class="panel-heading"> 
			<i class="fa fa-file-text-o fa-3x" style="float:left; color:#41a096; padding-right:10px"></i>
			<h4 style="color:#41a096;">Recibo de honorario</h4>
		</div>
		  <div class="panel-body">	    
		    <form role="form">
			  <div class="form-group">
			    <input type="text" class="form-control"  placeholder="Empresa">
			  </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Calle">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Colonia">
			 </div>
			 <div class="form-group">
			    <input type="text" class="form-control" placeholder="Delegacion/Municipio">
			 </div>
			 <div class="form-group col-xs-6 ">
			    <input type="text" class="form-control" placeholder="Codigo Postal">
			 </div>
			 <div class="form-group col-xs-6 ">
			    <input type="text" class="form-control" placeholder="RFC">
			 </div>
			 <div class="form-group col-xs-6 ">
			    <input type="text" class="form-control" placeholder="Folio">
			 </div>
			 <div class="form-group col-xs-6 ">
			    <input type="text" class="form-control" placeholder="Fecha">
			 </div>
			 <div class="form-group">
			 	<textarea class="form-control" rows="5" placeholder ="Concepto"></textarea>
			 </div>
			 <div class="form-group col-xs-3 bottomSpace" style='margin-left:50%;' >
			    <input type="text" class="form-control" placeholder="Cantidad" disabled >
			    <input type="text" class="form-control" placeholder="I.V.A" disabled >
			    <input type="text" class="form-control" placeholder="Sub-Total" disabled >
			 </div>		 
			 <div class="form-group col-xs-3 bottomSpace">
			    <input type="text" class="form-control" placeholder="I.V.A Retenido" disabled >
			    <input type="text" class="form-control" placeholder="I.S.R"  disabled >
			    <input type="text" class="form-control" placeholder="Total Pagado">
			 </div>

			 <label style="color:#333;font-size:11px;">Para realizar el calculo de su pago , debe poner la cantidad neta a pagar en el campo "Total pagado" y presiona enter.</label>	

			<div class="form-group col-xs-3" style="clear:both;"> 
			  <button type="submit" class="btn btn-default">Guardar</button>
			  <button class="btn btn-danger">Cancelar</button>
			</div>  
			</form>

		  </div>
		</div>	

		<h3>Grid Empresa</h3>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">

			<div class="input-group">
		      <div class="input-group-btn">
		        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Buscar <span class="caret"></span></button>
		        <ul class="dropdown-menu">
		          <li><a href="#">ID</a></li>
		          <li><a href="#">Nombre</a></li>
		          <li><a href="#">RFC</a></li>
		          <!--<li class="divider"></li>-->
		          <li><a href="#">Codigo Postal</a></li>
		          <li><a href="#">Telefono</a></li>
		        </ul>
		      </div><!-- /btn-group -->
		      <input type="text" class="form-control" placeholder="Buscar..." >
		    </div><!-- /input-group -->

		  </div> <!--/panel-heading-->

		  <!-- Table -->
		  <table class="table table-striped  table-hover">
		    <tr>
		    	<th>#ID</th>
		    	<th>#Nombre</th>
		    	<th>#RFC</th>
		    	<th>#Telefono</th>
		    </tr>
		    <tr>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    </tr>
		    <tr>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    </tr>
		    <tr>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    </tr>
		    <tr>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    </tr>
		    <tr>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    </tr>
		    <tr>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    </tr>
		    <tr>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    </tr>
		    <tr>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    	<td>sample table</td>
		    </tr>
		  </table>

		  <ul class="pagination" style="float:right;">
			  <li><a href="#">&laquo;</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&raquo;</a></li>
		 </ul>

		</div>
	</div>	
</body>
</html>
