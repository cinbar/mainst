/*
**
	Class for controlling bottom block for Send Message, Share, Reply of app

	Usage:          			
	
**
*/

function Msgfooter()
{
	this.el  = $('#msgfooter');
	this.visible = false;
	
	this.init = function()
	{
		this.hide();
	}
	
	this.show = function(){
		this.el.show();
		this.visible = true;
		layout.resize();
	}
	
	// method for hiding topbar
	this.hide = function(){
        this.el.hide();
		this.visible = false;
		layout.resize();
	}
	
	this.init();
}
