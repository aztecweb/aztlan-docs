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
│   ├── fonts
│   ├── js
│   ├── stylus
├── cli
├── deploy
├── environment
│   ├── bin
│   ├── docker
│   ├── env
│   ├── extra
│   │   └── uploads
│   ├── initdb
├── inc
│   ├── languages
│   └── src
├── phpqa
├── public
│   ├── wp
│   ├── packages
├── themes
│   └── env-theme
└── wp-packages
    ├── languages
    │   ├── plugins
    │   └── themes
    ├── mu-plugins
    └── private
        ├── plugins
        └── themes
```

## Directory Descriptions

### assets
All the assets are bundle by [Webpack](https://webpack.js.org/).

 - `fonts`: the directory contains the web fonts;
 - `js`: the directory contains ES6 modules, transpilled by [Babel](https://babeljs.io/);
 - `stylus`: the directory contains Stylus files, all modules must be included on `style.styl`.

### cli
The `cli` directory contains classes to extends [WP CLI](https://wp-cli.org/) commands.

### deploy
The `deploy` directory contains all necessary files to [Deployer](https://deployer.org/).

### environment
The `environment` directory contains all necessary files to build up the Docker containers.

 - `bin`: the directory contains environment routine scripts;
 - `docker`: the directory contains all Dockerfiles;
 - `env`: the directory contains all environment variables;
 - `extra/uploads`: the directory contains all required uploads files for the theme to work;
 - `initdb`: the directory can contain a MySQL dump to be use as initial database;

### inc
The `inc` directory contains all theme classes.

### phpqa
Tools to analyze PHP code.

### public
The `public` directory contains the WordPress installation.

 - `wp`: the WordPress core.
 - `package`: the `wp-content` directory.

### themes
The `themes` directory contains all availables themes.

### wp-packages
The `wp-packages` directory contains all themes and plugins insatlled via [WordPress Packagist](https://wpackagist.org/).
