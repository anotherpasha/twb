(function() {

	// Constructor for modal

	var container, dialog;
	var modal_toggle  = document.querySelectorAll('.toggle--modal');
	var close_toggle   = document.querySelectorAll('.toggle--close');
	var appear     	     = new TimelineMax();
	var disapear 	     = new TimelineMax();


	_.each(modal_toggle, function (modal) {
		modal.addEventListener('click', function (e) {
			e.preventDefault();
			var target = modal.getAttribute('data-target');
				 container = document.getElementById(target);
				 dialog = container.children[0];
				 close =  dialog.lastElementChild;


			container.classList.add('active');
			 var container_appear  = TweenMax.fromTo(container, 0.3, {
									 	display: 'none',
									 	scale: 0
									 },
									 {
									 	display: 'block',
									 	scale: 1
									 }
									 );

			 var dialog_appear		= 	TweenMax.fromTo(dialog, 0.5, {
										 	y: -300,
										 	opacity: 0
										 },
										 {
										 	y: 0,
										 	opacity: 1

										 })


			 appear.add(container_appear)
			 		.add(dialog_appear)





		});
	})

	// Close Modal

	_.each(close_toggle, function (close) {
		close.addEventListener('click', function(e) {
			e.preventDefault();
			dialog = this.parentElement
			container 	   = this.parentElement.parentElement

			 var container_disapear  = TweenMax.fromTo(container, 0.3, {
									 	display: 'block',
									 	scale: 1
									 },
									 {
									 	display: 'none',
									 	scale: 0
									 }
									 );

			 var dialog_disapear		= 	TweenMax.fromTo(dialog, 0.5, {
										 	y: 0,
										 	opacity: 1

										 },
										 {
										 	y: -300,
										 	opacity: 0

										 })


			 disapear.add(dialog_disapear)
			 		  .add(container_disapear)


		})
	});




}())