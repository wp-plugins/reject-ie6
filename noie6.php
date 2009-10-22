<?php
/*
Plugin Name: No IE6
Plugin URI: http://www.sandaru1.com/2009/10/17/reject-ie6/
Description: Just the javascript hook for integrating jReject jquery plugin into wordpress
Author: Sandaruwan Gunathilake
Version: 0.1
Author URI: http://www.sandaru1.com/
*/

add_action('init', noie6_init);
add_action('wp_head', noie6_head);

function noie6_init() {
    wp_enqueue_script('jquery.reject',WP_PLUGIN_URL.'/'.dirname(plugin_basename(__FILE__)).'/jquery.reject.min.js',array('jquery'));
}    

function noie6_head() {
  echo '<script>
    jQuery(document).ready(
      function() {
        jQuery.reject( {
          imagePath:"'.WP_PLUGIN_URL.'/'.dirname(plugin_basename(__FILE__)).'/"
            })
          })
      </script>';
}
?>
