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
		    <form >\
			  <div class="form-group">\
			  	<input type="hidden" id="id_perfil">\
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
			
			this.inputIdPerfil   = this.element.find('#id_perfil');
			this.inputNombre     = this.element.find('input[name=nombre]');
			this.inputCalle      = this.element.find('input[name=calle]');
			this.inputColonia  	 = this.element.find('input[name=colonia]');
			this.inputDelegacion = this.element.find('input[name=delegacion]');
			this.inputCodigoP    = this.element.find('input[name=codigo_postal]');
			this.inputRfc        = this.element.find('input[name=rfc]');
			this.inputTelefono   = this.element.find('input[name=telefono]');
			this.leyenda         = this.element.find('input[name=leyenda]');
			this.concepto        = this.element.find('input[name=concepto]');
			this.txtAleyenda     = this.element.find('#leyeda');
			this.txtAconcepto	 = this.element.find('#concepto');
			this.itemFile 	  	 = this.element.find('#myfile');
			this.itemSubmitEl 	 = this.element.find('#guardar');

			this.element.fadeIn( "slow" );

			this._bindEvents();

			this.loadData();
			
			return this;
			
		},
		_bindEvents : function(){
			this.itemSubmitEl.click( this._sendInfo.bind(this) );
		},

		_getValues : function(){
			
			objectValues = {
				
				'nombre'        : this.inputNombre.val() ,
				'calle'         : this.inputCalle.val() ,
				'colonia'       : this.inputColonia.val() ,
				'delegacion'    : this.inputDelegacion.val(),
				'codigo_postal' : this.inputCodigoP.val(),
				'rfc'		    : this.inputRfc.val(),
				'telefono'      : this.inputTelefono.val(),
				'leyenda'	    : this.txtAleyenda.val(),
				'concepto'	    : this.txtAconcepto.val(),


			}

			if(this.inputIdPerfil.val()!=''){ objectValues.idPerfil = this.inputIdPerfil.val(); }
			
			return objectValues;
		},

		_sendInfo : function(event){

			this.itemFile.upload('http://localhost/fee4free/index.php/profile/setPerfil',this._getValues(),
				function(msg){
					alert( "Data Saved: " + msg );
				}
			);

			//console.log ( this._getValues() );

			event.preventDefault()	
		},

		loadData : function(){

			$.ajax({
				  context: this,
				  type: "POST",
				  url: "http://localhost/fee4free/index.php/profile/getData",			
				  dataType: "json",
				})
				  .done(function( data ) {

				  	console.log(data);

				  	if(data.success){

				  		/*set all values*/

					    this.inputIdPerfil.val(data.id);
					    this.inputNombre.val(data.nombre);
						this.inputCalle.val(data.calle);
						this.inputColonia.val(data.colonia); 
						this.inputDelegacion.val(data.delegacion);
						this.inputCodigoP.val(data.codigo_postal);
						this.inputRfc.val(data.rfc); 
						this.inputTelefono.val(data.telefono); 				
						this.txtAleyenda.val(data.leyenda);
						this.txtAconcepto.val(data.concepto_recibos);

						/*change de button class*/
						this.itemSubmitEl.removeClass();
				 		this.itemSubmitEl.text('Actualizar').addClass('btn btn-warning');

				 	}

				 	
				  

				  });
		}
	}
});