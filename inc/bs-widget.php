<?php

add_action( 'widgets_init', 'register_wpglobus_widgets' );
function register_wpglobus_widgets(){
	register_sidebar( array(
		'name'          => 'wp globus',
		'id'            => "wpglobus",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '',
		'after_title'   => "",
	) );
}
