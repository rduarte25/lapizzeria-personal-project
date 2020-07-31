<?php

/* Esta funcion registra los style de la pizzeria */

function lapizzeria_styles() {

    //Registro de styles.
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '5.0' );

    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array( 'normalize' ), '1.0' );

    //Llamada de los styles.
    wp_enqueue_style( 'normalize' );
    
    wp_enqueue_style( 'style' );

}

/* Esta función registra la acción de los estilos */

add_action( 'wp_enqueue_scripts', 'lapizzeria_styles' );

/* función para registrar los menus */

function lapizzeria_menus(){

    register_nav_menus( array( 
        'header-menu' => __( 'Header Menu', 'lapizzeria' ),
        'social-menu' => __( 'Social Menu', 'lapizzeria' ),
     ) );

}

/* agregando la accion */
add_action( 'init', 'lapizzeria_menus' );