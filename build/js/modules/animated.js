(function( global ) {

	 var Animated = function (selector) {

	 	this.selector =  document.querySelectorAll(selector);
	 	return this;
	 };

	Animated.prototype.bounce = function(coorX, coorY) {
		var tween =TweenMax.from(this.selector, 1, {
			x: coorX,
			y: coorY,
			ease: Bounce.easeOut
		})
		return tween;
	};

	Animated.prototype.fading = function(time) {
		var tween = TweenMax.fromTo(this.selector, time, {
			opacity: 0
		},
		{
			opacity: 1
		});
		return tween;

	};


	var animated = function(selector, context) {
		return new Animated(selector, context);

	}



	global.animated = animated;


})( this );


