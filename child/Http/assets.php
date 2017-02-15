<?php

namespace {{ theme.namespace }}\Theme\Http;

use function {{ theme.namespace }}\Theme\asset_path;

add_action('wp_enqueue_scripts', function () {
    // wp_enqueue_style('child-theme', asset_path('css/child-theme.css'));
});
