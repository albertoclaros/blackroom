$(document).ready(function(){

		//QUITAR SCROLL DESPLEGABLE

		var body = $('body');
		var burguer = $('.cabecera-burguer');

		burguer.click(function(){
			body.toggleClass('overflow');
		})



		// MENU JS

		var burguer = $('.cabecera-burguer');
		var paloUno = $('.cabecera-burguer > div:first-child');
		var paloTres = $('.cabecera-burguer > div:last-child');
		var menu = $('.cabecera-nav');


		burguer.click(function(){
			paloUno.toggleClass('palouno');
			paloTres.toggleClass('palotres');
			menu.toggleClass('cabecera-nav-abierto');
		})






		// modal

		var modal = $('.modal');
		var cerrar = $('.btn-close');

		$("form").on('submit', function(){
		   event.preventDefault();
		   modal.toggleClass('modal-abierta');
		})

		cerrar.click(function(){
			modal.toggleClass('modal-abierta');
		})






		// BOTON SUBIR

		var boton = $('.subir');

		var body = $('body, html');

		$(window).scroll(function(){

			if ($(this).scrollTop() > 200) {
				boton.fadeIn();
				} else {
				boton.fadeOut();
				}
			}); 

			boton.click(function(){
				body.animate({ scrollTop: 0 }, 600);
			});
		

			

	});