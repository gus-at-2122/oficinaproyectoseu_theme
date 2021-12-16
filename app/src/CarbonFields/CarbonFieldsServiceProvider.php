<?php

namespace OpeGandia\CarbonFields;

use Carbon_Fields\Block;
use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;
use WPEmerge\ServiceProviders\ServiceProviderInterface;

/**
 * Provides Carbon Fields integration.
 */
class CarbonFieldsServiceProvider implements ServiceProviderInterface {
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
		add_action( 'after_setup_theme', [$this, 'bootstrapCarbonFields'], 100 );
		add_filter( 'carbon_fields_map_field_api_key', [$this, 'filterCarbonFieldsGoogleMapsKey'] );
		add_action( 'carbon_fields_register_fields', [$this, 'registerFields'] );
		add_action( 'widgets_init', [$this, 'registerWidgets'] );
	}

	/**
	 * Bootstrap Carbon Fields.
	 *
	 * @return void
	 */
	public function bootstrapCarbonFields() {
		\Carbon_Fields\Carbon_Fields::boot();
	}

	/**
	 * Filter the Google Maps API key Carbon Fields use.
	 *
	 * @return string
	 */
	public function filterCarbonFieldsGoogleMapsKey() {
		return carbon_get_theme_option( 'crb_google_maps_api_key' );
	}

	/**
	 * Register Carbon Fields fields.
	 *
	 * @return void
	 */
	public function registerFields() {
		$this->registerThemeOptions();
		$this->registerPostMeta();
		$this->registerTermMeta();
		$this->registerUserMeta();
		$this->registerGutenbergBlocks();
	}

	/**
	 * Register Theme Options fields.
	 *
	 * @return void
	 */
	protected function registerThemeOptions() {
		Container::make( 'theme_options', __( 'Theme Options', 'ope_gandia' ) )
			->set_page_file( 'ope_gandia-theme-options.php' )
			->add_fields( array(
				Field::make( 'text', 'crb_google_maps_api_key', __( 'Google Maps API Key', 'ope_gandia' ) ),
				Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script', 'ope_gandia' ) ),
				Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script', 'ope_gandia' ) ),
				Field::make( 'text', 'ope_phone', __( 'Teléfono de contacto', 'ope_gandia' ) ),
			) );
	}

	/**
	 * Register Post Meta fields.
	 *
	 * @return void
	 */
	protected function registerPostMeta() {

		Container::make( 'post_meta', __( 'Convocatoria Data', 'ope_gandia' ) )
			->where( 'post_type', '=', 'ope_announcement' )
			->add_fields( array(
				Field::make( 'text', 'ope_short_desc', __( 'Breve descripcion', 'ope_gandia' ) ),

				Field::make( 'complex', 'ope_beneficiarios', 'Beneficiarios' )
					->set_layout( 'tabbed-horizontal' )
					->add_fields( array(
						Field::make( 'text', 'title', 'Titulo del Enlace' ),

					) ),

				Field::make( 'text', 'ope_fechas', __( 'Fechas', 'ope_gandia' ) ),
				Field::make( 'complex', 'ope_links', 'Links' )
					->set_layout( 'tabbed-horizontal' )
					->add_fields( array(
						Field::make( 'text', 'title', 'Titulo del Enlace' ),
						Field::make( 'text', 'link', 'URL del enlace' ),

					) ),
				Field::make( 'text', 'ope_mensaje_opcional', __( 'Mensaje opcional', 'ope_gandia' ) ),

			));


		Container::make( 'post_meta', __( 'Convocatoria Data', 'ope_gandia' ) )
			->where( 'post_type', '=', 'ope_resource' )
			->add_fields( array(
				Field::make( 'text', 'url', 'URL' )
					->set_width( 50 )
					->set_required(),
			));


	}

	/**
	 * Register Term Meta fields.
	 *
	 * @return void
	 */
	protected function registerTermMeta() {

		Container::make( 'term_meta', __( 'Custom Data', 'ope_gandia' ) )
			->where( 'term_taxonomy', '=', 'ope_scope' )
			->add_fields( array(
				Field::make( 'image', 'ope_tax_thumbnail' ),
			));

	}

	/**
	 * Register User Meta fields.
	 *
	 * @return void
	 */
	protected function registerUserMeta() {
		/*
		Container::make( 'user_meta', __( 'Custom Data', 'ope_gandia' ) )
			->add_fields( array(
				Field::make( 'image', 'crb_img' ),
			));
		*/
	}

	protected function registerGutenbergBlocks(){


		Block::make(__('Featured Convocatorias Carousel', 'ope_gandia'))
			->set_description(__('Featured Convocatoriaes Carousel', 'ope_gandia'))
			->set_category('theme - category', __('Theme category', 'ope_gandia'), 'admin - customizer')
			->add_fields(array(
				Field::make( 'association', 'eo_featured_annos', __( 'Tipos de enlace' ) )
					->set_types( array(
						array(
							'type' => 'post',
							'post_type' => 'ope_announcement',
						)
					) )
			))
			->set_render_callback("\OpeGandia\GutenbergViews\FeaturedAnnosCarouseel::render");


	}

	/**
	 * Register Widgets.
	 *
	 * @return void
	 */
	public function registerWidgets() {
		register_widget( \OpeGandia\Widgets\Carbon_Rich_Text_Widget::class );
	}
}
