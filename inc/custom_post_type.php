<?php
/**
 * alex_li_theme post type
 *
 */
// Создаем функцию которая добавит кастомный пост тайп  с название "Халява"
// Можно добавить сколько угодно, копируешь от сюда...
function alex_li_theme_create_post_type_moto() {

register_post_type( 'alex_li_theme_halava', // Уникальный ID
array(
'labels' => array(
'name' => __( 'Халява', 'alex_li_theme' ),
'singular_name' => __( 'Халява', 'alex_li_theme'  ),
'add_new' => __('Добавить новый', 'alex_li_theme' ),
'add_new_item' => __('Добавить новый Халява', 'alex_li_theme' ),
'edit_item' => __('Редактировать Халява', 'alex_li_theme' ),
'new_item' => __('Новый Халява', 'alex_li_theme' ),
'all_items' => __('Все Халява', 'alex_li_theme' ),
'view_item' => __('Просмотр Халява', 'alex_li_theme' ),
'search_items' => __('Поиск Халява', 'alex_li_theme' ),
'not_found' => __('Нет Халява', 'alex_li_theme' ),
'not_found_in_trash' => __('Халява не найдены', 'alex_li_theme' ),
'menu_name' => __( 'Халява', 'alex_li_theme' )
),
'public' => true,
'menu_position' => 5,
'rewrite' => array('slug' => 'alex_li_theme_shop'),
'supports' => array('title', 'thumbnail','custom-fields'),// Сюда поддерживаемые поля обычно я ставлю 'title', 'thumbnail','custom-fields' остальные добавляю через другой файл.
'menu_icon' => '',
'has_archive' => true
)
);
}
add_action( 'init', 'alex_li_theme_create_post_type_moto' ); // Инитим функцию в вордпресс чтоб работало
// До сюда. Меняешь ID и названия и заебись...
