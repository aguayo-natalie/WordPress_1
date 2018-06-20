<?php
// Estilos CSS
function dl_enqueue_style() {
	$theme_data = wp_get_theme();
	/* Registrar estilos */
	wp_register_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get( '1.0' ));
	wp_register_style('main', get_parent_theme_file_uri('css/estilos.css'), null, $theme_data->get( '1.0' ));
	/* llamar estilos */
	wp_enqueue_style( 'bootstrap_css' );
	wp_enqueue_style( 'main' );
}
add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );




// Registrar Js
function dl_enqueue_scripts() {
$theme_data = wp_get_theme();
	// Registrar Scripts
	wp_register_script('scripts', get_parent_theme_file_uri('js/jquery-3.3.1.js'), null, '1.0', false);
	wp_register_script('bootstrap_script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', null, '1.0', false);

	// llamar scripts
	wp_enqueue_script('scripts');
	wp_enqueue_script('bootstrap_script');
}
add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

?>



