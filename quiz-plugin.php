<?php

/**
 * Plugin Name:       My Quiz Plugin
 * Plugin URI:        https://yusufomotoso.com/plugins/the-quiz/
 * Description:       A Proposed Quiz Plugin for CareerHub.
 * Version:           1.0.0
 * Author:            Yusuf Omotoso
 * Author URI:        https://yusufomotoso.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


 /**
    * global variables 
    */

    $qp_prefix = 'qp_';
    $qp_my_plugin_name = 'My Quiz Plugin';

/**
 * retrieve our plugin settings from the option settings
 */

    $qp_options = get_option('qp_twitter_settings');
    $qp_fb_options = get_option('qp_facebook_settings');


/**
    * includes
*/
    include('includes/display-functions.php');
    include('includes/admin-section.php');    
    include('includes/data-processing.php');
    include('includes/scripts.php');

?>