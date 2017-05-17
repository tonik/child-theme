<?php

/*
 |------------------------------------------------------------------
 | Bootstraping a Child Theme
 |------------------------------------------------------------------
 |
 | This file is responsible for bootstrapping your theme. Autoloads
 | composer packages and loads child theme files. Most likely,
 | you don't need to change anything in this file. Your
 | theme custom logic should be distributed across a
 | separated components in the `/app` directory.
 |
 */

// Require Composer's autoloading file
// if it's present in theme directory.
if (file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    require $composer;
}

// Child theme **HAVE TO** be bootstraped after parent
// theme load. We will use `after_load` action
// to delay loading of this child theme.
add_action('tonik/gin/autoloader/after_load', function () {
    static $bootstraped = false;

    if (! $bootstraped) {
        $bootstraped = true;

        $theme = require_once __DIR__ . '/bootstrap/theme.php';

        (new Tonik\Gin\Foundation\Autoloader($theme->get('child.config')))->register();
    }
});
