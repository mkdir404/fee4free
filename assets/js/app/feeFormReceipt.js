/*
* Form del recibo (se espera que genere un pdf y gurade los datos del recibo en una tabla);
*/
Class(UI,'feeFormReceipt').inherits(Widget)({
	HTML : '<div class="panel panel-default">\
			  <div class="panel-heading">\
				<i class="fa fa-file-text-o fa-3x" style="float:left; color:#41a096; padding-right:10px"></i>\
				<h4 style="color:#41a096;">Recibo de honorario</h4>\
			 </div>\
			  <div class="panel-body">\
			    <form id="formRecibos">\
				  <div class="form-group">\
				    <input type="text" class="form-control" name="nombre"  placeholder="Nombre / Empresa ">\
				  </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="calle"  placeholder="Calle">\
				 </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="colonia" placeholder="Colonia">\
				 </div>\
				 <div class="form-group">\
				    <input type="text" class="form-control" name="delegacion" placeholder="Delegacion/Municipio">\
				 </div>\
				 <div class="form-group col-xs-6 ">\
				    <input type="text" class="form-control" name="codigo_postal" placeholder="Codigo Postal">\
				 </div>\
				 <div class="form-group col-xs-6 ">\
				    <input type="text" class="form-control" name="rfc" placeholder="RFC">\
				 </div>\
				 <div class="form-group col-xs-6 ">\
				    <input type="text" class="form-control" name="folio" placeholder="Folio">\
				 </div>\
				 <div class="form-group col-xs-6 ">\
				    <input type="text" class="form-control" name="fecha"placeholder="Fecha">\
				 </div>\
				 <div class="form-group">\
				 	<textarea class="form-control" rows="5" name="concepto" placeholder ="Concepto"></textarea>\
				 </div>\
				 <div class="form-group col-xs-3 bottomSpace" style="margin-left:50%;" >\
				    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad"  >\
				    <input type="text" class="form-control" name="iva" placeholder="I.V.A"  >\
				    <input type="text" class="form-control" name="sub_total" placeholder="Sub-Total"  >\
				 </div>\
				 <div class="form-group col-xs-3 bottomSpace">\
				    <input type="text" class="form-control" name="iva_ret" placeholder="I.V.A Retenido"  >\
				    <input type="text" class="form-control" name="isr" placeholder="I.S.R"   >\
				    <input type="text" class="form-control" name="total_pagado" placeholder="Total Pagado">\
				 </div>\
				 <label style="color:#333;font-size:11px;">Para realizar el calculo de su pago , debe poner la cantidad neta a pagar en el campo "Total pagado" y presiona enter.</label>\
				<div class="form-group col-xs-3" style="clear:both;">\
				  <button type="submit" class="btn btn-default" id="guardar" >Guardar</button>\
				  <button class="btn btn-danger">Cancelar</button>\
				</div>\
				</form>\
			  </div>\
			</div>',
	prototype:{
		init : function(){
			Widget.prototype.init.call(this);

			this.formReceipt = this.element.find('#formRecibos');
			this.itemSubmitEl = this.element.find('#guardar');

			this.element.fadeIn( "slow" );
			
			this._bindEvents();

			return this;
		},

		_bindEvents :function() {
			this.itemSubmitEl.click( this._sendInfo.bind(this) ); 
		},

		_getValues : function(event){
			return this.formReceipt.serialize();
		},

		_sendInfo : function(event) {
			
			$.ajax({
				  type: "POST",
				  url: "http://localhost/fee4free/index.php/alta/getValues",
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





