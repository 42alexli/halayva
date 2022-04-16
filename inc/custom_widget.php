<?php
/**
 * Halyava widgets
 *
 */
function halyava_custom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Правый Баннер', 'alex_li_theme' ),
		'id'            => 'sidebar-right',
		'description'   => esc_html__( 'Это положение виждета 1', 'alex_li_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => esc_html__( 'Горизонтальный Баннер', 'alex_li_theme' ),
		'id'            => 'horizontal-widget',
		'description'   => esc_html__( 'Это положение виждета 2', 'alex_li_theme' ),
		'before_widget' => '<section id="%1$s" class="widget  %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title ">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'halyava_custom_widgets_init' );