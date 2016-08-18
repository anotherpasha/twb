	window.onload = function() {

	}

Pace.on('done', function() {


	var timeline_loader = new TimelineMax();
	var loader = document.getElementById('loader'),
		logo    = document.getElementById('logo-loader')


 	timeline_loader.to(loader, 1, {top: "-100%"}, 1);

	var timeline = new TimelineMax({delay: 2});
	var decor = {
		land : "#land",
		tree: {
			small: "#tree-small",
			grass: '#tree-grass',
			big: '#tree-big'
		},
		cloud: "#cloud",
		grass: '#grass',
		flower:{
			white: '#flower-white',
			big: '#flower-red-big',
			small: '#flower-red-small'
		},
		characters: {
			duck: '#duck',
			fish: '#fish',
			butterfly: '#butterfly',
			turtle: '#turtle',
			elephant: '#elephant'
		}
	};


	timeline.add(animated(decor.land).bounce(-100, 100));

	timeline.add(animated(decor.cloud).fading(1))

	timeline.add(animated(decor.characters.duck).fading(1))
			.add(animated(decor.characters.fish).fading(1))
			.add(animated(decor.characters.butterfly).fading(1))
			.add(animated(decor.characters.turtle).fading(1))
			.add(animated(decor.characters.elephant).fading(1))


	// SVG Animation




	/**
	 ** Scroll to bottom
	 ** added auto scroll to section prizes
	 */
	 var toggle_scroll = document.getElementById('scroll-bottom'),
	 	arrow		   = document.getElementById('arrow-down'),
	 	prize_offset ;
	 	console.log(toggle_scroll)

	 	if(toggle_scroll != null)
	 	{


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

	 	TweenMax.to(arrow, 0.5, {
	 		y: 5,
	 		repeat: 1000,
	 		yoyo: true,
	 		delay: 0.4
	 	})
	 	}
	/**
	 ** Scroll to section
	 ** added auto scroll to section, when window contain section
	 */

	//  var controller =  new ScrollMagic.Controller();

	var uploader = document.getElementById('uploader')
	console.log(uploader)

	if(uploader != null){

	    var uploader = new Dropzone("#uploader", {
									url: "/file/post",
									thumbnailWidth: 720,
                                    maxFilesize: 2,
                                    acceptedFiles: 'image/*',
									previewTemplate: document.getElementById('preview-template').innerHTML
								});
        uploader.on("success", function(file, filename) {
            $('#image_path').val(filename);
        });
	}



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

})

