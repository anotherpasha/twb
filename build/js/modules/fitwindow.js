/**
 ** a module to fitting section on window
 **
 */

// Config
var config = {
	element : '.window__fit',
	container : ''
}

 var element = document.querySelectorAll(config.element)
 
 var fitwindow = {
 	getHeight : function() {
 		var height;
 		vh = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

 		_.each(element ,function(element) {
	 		element.style.height = vh + 'px';

 		})

 	},

 	resize: function() {
 		window.addEventListener('resize', function() {
 			fitwindow.getHeight();
 		})
 	},
 
 	init: function() {
 		if(typeof element == undefined || element.length <= 0) {
 			console.log('return')
 			return;
 		}
 		this.getHeight();
 		this.resize();
 	}
 }
 window.onload = fitwindow.init();