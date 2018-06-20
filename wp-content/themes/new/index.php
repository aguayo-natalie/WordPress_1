<?php get_header() ?>

	<section class="jumbotron">
		<div class="container">
			<h1 class="col-md-6 col-md-offset-3">COMIENZA UNA NUEVA VIDA Y ÚNETE AL MUNDO TECNOLÓGICO</h1>
			<div class="center col-md-6 col-md-offset-3">
				<button type="button" class="btn btn-default navbar-btn azul">Comienza acá!</button>
				<button type="button" class="btn btn-default navbar-btn verde">Más Info</button>
			</div>
			<p class="col-md-6 col-md-offset-3">Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica, se necesitan más desarrolladores y Tú puedes ser uno!</p>
		</div>
	</section>

	<section class="center margin container">
		<h5 class="col-md-6 col-md-offset-3"><strong>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMERICA</strong></h5>	
		<p class="col-md-6 col-md-offset-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quod autem tenetur perspiciatis. Expedita ad minima odio nesciunt, libero ratione voluptate optio!</p>
	</section>
	
	
	<section>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">

		    <div class="item active">
		      <img src="<?php echo get_bloginfo('template_url') ?>/images/viewing-gallery-for-happy-people.png">
		      <div class="carousel-caption"></div>
		    </div>

		    <div class="item">
		      <img src="<?php echo get_bloginfo('template_url') ?>/images/viewing-gallery-for-happy-people.png">
		      <div class="carousel-caption"></div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>

	<section class="center container color">
		<h5 class="col-md-6 col-md-offset-3"><strong>SOLICITA INFORMACIÓN E INSCRÍBETE</strong></h5>	
		<p class="col-md-6 col-md-offset-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quod autem tenetur perspiciatis. Expedita ad minima odio nesciunt, libero ratione voluptate optio.</p>
		<div class="center col-md-6 col-md-offset-3">
			<button type="button" class="btn btn-default navbar-btn azul">Inscríbete</button>
		</div>
		<p class="col-md-6 col-md-offset-3">Vive la experiencia Desafío Latam!</p>	
	</section>

	<section class="contacto container">
		<div class="col-md-3 col-md-offset-3">
			<h5>Contacto</h5>
			<p><strong>Desafío Latam</strong><br>Ezequias Alliende 2361<br>P +56 9 1234 5678</p>
			<a href="#">inscripciones@desafiolatam.com</a>
		</div>

		<div class="col-md-3">
			<h5>Suscríbete</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<form class="formulario" action="#">
				<input type="text" placeholder="Ingresa tu mail">
				<input type="submit" value="Enviar"></input>
			</form>
		</div>
	</section>

<?php get_footer() ?>