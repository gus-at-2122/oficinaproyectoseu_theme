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
					'name'               => __( 'Announcements', 'ope_gandia' ),
					'singular_name'      => __( 'Announcement', 'ope_gandia' ),
					'add_new'            => __( 'Add New', 'ope_gandia' ),
					'add_new_item'       => __( 'Add new Announcement', 'ope_gandia' ),
					'view_item'          => __( 'View Announcement', 'ope_gandia' ),
					'edit_item'          => __( 'Edit Announcement', 'ope_gandia' ),
					'new_item'           => __( 'New Announcement', 'ope_gandia' ),
					'search_items'       => __( 'Search Announcement', 'ope_gandia' ),
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
					'slug'       => 'announcement',
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
					'name'              => __( 'Scopes', 'ope_gandia' ),
					'singular_name'     => __( 'Scope', 'ope_gandia' ),
					'search_items'      => __( 'Search Scopes', 'ope_gandia' ),
					'all_items'         => __( 'All Scopes', 'ope_gandia' ),
					'parent_item'       => __( 'Parent Scopes', 'ope_gandia' ),
					'parent_item_colon' => __( 'Parent Scopes:', 'ope_gandia' ),
					'view_item'         => __( 'View Scopes', 'ope_gandia' ),
					'edit_item'         => __( 'Edit Scopes', 'ope_gandia' ),
					'update_item'       => __( 'Update Scopes', 'ope_gandia' ),
					'add_new_item'      => __( 'Add New Scopes', 'ope_gandia' ),
					'new_item_name'     => __( 'New Scopes Name', 'ope_gandia' ),
					'menu_name'         => __( 'Scopes', 'ope_gandia' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'custom-taxonomy' ),
				'show_in_rest' => true,
			)
		);

	}
}
