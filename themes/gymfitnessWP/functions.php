<?php


// create the function and use WP hooks (to hook the function into WordPress)
//create menu 

function gymfitness_menus()
{
    //WorPress Function 
    register_nav_menus(array(
        'main-menu' => 'Main Menu'

    ));
}

//Hook

add_action('init', 'gymfitness_menus');


// Add Stylesheets and JS files 

function gymfitness_scripts()
{

    //Normalize CSS

    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    // Google Font 

    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');
