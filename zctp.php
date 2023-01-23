<?php

/*
* Plugin Name: CTP by z
* Description: Custom Post type toxonomy by zboy
* Version: 2021.5
* Author: martinarnedo.es
* Author URI: https://martinarnedo.es/
*/

function trabajoz_post_type(){
		//definiendo los nombres de las etiquetas de nombre
		$labels = array(
		'name'                  => __( 'Casos de éxito', 'mdam' ),
		'singular_name'         => __( 'Caso de éxito', 'mdam' ),
		'menu_name'             => __( 'Casos', 'mdam' ),
		'name_admin_bar'        => __( 'Casos', 'mdam' ),
		'archives'              => __( 'Archivos de Casos', 'mdam' ),
		'all_items'             => __( 'Todos los Casos', 'mdam' ),
		'add_new_item'          => __( 'Agregar nuevo Caso', 'mdam' ),
		'add_new'               => __( 'Agregar Caso', 'mdam' ),
		'new_item'              => __( 'Nuevo Caso', 'mdam' ),
		'edit_item'             => __( 'Editar Caso', 'mdam' ),
		'update_item'           => __( 'Actualizar Caso', 'mdam' ),
		'view_item'             => __( 'Ver Caso', 'mdam' ),
		'view_items'            => __( 'Ver Casos', 'mdam' ),
		'search_items'          => __( 'Buscar Casos', 'mdam' ),
		'not_found'             => __( 'No encontrado', 'mdam' ),
		'featured_image'        => __( 'Imagen Destacada', 'mdam' ),
		'set_featured_image'    => __( 'Colocar imagen destacada', 'mdam' ),
		'remove_featured_image' => __( 'Quitar imagen destacada', 'mdam' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mdam' ),
		'insert_into_item'      => __( 'Insertar en el Caso', 'mdam' ),
		'uploaded_to_this_item' => __( 'Subir a este item', 'mdam' ),
		'items_list'            => __( 'Lista de Casos', 'mdam' )
		);
 
 
	$args = array(
		'label'                 => __( 'Casos', 'mdam' ),
		'description'           => __( 'Casos de Casos', 'mdam' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail','editor' ),
		'taxonomies'            => array( 'Dominios','Hosting' ),
		'public'                => true,
		'menu_position'         => 5,
		'has_archive'           => true,
		'rewrite'               =>  array('slug' => 'caso-de-exito'),
	);
	register_post_type( 'trabajo', $args );
}
add_action('init', 'trabajoz_post_type');