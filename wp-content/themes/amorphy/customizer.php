<?php
/**
 * Register theme options in the Customizer
 * @package TheFour
 */
class TheFour_Customizer
{
    /**
     * Add hooks for customizer
     */
    public function __construct()
    {
        add_action( 'customize_register', array( $this, 'register' ) );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    /**
     * Register customizer settings
     * @param WP_Customize_Manager $wp_customize WordPress customizer manager instance
     */
    public function register( WP_Customize_Manager $wp_customize )
    {
        require_once get_template_directory() . '/control-editor.php';

        // Theme option panel
        $wp_customize->add_panel( 'thefour', array(
            'title' => __( 'Theme Options', 'thefour' ),
        ) );

        // Theme option sections
        $wp_customize->add_section( 'header', array(
            'title' => __( 'Header', 'thefour' ),
            'panel' => 'thefour',
        ) );

        // Hero content
        $wp_customize->add_setting( 'hero_content' );
        $wp_customize->add_control( new TheFour_Customize_Control_Editor(
            $wp_customize,
            'hero_content',
            array(
                'label'       => __( 'Hero content', 'thefour' ),
                'section'     => 'header',
                'settings'    => 'hero_content',
                'description' => __( 'Use this setting to enter custom content for the hero area. This content will replace the website title and description. You can use HTML code (including images) and shortcodes.', 'thefour' ),
            )
        ) );
    }

    /**
     * Enqueue script for customizer control
     */
    public function enqueue()
    {
        wp_enqueue_script( 'thefour-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ) );
    }

}