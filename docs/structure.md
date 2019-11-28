---
id: structure
title: Directory Structure
sidebar_label: Directory Structure
---

After installing Aztlan, you now have a skeleton to work from for your specific theme.

## Directory Structure

As shown after you installed Aztlan, the install script created a directory structure similar to:

```text
.
├── assets
│   ├── dist
│   ├── languages
│   ├── node_modules
│   └── src
│   	├── app
│   	|	├── fonts
│   	|	├── js
│   	|	└── stylus
│   	├── blocks (guttenberg blocks)
│   	├── common (common files to blocks, editor and app)
│   	└── editor (styles for guttenberg editor)
│   		└── stylus
├── cli
├── deploy
│   └── .ssh
├── environment
│   ├── bin
│   |	└── shared
│   ├── docker
│   |	├── deployer
│   |	├── livereload
│   |	├── nginx
│   |	├── wp-cli
│   |	└── wp-fpm
│   ├── env
│   ├── extra
│   │   └── uploads
│   ├── initdb
│   └── xdebug
├── inc
│   ├── languages
│   └── src
│   	├── aztlan
│   	|	├── assets
│   	|	└── integration
│   	└── setup
├── phpqa
├── public
│   ├── packages
│   |	├── languages
│   |	├── mu-plugins
│   |	├── plugins
│   |	├── theme
│   |	├── upgrade
│   |	└── uploads
│   ├── wp
│   |	├── wp-admin
│   |	├── wp-content
│   |	└── wp-includes
├── themes
│   └── aztlan
├── wp-packages
|   ├── languages
|   │   ├── plugins
|   │   └── themes
|   ├── mu-plugins
|   ├── private
|   |	├── plugins
|   |   └── themes
|   └── vendor
└── xdebug
```

## Directory Descriptions

### assets
All the assets are bundle by [Webpack](https://webpack.js.org/).

 - `dist`: the compiled codes for distribution;
 - `language`: translate files for js;
 - `node_modules`: Node packages directory;
 - `src`: all sources files;
 - `src/app/fonts`: the directory contains the web fonts;
 - `src/app/js`: the directory contains ES6 modules, transpilled by [Babel](https://babeljs.io/);
 - `src/app/stylus`: the directory contains Stylus files, all modules must be included on `style.styl`.
 - `src/blocks`:  gutenberg blocks;
 - `src/common`:  common files to blocks, editor and app;
 - `src/editor`:  styles for guttenberg editor;

### cli
The `cli` directory contains classes to extends [WP CLI](https://wp-cli.org/) commands.

### deploy
The `deploy` directory contains all necessary files to [Deployer](https://deployer.org/).

### environment
The `environment` directory contains all necessary files to build up the Docker containers.

 - `bin`: the directory contains environment routine scripts;
 - `bin/shared`: shared files for others scripts;
 - `docker`: the directory contains all Dockerfiles;
 - `env`: the directory contains all environment variables;
 - `extra/uploads`: the directory contains all required uploads files for the theme to work;
 - `initdb`: the directory can contain a MySQL dump to be use as initial database;

### inc
The `inc` directory contains all theme classes.

 - `src`: the directory contains all theme classes;
 - `languages`: the directory contains translations for classes;

### phpqa
Tools to analyze PHP code.

### public
The `public` directory contains the WordPress installation.

 - `package`: the `wp-content` directory.
 - `wp`: the WordPress core.

### themes
The `themes` directory contains all availables themes.

### wp-packages
The `wp-packages` directory contains all themes and plugins installed via [WordPress Packagist](https://wpackagist.org/).

 - `languages`: the directory contains translations for 3rd party themes and plugins;
 - `mu-plugins`: the directory contains must-use plugins;
 - `private`: the directory contains the plugins and themes ZIP files, they are activated on installation.
