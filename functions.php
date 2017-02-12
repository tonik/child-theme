<?php

// Require Composer's autoloading file
// if it's present in theme directory.
if (file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    require $composer;
}

// Child theme have to be bootstraped after parent
// theme load. We will use `after_load` action
// to delay loading of this child theme.
add_action('Tonik\Gin\Foundation\Autoloader\after_load', function () {
	$theme = require_once __DIR__ . '/bootstrap/theme.php';

	(new Tonik\Gin\Foundation\Autoloader($theme->get('child.config')))->load();
});