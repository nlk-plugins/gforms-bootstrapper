<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link     https://github.com/monkishtypist
 * @since    2.0.0
 *
 * @package    Gforms_Bootstrapper
 * @subpackage Gforms_Bootstrapper/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Gforms_Bootstrapper
 * @subpackage Gforms_Bootstrapper/public
 * @author     Tim Spinks <tim@monkishtypist.com>
 */
class Gforms_Bootstrapper_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    2.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    2.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gforms_Bootstrapper_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gforms_Bootstrapper_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/gforms-bootstrapper-public.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    2.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gforms_Bootstrapper_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gforms_Bootstrapper_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/gforms-bootstrapper-public.min.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add custom classes to fields.
	 *
	 * @since    2.0.0
	 */
	public function custom_field_classes( $classes, $field, $form ) {
		$classes .= ' form-group';
		return $classes;
	}

	/**
	 * Customize the field container.
	 *
	 * @since    2.0.0
	 */
	public function custom_field_container( $field_container, $field, $form, $css_class, $style, $field_content ) {
		return '<div class="' . $css_class . '" style="' . $style . '">' . $field_content . '</div>';
	}

	/**
	 * Customize the Submit button
	 *
	 * @since    2.0.2
	 */
	public function custom_form_submit_button( $button, $form ) {
		return '<button type="submit" class="gform_button button btn ' . $form['submit_css_classes'] . '" id="gform_submit_button_' . $form['id'] . '" >' . $form['button']['text'] . '</button>';
	}

	/**
	 * Customize the error validation message
	 *
	 * @since    2.0.2
	 */
	public function custom_validation_message( $message, $form ) {
		return '<div class="alert alert-danger alert-dismissible fade show">' . $message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
	}

}
