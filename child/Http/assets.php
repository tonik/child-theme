<?php

namespace {{ theme.namespace }}\Theme\Http;

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

use function {{ theme.namespace }}\Theme\asset_path;

/**
 * Registers child theme stylesheet files.
 *
 * @return void
 */
function register_stylesheets() {
    wp_enqueue_style('child-theme-stylesheet', asset_path('css/child-theme.css'));
}
add_action('wp_enqueue_scripts', '{{ theme.namespace }}\Http\register_stylesheets');
