<?php if ( ! defined( 'ABSPATH' ) ) exit;

class NF_AJAX_Controllers_DispatchPoints
{
    /*
     * Constructor method
     */
    public function __construct()
    {
        // Add out ajax end points.
        add_action( 'wp_ajax_nf_undo_click',   array( $this, 'undo_click' ) );
    }
    
    /*
     * Function called when the undo manager is used in the builder.
     */
    public function undo_click() {
        // Make sure we have a valid nonce.
        check_ajax_referer( 'ninja_forms_builder_nonce', 'security' );
        // Send the action to our dispatcher.
        Ninja_Forms()->dispatcher()->send( 'undo_click' );
        // Exit.
        die( 1 );
    }
}