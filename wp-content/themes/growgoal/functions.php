<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'growgoal_VERSION', '3.2.1' );

if ( ! isset( $content_width ) ) {
	$content_width = 800; // Pixels.
}

if ( ! function_exists( 'growgoal_setup' ) ) {
	/**
	 * Set up theme support.
	 *
	 * @return void
	 */
	function growgoal_setup() {
		if ( is_admin() ) {
			hello_maybe_update_theme_version_in_db();
		}

		if ( apply_filters( 'growgoal_register_menus', true ) ) {
			register_nav_menus( [ 'menu-1' => esc_html__( 'Header', 'growgoal' ) ] );
			register_nav_menus( [ 'menu-2' => esc_html__( 'Footer', 'growgoal' ) ] );
		}

		if ( apply_filters( 'growgoal_post_type_support', true ) ) {
			add_post_type_support( 'page', 'excerpt' );
		}

		if ( apply_filters( 'growgoal_add_theme_support', true ) ) {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support(
				'html5',
				[
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'script',
					'style',
				]
			);
			add_theme_support(
				'custom-logo',
				[
					'height'      => 100,
					'width'       => 350,
					'flex-height' => true,
					'flex-width'  => true,
				]
			);
			add_theme_support( 'align-wide' );
			add_theme_support( 'responsive-embeds' );

			/*
			 * Editor Styles
			 */
			add_theme_support( 'editor-styles' );
			add_editor_style( 'editor-styles.css' );

			/*
			 * WooCommerce.
			 */
			if ( apply_filters( 'growgoal_add_woocommerce_support', true ) ) {
				// WooCommerce in general.
				add_theme_support( 'woocommerce' );
				// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
				// zoom.
				add_theme_support( 'wc-product-gallery-zoom' );
				// lightbox.
				add_theme_support( 'wc-product-gallery-lightbox' );
				// swipe.
				add_theme_support( 'wc-product-gallery-slider' );
			}
		}
	}
}
add_action( 'after_setup_theme', 'growgoal_setup' );

function hello_maybe_update_theme_version_in_db() {
	$theme_version_option_name = 'hello_theme_version';
	// The theme version saved in the database.
	$hello_theme_db_version = get_option( $theme_version_option_name );

	// If the 'hello_theme_version' option does not exist in the DB, or the version needs to be updated, do the update.
	if ( ! $hello_theme_db_version || version_compare( $hello_theme_db_version, growgoal_VERSION, '<' ) ) {
		update_option( $theme_version_option_name, growgoal_VERSION );
	}
}

if ( ! function_exists( 'growgoal_display_header_footer' ) ) {
	/**
	 * Check whether to display header footer.
	 *
	 * @return bool
	 */
	function growgoal_display_header_footer() {
		$growgoal_header_footer = true;

		return apply_filters( 'growgoal_header_footer', $growgoal_header_footer );
	}
}

if ( ! function_exists( 'growgoal_scripts_styles' ) ) {
	/**
	 * Theme Scripts & Styles.
	 *
	 * @return void
	 */
	function growgoal_scripts_styles() {
		$min_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		if ( apply_filters( 'growgoal_enqueue_style', true ) ) {
			wp_enqueue_style(
				'growgoal',
				get_template_directory_uri() . '/style' . $min_suffix . '.css',
				[],
				growgoal_VERSION
			);
		}

		if ( apply_filters( 'growgoal_enqueue_theme_style', true ) ) {
			wp_enqueue_style(
				'growgoal-theme-style',
				get_template_directory_uri() . '/theme' . $min_suffix . '.css',
				[],
				growgoal_VERSION
			);
		}

		if ( growgoal_display_header_footer() ) {
			wp_enqueue_style(
				'growgoal-header-footer',
				get_template_directory_uri() . '/header-footer' . $min_suffix . '.css',
				[],
				growgoal_VERSION
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'growgoal_scripts_styles' );

if ( ! function_exists( 'growgoal_register_elementor_locations' ) ) {
	/**
	 * Register Elementor Locations.
	 *
	 * @param ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager theme manager.
	 *
	 * @return void
	 */
	function growgoal_register_elementor_locations( $elementor_theme_manager ) {
		if ( apply_filters( 'growgoal_register_elementor_locations', true ) ) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}
add_action( 'elementor/theme/register_locations', 'growgoal_register_elementor_locations' );

if ( ! function_exists( 'growgoal_content_width' ) ) {
	/**
	 * Set default content width.
	 *
	 * @return void
	 */
	function growgoal_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'growgoal_content_width', 800 );
	}
}
add_action( 'after_setup_theme', 'growgoal_content_width', 0 );

if ( ! function_exists( 'growgoal_add_description_meta_tag' ) ) {
	/**
	 * Add description meta tag with excerpt text.
	 *
	 * @return void
	 */
	function growgoal_add_description_meta_tag() {
		if ( ! apply_filters( 'growgoal_description_meta_tag', true ) ) {
			return;
		}

		if ( ! is_singular() ) {
			return;
		}

		$post = get_queried_object();
		if ( empty( $post->post_excerpt ) ) {
			return;
		}

		echo '<meta name="description" content="' . esc_attr( wp_strip_all_tags( $post->post_excerpt ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'growgoal_add_description_meta_tag' );

// Admin notice
if ( is_admin() ) {
	require get_template_directory() . '/includes/admin-functions.php';
}

// Settings page
require get_template_directory() . '/includes/settings-functions.php';

// Header & footer styling option, inside Elementor
require get_template_directory() . '/includes/elementor-functions.php';

if ( ! function_exists( 'growgoal_customizer' ) ) {
	// Customizer controls
	function growgoal_customizer() {
		if ( ! is_customize_preview() ) {
			return;
		}

		if ( ! growgoal_display_header_footer() ) {
			return;
		}

		require get_template_directory() . '/includes/customizer-functions.php';
	}
}
add_action( 'init', 'growgoal_customizer' );

if ( ! function_exists( 'growgoal_check_hide_title' ) ) {
	/**
	 * Check whether to display the page title.
	 *
	 * @param bool $val default value.
	 *
	 * @return bool
	 */
	function growgoal_check_hide_title( $val ) {
		if ( defined( 'ELEMENTOR_VERSION' ) ) {
			$current_doc = Elementor\Plugin::instance()->documents->get( get_the_ID() );
			if ( $current_doc && 'yes' === $current_doc->get_settings( 'hide_title' ) ) {
				$val = false;
			}
		}
		return $val;
	}
}
add_filter( 'growgoal_page_title', 'growgoal_check_hide_title' );

/**
 * BC:
 * In v2.7.0 the theme removed the `growgoal_body_open()` from `header.php` replacing it with `wp_body_open()`.
 * The following code prevents fatal errors in child themes that still use this function.
 */
if ( ! function_exists( 'growgoal_body_open' ) ) {
	function growgoal_body_open() {
		wp_body_open();
	}
}
