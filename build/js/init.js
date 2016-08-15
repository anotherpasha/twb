
window.onload = function () {


	var timeline = new TimelineMax();
	var decor = {
		land : "#land",
		tree: {
			small: "#tree-small",
			grass: '#tree-grass',
			big: '#tree-big'
		},
		cloud: "#cloud"
	};

	


	timeline.add(animated(decor.land).bounce(-200, 200))
			.add(animated(decor.tree.small).bounce(-50, 50), 1)
			.add(animated(decor.tree.grass).bounce(-50, 50), 1.5)
			.add(animated(decor.tree.big).bounce(-50, 50), 2)

	timeline.add(animated(decor.cloud).fading(1))



	/**
	 ** Scroll to bottom
	 ** added auto scroll to section prizes
	 */
	 var toggle_scroll = document.getElementById('scroll-bottom'),
	 	prize_offset ;
	 	console.log(toggle_scroll)

	 	toggle_scroll.addEventListener('click', function(e) {
	 		e.preventDefault();

	 		prize_offset = document.getElementById('section--prize')

	 		TweenMax.to(window, 1, {
	 			scrollTo:{
	 				y: prize_offset.offsetTop
	 			},
	 			ease: Circ.easeOut
	 		})
	 	})
	/**
	 ** Scroll to section
	 ** added auto scroll to section, when window contain section
	 */

	//  var controller =  new ScrollMagic.Controller();


// var uploader = new Dropzone("#uploader", { 
// 									url: "/file/post",
// 									thumbnailWidth: 720,
// 									thumbnailHeight: 480,
// 									previewTemplate: document.getElementById('preview-template').innerHTML
// 								});


	// // Tested get offset top each section
	// var sections = document.querySelectorAll('section');
	// _.each(sections, function(section) {
	// 		var autobottom = new ScrollMagic.Scene({
	// 							triggerElement: document.querySelectorAll('section')
	// 						})
	// 						.addTo(controller)
	// 						.on('enter', function(e) {
	// 							TweenMax.to(window, 2, {scrollTo:{y:section.offsetTop}, ease:Power2.easeOut, delay: 3});

	// 						})
	// })

}

