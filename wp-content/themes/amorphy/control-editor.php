<?php
/**
 * Register custom control for editor.
 * @link    https://github.com/aristath/kirki/blob/master/includes/controls/class-kirki-controls-editor-control.php
 * @link    https://github.com/paulund/wordpress-theme-customizer-custom-controls/blob/master/text/text-editor-custom-control.php
 * @package The Four
 */

/**
 * Register custom control for editor.
 */
class TheFour_Customize_Control_Editor extends WP_Customize_Control
{
    /**
     * @var string Control type
     */
    public $type = 'editor';

    /**
     * Render the content on the theme customizer page.
     */
    public function render_content()
    {
        ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
        </label>
        <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr( $this->value() ); ?>">
        <?php
        wp_editor( $this->value(), $this->id, array(
            'textarea_name' => $this->id,
        ) );
        do_action( 'admin_footer' );
        do_action( 'admin_print_footer_scripts' );
        ?>
        <?php
    }
}