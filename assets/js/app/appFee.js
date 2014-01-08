UI = {};
/*
* Markup
*/
Class(UI,'appFee').inherits(Widget)({
	HTML : '<div>\
				<div class="menu-nav"></div>\
				<div class="wrap-container"></div>\
			</div>',
	ELEMENT_CLASS : 'wrap-main',
	prototype:{
		init : function(){
			Widget.prototype.init.call(this);		

			this.menuEl  = this.element.find('.menu-nav');
			this.feeMenu = new UI.feeMenu();
			this.feeMenu.render(this.menuEl);

			return this;
		}
	}
});