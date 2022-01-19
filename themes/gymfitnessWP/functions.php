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
