<?php

namespace OpeGandia\WordPress;

use WPEmerge\ServiceProviders\ServiceProviderInterface;

/**
 * Register widgets and sidebars.
 */
class ContentTypesServiceProvider implements ServiceProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function register( $container ) {
		// Nothing to register.
	}

	/**
	 * {@inheritDoc}
	 */
	public function bootstrap( $container ) {
		add_action( 'init', [$this, 'registerPostTypes'] );
		add_action( 'init', [$this, 'registerTaxonomies'] );
	}

	/**
	 * Register post types.
	 *
	 * @return void
	 */
	public function registerPostTypes() {

		register_post_type(
			'ope_announcement',
			array(
				'labels'              => array(
					'name'               => __( 'Convocatorias', 'ope_gandia' ),
					'singular_name'      => __( 'Convocatoria', 'ope_gandia' ),
					'add_new'            => __( 'Add New', 'ope_gandia' ),
					'add_new_item'       => __( 'Add new Convocatoria', 'ope_gandia' ),
					'view_item'          => __( 'View Convocatoria', 'ope_gandia' ),
					'edit_item'          => __( 'Edit Convocatoria', 'ope_gandia' ),
					'new_item'           => __( 'New Convocatoria', 'ope_gandia' ),
					'search_items'       => __( 'Search Convocatoria', 'ope_gandia' ),
					'not_found'          => __( 'No announcement found', 'ope_gandia' ),
					'not_found_in_trash' => __( 'No announcement found in trash', 'ope_gandia' ),
				),
				'public'              => true,
				'exclude_from_search' => false,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-format-aside',
				'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
				'rewrite'             => array(
					'slug'       => 'convocatoria',
					'with_front' => false,
				),
				'show_in_rest' => true,
			)
		);
		register_post_type(
			'ope_resource',
			array(
				'labels'              => array(
					'name'               => __( 'Recursos', 'ope_gandia' ),
					'singular_name'      => __( 'Recurso', 'ope_gandia' ),
					'add_new'            => __( 'Add New', 'ope_gandia' ),
					'add_new_item'       => __( 'Add new Recurso', 'ope_gandia' ),
					'view_item'          => __( 'View Recurso', 'ope_gandia' ),
					'edit_item'          => __( 'Edit Recurso', 'ope_gandia' ),
					'new_item'           => __( 'New Recurso', 'ope_gandia' ),
					'search_items'       => __( 'Search Recurso', 'ope_gandia' ),
					'not_found'          => __( 'No announcement found', 'ope_gandia' ),
					'not_found_in_trash' => __( 'No announcement found in trash', 'ope_gandia' ),
				),
				'public'              => true,
				'exclude_from_search' => false,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-admin-post',
				'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
				'rewrite'             => array(
					'slug'       => 'recurso',
					'with_front' => false,
				),
				'show_in_rest' => true,
			)
		);

	}

	/**
	 * Register taxonomies.
	 *
	 * @return void
	 */
	public function registerTaxonomies() {
		register_taxonomy(
			'ope_scope',
			array( 'ope_announcement' ),
			array(
				'labels'            => array(
					'name'              => __( '??mbitos', 'ope_gandia' ),
					'singular_name'     => __( '??mbito', 'ope_gandia' ),
					'search_items'      => __( 'Search ??mbitos', 'ope_gandia' ),
					'all_items'         => __( 'All ??mbitos', 'ope_gandia' ),
					'parent_item'       => __( 'Parent ??mbitos', 'ope_gandia' ),
					'parent_item_colon' => __( 'Parent ??mbitos:', 'ope_gandia' ),
					'view_item'         => __( 'View ??mbitos', 'ope_gandia' ),
					'edit_item'         => __( 'Edit ??mbitos', 'ope_gandia' ),
					'update_item'       => __( 'Update ??mbitos', 'ope_gandia' ),
					'add_new_item'      => __( 'Add New ??mbitos', 'ope_gandia' ),
					'new_item_name'     => __( 'New ??mbitos Name', 'ope_gandia' ),
					'menu_name'         => __( '??mbitos', 'ope_gandia' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'ambito' ),
				'show_in_rest' => true,
			)
		);

		register_taxonomy(
			'ope_beneficiario',
			array( 'ope_announcement' ),
			array(
				'labels'            => array(
					'name'              => __( 'Beneficiarios', 'ope_gandia' ),
					'singular_name'     => __( 'Beneficiarios', 'ope_gandia' ),
					'search_items'      => __( 'Search Beneficiarios', 'ope_gandia' ),
					'all_items'         => __( 'All Beneficiarios', 'ope_gandia' ),
					'parent_item'       => __( 'Parent Beneficiarios', 'ope_gandia' ),
					'parent_item_colon' => __( 'Parent Beneficiarios:', 'ope_gandia' ),
					'view_item'         => __( 'View Beneficiarios', 'ope_gandia' ),
					'edit_item'         => __( 'Edit Beneficiarios', 'ope_gandia' ),
					'update_item'       => __( 'Update Beneficiarios', 'ope_gandia' ),
					'add_new_item'      => __( 'Add New Beneficiarios', 'ope_gandia' ),
					'new_item_name'     => __( 'New Beneficiarios Name', 'ope_gandia' ),
					'menu_name'         => __( 'Beneficiarios', 'ope_gandia' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'beneficiario' ),
				'show_in_rest' => true,
			)
		);

	}
}
