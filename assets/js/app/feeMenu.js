/*
* Nav-Menu
*/
Class(UI,'feeMenu').inherits(Widget)({
	HTML : '<nav class="navbar navbar-default " role="navigation">\
			    <ul class="nav navbar-nav">\
			      <li><a href="#">Altas</a></li>\
			      <li><a href="#">Perfil</a></li>\
			      <li class="dropdown">\
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recibos<b class="caret"></b></a>\
			        <ul class="dropdown-menu">\
			          <li><a href="#">Nuevo</a></li>\
			          <li><a href="#">Administrador</a></li>\
			        </ul>\
			      </li>\
			    </ul>\
			 	<form class="navbar-form navbar-right">\
			 	  <div class="form-group">\
				    <input type="text" class="form-control" placeholder="User">\
				  </div>\
				  <div class="form-group">\
				    <input type="text" class="form-control" placeholder="Password">\
				  </div>\
				  <button type="submit" class="btn btn-default">Entrar</button>\
				  <button type="submit" class="btn btn-info">Registro</button>\
				</form>\
		    </nav>',
	prototype:{
		init : function(){
			
			Widget.prototype.init.call(this);
			
			/*items element*/
			
			this.itemEl = this.element.find('ul.nav li a ');
			
			/*items events*/
			
			this._bindEvents();
			
			return this;
		},

		_bindEvents : function(){
			this.itemEl.click( this._onAction.bind(this) );
		},
		_onAction :function(event){

			/*Clean Wrap**/
			$('.wrap-container').empty();

			/*Eliminar espacio en blanco esto puede ser en un monento dado global*/

			if(!String.prototype.trim){
				String.prototype.trim = function(){
					return this.replace(/^\s+|\s+$/g, '');
				};
			}

			/*****/

			valueEl = event.currentTarget.innerText;
			valueEl.trim();

			console.log(valueEl);

			switch(valueEl){
				case 'Altas' : //feeFormAltas
					signupForm = new UI.feeFormSignup();
					signupForm.render( $('.wrap-container') );
					break;
				case 'Perfil' :
					profileUser = new UI.feeProfileUser();
					profileUser.render( $('.wrap-container') );
					break;
				case 'Recibos':
					receiptForm = new UI.feeFormReceipt();
					receiptForm.render( $('.wrap-container') );
					break;			

			}

			event.preventDefault()
		}
	}
});