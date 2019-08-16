<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


// query for getting post only from today

$today = getdate();
$query_args = array(
	'date_query' => array(
		array(
			'year' => $today['year'],
			'month' => $today['mon'],
			'day' => $today['mday'],
		),
	),
);

$result = new WP_Query($query_args);
