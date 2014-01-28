/*
* Modal Windows
*/
Class(UI,'windowsModal').inherits(Widget)({
	HTML : '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">\
			  <div class="modal-dialog">\
			    <div class="modal-content">\
			      <div class="modal-header">\
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\
			        <h4 class="modal-title" id="myModalLabel">Select customer</h4>\
			      </div>\
			      <div class="modal-body">\
			      </div>\
			      <div class="modal-footer">\
			      </div>\
			    </div>\
			  </div>\
			</div>',
	prototype:{
		init : function(config){
			Widget.prototype.init.call(this,config);		

			this.buttonEl  = this.element.find('#myModal');
			this.modalBody = this.element.find('.modal-body');

			/*this method will pass all html , thad we need to render*/

			gridUsers = new UI.grid();
			gridUsers.render(this.modalBody);

			this._bindEvents();

			return this;
		},

		_bindEvents : function(){
			this.buttonEl.click( this.launchWindows.bind(this) );
		},
		launchWindows :function(){
			gridUsers.loadGrid();
			gridUsers.render(this.modalBody);

		}
	}
});