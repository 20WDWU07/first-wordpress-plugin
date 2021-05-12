<?php
 
/*

Plugin Name: My first plugin
 
Plugin URI: https://mywebsite.com
 
Description: Plugin to say hello world
 
Version: 1.0
 
Author: Your Name
 
Author URI: https://mywebsite.com
 
License: GPLv2 or later
 
*/

//add a javascript file to our plugin

function load_plugin_scripts() {
    wp_enqueue_script('custom-script', plugin_dir_url( __FILE__ ) . 'js/custom.js' );
    wp_enqueue_style('custom-css', plugin_dir_url( __FILE__ ) . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'load_plugin_scripts');

// adds a shortcode that prints Hello world
function HelloWorldShortcode() {
    return '<h1 style="color:red">Hello world</h1>';
}

// create the shortcode
// the first argument is the shortcode, the second is the function which runs when you call the shortcode
add_shortcode('helloworld', 'HelloWorldShortcode');

// let's create popup

function PopUpShortCode() {
	return '<div class="popup" onclick="myFunction()">Click me!
	  <span class="popuptext" id="myPopup">Popup text...</span>
	</div>';
}
// create the shortcode
add_shortcode('littlepopup', 'PopUpShortCode');


?>