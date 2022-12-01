<?php

/**
 * scripts
 */

 function qp_load_scripts() {
    wp_enqueue_style( 'qp-styles', plugin_dir_url( __FILE__ ).'css/plugin_styles.css');
 }

 add_action( 'wp_enqueue_scripts', 'qp_load_scripts' );