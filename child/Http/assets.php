<?php

namespace Tonik\Theme\Child\Http;

/*
|-----------------------------------------------------------------
| Child Theme Assets
|-----------------------------------------------------------------
|
| This file is for registering your child theme
| stylesheets and scripts, which will be load
| additionaly to the parent theme assets.
|
*/

use function Tonik\Theme\Child\asset_path;

/**
 * Registers child theme stylesheet files.
 *
 * @return void
 */
function register_stylesheets() {
    wp_enqueue_style('child-app', asset_path('css/child.css'));
}
add_action('wp_enqueue_scripts', 'Tonik\Theme\Child\Http\register_stylesheets');
