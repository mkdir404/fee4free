/*
* signup users 
*/

Class(UI,'feeFormSignup').inherits(Widget)({
	HTML : '<div class="panel panel-default">\
			  <div class="panel-heading">\
				<i class="fa fa-user fa-3x" style="float:left; color:#41a096; padding-right:10px"></i>\
				<h4 style="color:#41a096;">Alta Empresa</h4>\
			</div>\
			  <div class="panel-body">\
			    <form role="form" id="formSignup">\
				  <div class="form-group">\
				    <input type="text" class="form-control" name="nombre" placeholder="Nombre / Empresa">\
				  </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="calle" placeholder="Calle">\
				 </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="colonia" placeholder="Colonia">\
				 </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="delegacion" placeholder="Delegacion/Municipio">\
				 </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="codigo_postal" placeholder="Codigo Postal">\
				 </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="rfc" placeholder="RFC">\
				 </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="telefono" placeholder="Telefono">\
				 </div>\
				  <button type="submit" class="btn btn-default" id="guardar">Guardar</button>\
				  <button class="btn btn-danger">Cancelar</button>\
				</form>\
			  </div>\
			</div>',
	prototype:{
		init : function(){
			Widget.prototype.init.call(this);

			/*items element*/
			
			this.inputItemsEl = this.element.find('input');
			this.itemSubmitEl = this.element.find('#guardar');
			this.formSignup   = this.element.find('#formSignup');

			this.element.fadeIn( "slow" );
			
			/*items events*/
			
			this._bindEvents();

			return this;
		},

		_bindEvents : function(){

			this.itemSubmitEl.click( this._sendInfo.bind(this) ); 

		},

		_getValues : function(){
			return this.formSignup.serialize();
		},

		_sendInfo : function(event) {
			
			$.ajax({
				  type: "POST",
				  url: "http://localhost/fee4free/index.php/customers/insertCustomer",
				  data: this._getValues(),
				  dataType: "json",
				})
				  .done(function( msg ) {
				      console.log(msg);
				  });
			
			event.preventDefault();
		}
    }

});