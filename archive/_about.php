
<style>
	@media (max-width: 375px) {.padding_top {padding-top:100px;}}
	@media (max-width: 320px) {.padding_top {padding-top:250px;}}
	
	.about_page {    
		font-family: sans-serif;
		text-align: justify;
		text-justify: inter-word;
		display:block!important;
	}
	.about_text{
		padding:30px;
		border: 1px solid #777;
		background-image: url('img/noise_b.png');
		box-shadow: 		5px 5px 0px #555, 10px 10px 0px #444;
		-moz-box-shadow: 	5px 5px 0px #555, 10px 10px 0px #444;
		-webkit-box-shadow: 5px 5px 0px #555, 10px 10px 0px #444;
		position:relative;
	}
	
	.icon_about {
		text-align:center;
		color:#f64747; 
		font-size:150px;
		margin-bottom: 50px;
	}
	
		
	.tab_about_nav {
			position:absolute;
			top: -50px; 
			left:0;
			padding:0px!important;
		}
	.tab_about_nav .about_nav {
			padding:0 20px; 
			cursor:pointer;
			color:#666;
			font-family:calibri;
			background-color: #cecece;
			text-align:center;
			height:	 	 50px; 
			line-height: 50px;
			display:block;
			float:left;
			}
	#nav_gpes 	{box-shadow:inset 0px -2px 1px rgba(1,1,1,0.5);}
	#nav_fatec	{box-shadow:inset 2px -2px 1px rgba(1,1,1,0.5);}
	#nav_membros{box-shadow:inset 2px -2px 1px rgba(1,1,1,0.5);}

	.about_nav.active {background-color:#f64747; color:#fff!important;}
</style>

<script>
$(function(){
	
	// --------------------------------------------------------------------------------------------------------- //
	var texto_gpes = '';
	var texto_membros = '';
	var texto_fatec = '';
	
	// ABOUT (PORTUGUESE)
	if (window.localStorage.getItem('LANGUAGE') == 'BR'){
		texto_gpes = 'Somos um Grupo de Pesquisa em Engenharia de Sofware (GPES), tendo como foco pesquisas na área de Engenharia de Software, Interação Humano-Computador, englobando desde a avaliação de usabilidade até as metodologias de desenvolvimento de software e sua implementação. É um grupo de iniciação científica da Faculdade de Tecnologia de Taquaritinga, com incentivo da Direção para o desenvolvimento de pesquisas que possam contribuir para o avanço nacional e internacional.';
		texto_fatec = 'Brasil, Taquaritinga - SP <br>Av. Dr. Flávio H. Lemos, 584 - Portal Itamaracá<br>CEP: 15.900-000<br><br>(16) 3252-5250 / (16) 3262-5152<br><a href="http://www.fatectq.edu.br/"> http://www.fatectq.edu.br/</a>';
		texto_membros = '<strong>Coordenadora do grupo:</strong> Daniela Gibertoni<br>\
						<strong>Site desenvolvido por:</strong> Diego T. Yamaguchi <br>\
						<strong>Membros:</strong> Guilherme Silva, Alexandre Miquelin, Letícia Zaccaro, Igor Roberto, Caique Porta, Hygor Podgornik';
		
	}
	// ABOUT (ENGLISH)
	else {
		texto_gpes = 'We\'re a Research Group in Software Engineering (GPES), currently focused on HCI (Human-Computer Interaction), covering subjects of software engineering, usability tests and software development methodologies. GPES is a group of scientific initiation from the undergraduate institution FATEC-TQ with the purpose of providing research contribution to the national and international scientific community.';
		texto_fatec = 'Brazil, Taquaritinga - SP <br>Av. Dr. Flávio H. Lemos, 584 - Portal Itamaracá<br>CEP: 15.900-000<br><br>+55 (16) 3252-5250 / +55 (16) 3262-5152<br><a href="http://www.fatectq.edu.br/"> http://www.fatectq.edu.br/</a>';
		texto_membros = '<strong>Coordinator:</strong> Daniela Gibertoni<br>\
						<strong>Site developed by:</strong> Diego T. Yamaguchi <br>\
						<strong>Members:</strong> Guilherme Silva, Alexandre Miquelin, Letícia Zaccaro, Igor Roberto, Caique Porta, Hygor Podgornik';
		$('#nav_membros').text('MEMBERS');
	}
	texto_gpes = texto_gpes + '<br><br> <strong> Email: </strong> contato@gpes.fatectq.edu.br<br> <strong> Website: </strong> <a href="http://gpes.fatectq.edu.br/"> http://gpes.fatectq.edu.br/ </a>';
	
	$('.about_text p').html(texto_gpes);
	// --------------------------------------------------------------------------------------------------------- //
	
	
	
	// NAV ABAS
	$('#main_content').on('click', '.about_nav', function(){
		$('.about_nav').removeClass('active');
		$(this).addClass('active');
		
		var id = $(this).attr('id');
		var icon = $('#dandy_icon');
		var texto = $('.about_text p');
		
		
		
		
		icon.removeClass();
		
		$('.about_page').removeClass('padding_top');
		if (id == 'nav_gpes') 	 { icon.addClass('fa fa-address-card-o');	texto.html(texto_gpes); $('.about_page').addClass('padding_top');}
		if (id == 'nav_fatec') 	 { icon.addClass('fa fa-graduation-cap');	texto.html(texto_fatec);}
		if (id == 'nav_membros') { icon.addClass('fa fa-users');			texto.html(texto_membros);}
	});
});
</script>
<!------------------------------------------------------------------------------------------------------------------------------------>	
<!-- ABOUT -->
		<div id="about" class="about_page padding_top">
			<div  class="col-md-5 col-sm-5 icon_about"><i id="dandy_icon" class="fa fa-address-card-o" aria-hidden="true"></i></div>
			<div class="col-md-7 col-sm-7 col-xs-12 about_text"> 
				<p>								
				</p>
				
				<span class="tab_about_nav col-md-12 col-sm-12 col-xs-12">
					<a href="#"><div class="col-md-4 col-sm-4 col-xs-4 about_nav active" id="nav_gpes">GPES</div></a>
					<a href="#"><div class="col-md-4 col-sm-4 col-xs-4 about_nav" id="nav_fatec">FATEC</div></a>
					<a href="#"><div class="col-md-4 col-sm-4 col-xs-4 about_nav" id="nav_membros">MEMBROS</div></a>
				</span>
			</div>
			
			<br class="clearfix">
			<div class="col-md-3 col-sm-3 col-xs-12"></div>
			<div class="col-md-6 col-sm-6 col-xs-12"></div>
			<div class="col-md-3 col-sm-3 col-xs-12"></div>
		</div> <!-- END // about -->