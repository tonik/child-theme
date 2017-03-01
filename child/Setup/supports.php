<?php

namespace {{ theme.namespace }}\Setup;

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

use function {{ theme.namespace }}\config;

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
add_action('after_setup_theme', '{{ theme.namespace }}\Setup\load_textdomain');