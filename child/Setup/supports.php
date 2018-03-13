<?php

namespace Tonik\Theme\Child\Setup;

/*
|-----------------------------------------------------------
| Theme Supports
|-----------------------------------------------------------
|
| This file enables theme supports, which activates various
| WordPress functions used or required by this child
| theme. By default we enabled most common for you.
|
*/

use function Tonik\Theme\Child\config;

/**
 * Loads the child theme textdomain.
 *
 * @return void
 */
function load_textdomain() {
    $paths = config('paths');
    $directories = config('directories');

    load_child_theme_textdomain(config('textdomain'), "{$paths['directory']}/{$directories['languages']}");
}
add_action('after_setup_theme', 'Tonik\Theme\Child\Setup\load_textdomain');
