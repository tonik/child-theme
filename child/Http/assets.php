<?php

namespace App\Theme\Child\Http;

/*
|-----------------------------------------------------------------
| Child Theme Assets
|-----------------------------------------------------------------
|
| This file is for registering your child theme
| stylesheets and scripts, which will be load
| additionaly to the parent theme assets.
|
|
*/

use function App\Theme\Child\asset_path;

/**
 * Registers child theme stylesheet files.
 *
 * @return void
 */
function register_stylesheets() {
    wp_enqueue_style('child-theme-stylesheet', asset_path('css/child-theme.css'));
}
add_action('wp_enqueue_scripts', 'App\Theme\Child\Http\register_stylesheets');
