<?php
//cargamos librerias de terceros
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function infobasic_config(){

    register_nav_menus(
        array(
            'infobasic_main_menu' => 'Info Basic menú principal',
            'infobasic_links_menu' => 'Info Basic menú links',
            'infobasic_negoci_menu' => 'Info Basic menú negoci',
        )
    );

}
add_action( 'after_setup_theme', 'infobasic_config', 0 );

function infobasic_scripts(){
    wp_enqueue_script( "bootstrap_js", get_theme_file_uri("inc/js/bootstrap.min.js"), array("jquery"),"4.5", true );
    wp_enqueue_style( "bootstrap_css", get_theme_file_uri("inc/css/bootstrap.min.css"),array(), "4.5","all" );
    wp_enqueue_style( "custom_css", get_theme_file_uri("css/custom.css"),array(),  filemtime(get_template_directory().'/css/custom.css'),"all" );
}
add_action( 'wp_enqueue_scripts', 'infobasic_scripts');
