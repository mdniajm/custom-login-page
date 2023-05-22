<?php 
/*
 * Plugin Name:       WP Custom Login Page
 * Plugin URI:        https://wordpress.org/plugins/scroll-to-to-wp/
 * Description:       Make a custom login page for your WordPress site.
 * Version:           1.1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md Niaj Makhudm
 * Author URI:        https://mdniajmakhdum.me/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       clwp
 * Domain Path:       /languages
 */

// Plugin Option Page Function
 
function clwp_add_theme_page(){
    add_menu_page('Login Option For Admin', 'Login Option', 'manage_options', 'clwp-plugin-option', 'clwp_create_page', 'dashicons-unlock', 101 );
}

add_action('admin_menu','clwp_add_theme_page');

//Plugin Callback Function
function clwp_create_page(){
    echo '<h1>Custom Login Page</h1>';
}

// Loading CSS file
function clwp_ogin_enqueue_register(){
    wp_enqueue_style( 'clwp_login_enqueue', plugins_url( 'css/clpwp-styles.css', __FILE__ ), false, '1.0.0' );

}
add_action('login_enqueue_scripts','clwp_ogin_enqueue_register');

// Changing Login form logo
function clwp_login_logo_change(){
    ?>
    <style>
        #login h1 a, .login h1 a{
            background-image: url(<?php print plugin_dir_url( __FILE__ ) . '/img/logo-sm.png'; ?>);
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts','clwp_login_logo_change');




?>