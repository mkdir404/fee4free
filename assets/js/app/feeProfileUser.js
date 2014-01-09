/*
* Form Profile Users
*/
Class(UI,'feeProfileUser').inherits(Widget)({
	HTML : '<div class="panel panel-default">\
		  <div class="panel-heading">\
			<i class="fa fa-user fa-3x" style="float:left; color:#41a096; padding-right:10px"></i>\
			<h4 style="color:#41a096;">Perfil Usuario</h4>\
		</div>\
		  <div class="panel-body">\
		    <form enctype="multipart/form-data">\
			  <div class="form-group">\
			    <input type="text" class="form-control" name="nombre" placeholder="Nombre / Empresa">\
			  </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control"  name="calle"  placeholder="Calle">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" name="colonia"  placeholder="Colonia">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control"  name="delegacion"  placeholder="Delegacion/Municipio">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" name="codigo_postal"  placeholder="Codigo Postal">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" name="rfc"  placeholder="RFC">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" name="telefono"  placeholder="Telefono">\
			 </div>\
			 <div class="form-group">\
			    <input type="file" id="myfile">\
			    <p style="font-size:10px" class="help-block">Selecciona tu biocodigo que te proporciona el SAT.</p>\
			  </div>\
			  <div class="form-group">\
			 	<textarea class="form-control" rows="5" id="leyeda" name="leyenda"  placeholder ="Leyenda"></textarea>\
			 </div>\
			 <div class="form-group">\
				 	<textarea class="form-control" rows="5" id="concepto" name="concepto" placeholder ="Concepto"></textarea>\
				 	<p style="font-size:10px" class="help-block">Puedes manejar un concepto por defecto.</p>\
				 	<p style="font-size:10px" class="help-block">Nota: Al momento de generar el recibo lo puedes cambiar.</p>\
			</div>\
			  <button type="submit" class="btn btn-default" id="guardar">Guardar</button>\
			  <button class="btn btn-danger">Cancelar</button>\
			</form>\
		  </div>\
		</div>',
	prototype:{
		init : function(){
			Widget.prototype.init.call(this);	

			this.inputItemsEl = this.element.find('input');
			this.txtAleyenda  = this.element.find('#leyeda');
			this.txtAconcepto = this.element.find('#concepto');
			this.itemFile 	  = this.element.find('#myfile');
			this.itemSubmitEl = this.element.find('#guardar');

			this.element.fadeIn( "slow" );

			this._bindEvents();
			
			return this;
			
		},
		_bindEvents : function(){
			this.itemSubmitEl.click( this._sendInfo.bind(this) );
		},

		_getValues : function(){

			//console.log(this.textArea);
			
			objectValues = {
				
				'nombre'       : this.inputItemsEl[0].value,
				'calle'        : this.inputItemsEl[1].value,
				'colonia'      : this.inputItemsEl[2].value,
				'delegacion'   : this.inputItemsEl[3].value,
				'codigoPostal' : this.inputItemsEl[4].value,
				'rfc'		   : this.inputItemsEl[5].value,
				'telefono'     : this.inputItemsEl[6].value,
				'leyenda'	   : this.txtAleyenda.val(),
				'concepto'	   : this.txtAconcepto.val()

			}
			
			return objectValues;
		},

		_sendInfo : function(event){

			this.itemFile.upload('http://localhost/fee4free/index.php/profile/insertProfile',this._getValues(),
				function(msg){
					alert( "Data Saved: " + msg );
				}
			);
			event.preventDefault()
		}
	}
});