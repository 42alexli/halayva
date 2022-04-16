<?php
/**
 * Halava taxonomy
 *
 */
// Создаем функцию которая добавит кастомную таксономю "Халява-категорию"
// Можно добавить сколько угодно, копируешь от сюда...
function Halava_create_taxonomy_category_moto(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'category', [ 'alex_li_theme_halava' ], [ // category - название таксономии, alex_li_theme_halava - ID пост тайпа к которому подключаешь эту таксономию
		'label'                 => '',
		'labels'                => [
			'name'              => 'Халява-категорию',
			'singular_name'     => 'Халява-категорию',
			'search_items'      => 'Поиск Халява-категорию',
			'all_items'         => 'Все Халява-категорию',
			'view_item '        => 'Просмотр Халява-категорию',
			'parent_item'       => 'Родительская Халява-категорию',
			'parent_item_colon' => 'Родительская Халява-категорию:',
			'edit_item'         => 'Редактировать Халява-категорию',
			'update_item'       => 'Обновить Халява-категорию',
			'add_new_item'      => 'Добавить Новую Халява-категорию',
			'new_item_name'     => 'Название Халява-категорию',
			'menu_name'         => 'Халява-категорию',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true,
		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
	] );
}
add_action( 'init', 'Halava_create_taxonomy_category_moto' );
// До сюда...
