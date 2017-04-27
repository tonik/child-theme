<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Theme Textdomain
    |--------------------------------------------------------------------------
    |
    | Determines the textdomain for your theme. Should be used to dynamically set
    | namespace for `gettext` strings across theme. Remember, this value must
    | be in sync with `Text Domain:` declaration inside style.css theme file.
    |
    */
   'textdomain' => '{{ theme.textdomain }}',

    /*
    |--------------------------------------------------------------------------
    | Theme Root Paths
    |--------------------------------------------------------------------------
    |
    | This values determines the "root" paths of your theme. By default,
    | they use WordPress `get_template_directory` functions and
    | probably you don't need make any changes in here.
    |
    */
    'paths' => [
        'directory' => get_stylesheet_directory(),
        'uri' => get_stylesheet_directory_uri(),
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates files extension
    |--------------------------------------------------------------------------
    |
    | Determines the theme's templates settings like an extension of the files.
    | By default, they use `.tpl.php` suffix to distinguish template files
    | from controllers, but you are free to change it however you like.
    |
    */
    'templates' => [
        'extension' => '.tpl.php'
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme Directory Structure Paths
    |--------------------------------------------------------------------------
    |
    | This array of directories will be used within core for locating
    | and loading theme files, assets and templates. They must be
    | given as relative to the `root` theme directory.
    |
    */
    'directories' => [
        'languages' => 'resources/languages',
        'templates' => 'resources/templates',
        'public' => 'public',
        'app' => 'child',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Theme Components
    |--------------------------------------------------------------------------
    |
    | The components listed below will be automatically loaded on the
    | theme bootstrap by `functions.php` file. Feel free to add your
    | own files to this array which you would like to autoload.
    |
    */
    'autoload' => [
        'helpers.php',
        'Http/assets.php',
        'Setup/supports.php',
    ],
];
