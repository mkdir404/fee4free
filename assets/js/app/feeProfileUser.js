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
			    <input type="text" class="form-control"  placeholder="Nombre / Empresa">\
			  </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" placeholder="Calle">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" placeholder="Colonia">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" placeholder="Delegacion/Municipio">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" placeholder="Codigo Postal">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" placeholder="RFC">\
			 </div>\
			 <div class="form-group">\
			    <input type="text" class="form-control" placeholder="Telefono">\
			 </div>\
			 <div class="form-group">\
			    <input type="file" id="myfile">\
			    <p class="help-block">Selecciona tu biocodigo que te proporciona el SAT.</p>\
			  </div>\
			  <div class="form-group">\
			 	<textarea class="form-control" rows="5" placeholder ="Leyenda"></textarea>\
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
			this.textArea 	  = this.element.find('textarea');
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
				'leyenda'	   : this.textArea.val()

			}
			
			return objectValues;
		},

		_sendInfo : function(event){

			this.itemFile.upload('http://localhost/fee4free/index.php/alta/getValues',this._getValues(),
				function(msg){
					alert( "Data Saved: " + msg );
				}
			);
			event.preventDefault()
		}
	}
});