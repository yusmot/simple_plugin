<?php

// function to display content at the end of the post

function qp_display_content($content) {

    global $qp_options, $qp_fb_options;

    if ((is_single() && $qp_options['enable'] == true) && (is_single() && $qp_fb_options['enable'] == true)) {
        $extra_content =
        '<p class="message"> Follow me on
            <a href="'.$qp_options['twitter_url'].'" target="_blank"> Twitter </a> | <a href="'.$qp_fb_options['facebook_url'].'" target="_blank"> Facebook </a>
        </p>';
        $content .= $extra_content;
    } elseif (is_single() && $qp_options['enable'] == true) {
        $extra_content = 
        '<p class="message"> Follow me on 
            <a href="'. $qp_options['twitter_url'].'" target="_blank"> Twitter </a>
        </p>';
        $content .= $extra_content;        
    } elseif (is_single() && $qp_fb_options['enable'] == true) {
        $extra_content =
        '<p class="message"> Follow me on
            <a href="'.$qp_fb_options['facebook_url'].'" target="_blank"> Facebook </a>
        </p>';
        $content .= $extra_content;       
    } 

    return $content;
}

add_filter( 'the_content', 'qp_display_content' );

?>