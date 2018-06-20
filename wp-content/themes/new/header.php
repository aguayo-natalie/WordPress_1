<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 8</title>
	<?php wp_head()?>
</head>

<body>
	<nav class="navbar navbar-default">
	  <div class="container">

	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">
			<img class="logo" src="<?php echo get_bloginfo('template_url') ?>/images/latam_logo.png">
	      </a>
	    </div>

	    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="#">Equipo</a></li>
	        <li><a href="#">Blog</a></li>
	        <li><a href="#">Contacto</a></li>
	      </ul>   
	    </div>
	  </div>
	</nav>
