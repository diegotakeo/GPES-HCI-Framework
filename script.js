$(function(){

	//$(document).on('click','a[href="#"]', function(e){
	//	e.preventDefault();
	//});	
	
		
		// RESULT FILTERS SETUP
		window.localStorage.setItem('1', true);
		window.localStorage.setItem('2', true);
		window.localStorage.setItem('3', true);
		window.localStorage.setItem('finished', false);
		
		
		
		// GEOLOCATION LINKS
		$('#go_portuguese').on('click', function(){
			window.localStorage.setItem('LANGUAGE','BR');
			window.location.hash = window.location.hash;
			window.location.reload();
		});
		$('#go_english').on('click', function(){
			window.localStorage.setItem('LANGUAGE','EN');
			window.location.hash = window.location.hash;
			window.location.reload();
		});
		
		// IF BR SHOW IN PORTUGUESE
		if (window.localStorage.getItem('LANGUAGE') == 'BR'){
			$('.footer_txt').html('Todos os direitos reservados © 2017 <a href="http://gpes.fatectq.edu.br/">GPES</a>');

			$('a#home p').text('PAGINA INICIAL');
			$('a#doc p').text('ARTIGO');
			$('a#archive p').text('CONTEÚDO');
			$('a#about p').text('SOBRE NÓS');
		}
		
		
		// AJAX NAVIGATION
		var cache_ = {
			//'home.html' : $('div#home')
		};
		$(document).on('click','a[href^="#"][href*=".html"]', function(e){
			e.preventDefault();
			var group = $(this).attr('data-to');
			var file  = $(this).attr('href').replace('#','').replace('!','');
			
			$('#'+group+' .conteudo').hide();
			$('a[data-to="'+group+'"]').removeClass('active');
			$(this).addClass('active');
			
			if (group === 'main_content')
				window.location.hash = '!'+file;

			if (cache_[file])
				cache_[file].show();
			else {
				//$('.loading').show();
			
			
				cache_[file] = $('<div class="conteudo col-md-12 col-sm-12 col-xs-12"/>').appendTo('.ajax-box#'+ group)
				.load('archive/'+file, function(){
					//$('.loading').hide();
				});
			}
		});


		$(document).on('click', 'a[href="#"]', function(e){
			e.preventDefault();
		});
				
		var hash = window.location.hash;
		$('a[href="'+hash+'"]').click();
		if (!hash)
			$('a#home').click();
		
		
		
	// --------------------- NAV Transformicon --------------------- //
	/* When user clicks the Icon */
	$(".nav-toggle").click(function() {
		$(this).toggleClass("active");
		$(".overlay-boxify").toggleClass("open");
	});

	/* When user clicks a link */
	$(".overlay ul li a").click(function() {
		$(".nav-toggle").toggleClass("active");
		$(".overlay-boxify").toggleClass("open");
		$('.nav-toggle').click();
	});

	/* When user clicks outside */
	$(".overlay").click(function() {
		$(".nav-toggle").toggleClass("active");
		$(".overlay-boxify").toggleClass("open");
	});
		

	$(document).keyup(function(e) {
		if (e.keyCode === 192) $('.nav-toggle').click();
		
		if($('.nav-toggle').hasClass('active')) {
			if (e.keyCode === 81)  $('a#home').click();
			if (e.keyCode === 87)  $('a#doc').click();
			if (e.keyCode === 69)  $('a#archive').click();
			if (e.keyCode === 82)  $('a#about').click();
		}
	});
	
	
	
});
