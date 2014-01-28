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
		    <tr id="headerTable">\
		    	<th>#ID</th>\
		    	<th>#Nombre</th>\
		    	<th>#RFC</th>\
		    	<th>#Telefono</th>\
		    </tr>\
		  </table>\
		</div>',
	prototype:{
		init : function(config){
			Widget.prototype.init.call(this,config);

			tableEl 			= this.element.find('table');	
			tableElFiles 		= this.element.find('.dataTable');
			this.insertCustomer = $('#insert_customer')
			this._bindEvents();

			return this;
		},

		_bindEvents : function() {
			tableElFiles.click(this.getValuesFiles.bind(this));
		},

		getValuesFiles : function(event){
			//console.log(event.currentTarget.id);
			
			//this.inputIdPerfil   = $('#formRecibos').find('#id_perfil');
			this.inputNombre     = $('#formRecibos').find('input[name=nombre]');
			this.inputCalle      = $('#formRecibos').find('input[name=calle]');
			this.inputColonia  	 = $('#formRecibos').find('input[name=colonia]');
			this.inputDelegacion = $('#formRecibos').find('input[name=delegacion]');
			this.inputCodigoP    = $('#formRecibos').find('input[name=codigo_postal]');
			this.inputRfc        = $('#formRecibos').find('input[name=rfc]');
			this.folio	         = $('#formRecibos').find('input[name=folio]');
			this.fecha			 = $('#formRecibos').find('input[name=fecha_factura]');
			this.concepto        = $('#formRecibos').find('input[name=concepto]');
			this.txtAconcepto	 = $('#formRecibos').find('#concepto');

			this.loadDataForm( { id:event.currentTarget.id } );

			$('#myModal').modal('hide')


		},

		loadDataForm : function (data) {
			$.ajax({
				  context: this,
				  type: "POST",
				  url: "http://localhost/fee4free/index.php/customers/getData",
				  data :{ params: data }, 
				  dataType: "json",
				})
				  .done(function( data ) {

					  	if(data[0].success){

					  		this.inputNombre.val( data[0].nombre )
							this.inputCalle.val( data[0].calle ) 
							this.inputColonia.val( data[0].colonia )
							this.inputDelegacion.val( data[0].delegacion )
							this.inputCodigoP.val( data[0].codigo_postal )
							this.inputRfc.val( data[0].rfc )					
							this.txtAconcepto.val( 'Honorarios' ) //base de datos 
					 	
					 	}				 				 

		          });
		},

		loadGrid : function(){			

			$.ajax({
				  context: this,
				  type: "POST",
				  url: "http://localhost/fee4free/index.php/customers/getData",	
				  dataType: "json",
				})
				  .done( function( data ) {
				  		this.element.find('table tr').not('#headerTable').remove();
				  		if(data[0].success){				
								list = "<% _.each(customer, function(value) { %> <tr class='dataTable' id='<%= value.id %>' ><td><%= value.id %></td><td><%= value.nombre %></td><td><%= value.rfc %></td><td><%= value.telefono %></td></tr> <% }); %>";
								renderEl = _.template(list, {customer:data});								
								tableEl.append(renderEl);
								tableElFiles = this.element.find('.dataTable');
								this._bindEvents();
				  		}
		          });



		}
	}
});