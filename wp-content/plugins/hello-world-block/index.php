<?php
/*
Plugin name: Hello World Block
Description: This my first hellow world block.
Author: Mahesh
*/

add_action( 'enqueue_block_editor_assets', 'hwb_enqueue_editor_assets', 10, 1 );
add_action( 'enqueue_block_assets', 'hwb_enqueue_assets', 10, 1 );

function hwb_enqueue_editor_assets(){
    wp_enqueue_script(
        'hwb-block',
        plugins_url( 'hwb-block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element' )
    );
    wp_enqueue_style(
        'hwb-editor-css',
        plugins_url( 'editor.css', __FILE__ ),
        array( 'wp-edit-blocks' )
    );
}

function hwb_enqueue_assets(){
    wp_enqueue_style(
        'hwb-frontend-css',
        plugins_url( 'style.css', __FILE__ ),
        array( 'wp-blocks')
    );
}
