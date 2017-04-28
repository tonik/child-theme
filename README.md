# Child Theme for Tonik WordPress Starter Theme

### Child theme boilerplate for Tonik Starter Theme based themes. Makes easy to customize and overwrite parent theme components. Additionaly provides the same set of tools for child theme development.

### Requirements

Make sure you have all these dependences installed before moving on:

- WordPress >= 4.7
- PHP >= 5.6
- [Composer](https://getcomposer.org)

## Installation

### Creating new Theme

Create project via `composer create-project` composer command.

```bash
$ composer create-project tonik/child-theme <theme-name>
```

You can also directly download or clone the repository to the `wp-content/themes` directory.

```bash
# Clone repository to the <theme-name> folder.
$ git clone git@github.com:tonik/child-theme.git <theme-name>
```

### Resolving Dependences

Install back-end dependencies and generate an autoloading file.

```bash
# Install composer dependencies.
$ composer install -o
```

## Development

### Initializing a Child Theme

Boilerplate comes with simple CLI and `tonik` command, which allows you to easily fill theme details and information like name, description and project namespace. Simply call `vendor/bin/tonik` command in the theme root directory. A setup wizard will guide you through the entire process.

```bash
# Run setup wizard.
$ vendor/bin/tonik
```

### Building a Child Theme

By default child theme boilerplate do not comes with any task runner of manager for theme assets. However, if you need it, you can copy relevant Webpack configuration files and settings directly from parent theme.

### Folders and Files Structure

This child theme and parent theme files was divided into separate files and folders. This makes it easy to overwrite parent theme files and developing child specific ones at the same time.

```
child                               # — Root of your chld theme
    ├── app/                        # — Parent Theme application files (to overwrite)
    ├── bootstrap/                  # — Files responsible for bootstrapping a theme
    │   ├── theme.php               # — Theme bootstraper script (don't edit)
    ├── child/                      # — Child Theme application logic
    │   ├── Http/                   # — Http layer of child theme
    │   │   ├── assets.php          # — Child Theme styles and scripts loading
    │   ├── Setup/                  # — Setups for child theme
    │   │   ├── supports.php        # — Child Theme supports
    │   ├── helpers.php             # — Collection of helper functions
    ├── config/                     # — Configuration files
    │   ├── app.php                 # — Theme configuration file
    ├── public/                     # — Front-end compiled/builded assets
    ├── resources/                  # — Resources files
    │   ├── languages               # — Child Theme translations
    │   ├── templates               # — Child Theme templates
    ├── composer.json               # — PHP dependences and PSR-4 Autoloading
    ├── functions.php               # — Bootstrapping the theme. Initiates Autoloader and Composer (don't edit)
    ├── package.json                # — NPM dependencies and scripts
    ├── screenshot.png              # — Child Theme screenshot image
    ├── style.css                   # — Child Theme details information (don't write any CSS declarations in here)
```

## Contributing

Great that you are considering supporting the project. You have a lot of ways to help us grow. We appreciate all contributions, even the smallest.

- Report an issue
- Propose a feature
- Send a pull request
- Star project on the [GitHub](https://github.com/tonik/child-theme)
- Tell about project around your community

## License

The Tonik Starter Theme is licensed under the [MIT license](http://opensource.org/licenses/MIT).