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
					'name'              => __( 'Ámbitos', 'ope_gandia' ),
					'singular_name'     => __( 'Ámbito', 'ope_gandia' ),
					'search_items'      => __( 'Search Ámbitos', 'ope_gandia' ),
					'all_items'         => __( 'All Ámbitos', 'ope_gandia' ),
					'parent_item'       => __( 'Parent Ámbitos', 'ope_gandia' ),
					'parent_item_colon' => __( 'Parent Ámbitos:', 'ope_gandia' ),
					'view_item'         => __( 'View Ámbitos', 'ope_gandia' ),
					'edit_item'         => __( 'Edit Ámbitos', 'ope_gandia' ),
					'update_item'       => __( 'Update Ámbitos', 'ope_gandia' ),
					'add_new_item'      => __( 'Add New Ámbitos', 'ope_gandia' ),
					'new_item_name'     => __( 'New Ámbitos Name', 'ope_gandia' ),
					'menu_name'         => __( 'Ámbitos', 'ope_gandia' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'ambito' ),
				'show_in_rest' => true,
			)
		);

	}
}
