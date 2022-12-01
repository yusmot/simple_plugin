<?php

/**
 * this will allow the plugin to be modified under the Settings side-menu
 */

function qp_admin_settings() {

    global $qp_options, $qp_fb_options;

    ob_start(); ?>

    <div class="wrap">
        <h2>My First WordPress Plugin Options</h2>
        <p>This is our settings page content.</p>

        <form action="options.php" method="post">

            <?php settings_fields('qp_settings_group'); ?>

                <!-- for twitter link -->

                <h4> <?php _e('Twitter link information', 'qp_twitter_domain');?></h4>

                <p class="twitter-settings">
                    <label class="description" for="qp_twitter_settings[twitter_url]">
                        <?php _e('Enter your Twitter URL', 'qp_twitter_domain'); ?>
                    </label>
                    <input type="text" name="qp_twitter_settings[twitter_url]" id="qp_twitter_settings[twitter_url]" value="<?php echo $qp_options['twitter_url'];?>"/>

                    <!-- To enable the Twitter link settings option -->
                    <label class="description" for="qp_twitter_settings[enable]">
                        &nbsp; <?php _e('Enable', 'qp_twitter_domain'); ?>
                    </label> &nbsp;
                    <input type="checkbox" name="qp_twitter_settings[enable]" id="qp_twitter_settings[enable]" value="1" <?php checked(1, $qp_options['enable']); ?> />
                </p>
                    
                <!-- for Facebook link -->

                <h4> <?php _e('Facebook link information', 'qp_facebook_domain');?></h4>

                <p class="facebook-settings">
                    <label class="description" for="qp_facebook_settings[facebook_url]">
                        <?php _e('Enter your Facebook URL', 'qp_facebook_domain'); ?>
                    </label>
                    <input type="text" name="qp_facebook_settings[facebook_url]" id="qp_facebook_settings[facebook_url]" value="<?php echo $qp_fb_options['facebook_url'];?>"/>

                    <!-- To enable the Facebook link settings option -->
                    <label class="description" for="qp_facebook_settings[enable]">
                        &nbsp; <?php _e('Enable', 'qp_facebook_domain'); ?>
                    </label> &nbsp;
                    <input type="checkbox" name="qp_facebook_settings[enable]" id="qp_facebook_settings[enable]" value="1" <?php checked(1, $qp_fb_options['enable']); ?> />
                </p>

                    <p class="submit">
                        <input type="submit" class="button-primary" value="<?php _e('Save options', 'qp_twitter_domain', 'qp_facebook_domain');?>"/>
                    </p>               
        </form>
    </div>

    <?php
    echo ob_get_clean();
}

function qp_add_settings_option() {
    add_options_page( 'My first WP plugin settings option', 'My Second Plugin', 'manage_options', 'qp-options', 'qp_admin_settings');
}

add_action( 'admin_menu', 'qp_add_settings_option');

function qp_register_settings() {
    register_setting( 'qp_settings_group', 'qp_twitter_settings');
    register_setting( 'qp_settings_group', 'qp_facebook_settings');
    // register_setting( 'qp_settings_group', 'qp_facebook_settings'); 
    //the qp_twitter_settings and 'qp_facebook_settings' are used to store the form input/data into the database
}

add_action( 'admin_init', 'qp_register_settings');

