/*
* Grid
*/
Class(UI,'grid').inherits(Widget)({
	HTML : '<div class="panel panel-default">\
		  <!-- Default panel contents -->\
		  <div class="panel-heading">\
			<div class="input-group">\
		      <div class="input-group-btn">\
		        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Buscar <span class="caret"></span></button>\
		        <ul class="dropdown-menu">\
		          <li><a href="#">ID</a></li>\
		          <li><a href="#">Nombre</a></li>\
		          <li><a href="#">RFC</a></li>\
		          <!--<li class="divider"></li>-->\
		          <li><a href="#">Codigo Postal</a></li>\
		          <li><a href="#">Telefono</a></li>\
		        </ul>\
		      </div><!-- /btn-group -->\
		      <input type="text" class="form-control" placeholder="Buscar..." >\
		    </div><!-- /input-group -->\
		  </div> <!--/panel-heading-->\
		  <!-- Table -->\
		  <table class="table table-striped  table-hover">\
		    <tr>\
		    	<th>#ID</th>\
		    	<th>#Nombre</th>\
		    	<th>#RFC</th>\
		    	<th>#Telefono</th>\
		    </tr>\
		    <tr>\
		    	<td>sample table</td>\
		    	<td>sample table</td>\
		    	<td>sample table</td>\
		    	<td>sample table</td>\
		    </tr>\
		  </table>\
		</div>',
	prototype:{
		init : function(config){
			Widget.prototype.init.call(this,config);
			return this;
		},

		loadGrid : function(){

			$.ajax({
				  context: this,
				  type: "POST",
				  url: "http://localhost/fee4free/index.php/profile/getData",			
				  dataType: "json",
				})
				  .done( function( data ) {									 				 

		          });



		}
	}
});