/*
**

This file contains all touch related event listeners and functions

**
*/

/* This code prevents the webview from moving on a swipe */
preventDefaultScroll = function(evt) {
	evt.preventDefault();
	window.scroll(0,0);
	return false;
};

$(document).bind('touchmove', preventDefaultScroll);
	