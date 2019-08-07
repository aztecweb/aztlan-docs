---
id: commands
title: Commands
sidebar_label: Commands
---

To take advantage of the commands alias you need load the profile file to your current shell:

```bash
$ source /environment/profile
```

## Assets
Aztlans provide a [Webpack](https://webpack.js.org/) configuration to bundle your scripts, styles, fonts and images in two modes:

### Development
Build assets on development mode and watch for changes:

```bash
$ assets-watch
```

### Production
Build assets on production mode:

```bash
$ assets-build
```

## Code standard
Provides a collection of tools to improve your code quality.

### PHPCBF
Fixing PHP errors automatically:

```bash
$ phpqa phpcbf
```

### PHPCS
PHP Code Sniffer following the [WordPress-Coding-Standards](https://github.com/WordPress/WordPress-Coding-Standards) rules:

```bash
$ phpqa phpcs
```

### JSLint
Run JavaScript linter following the [@wordpress/eslint-plugin](https://www.npmjs.com/package/@wordpress/eslint-plugin) rules:

```bash
$ jslint
```

### Stylint
Run Stylus linter:

```bash
$ stylint
```

## Database

### Export
Export the current state of database:

```bash
$ db-export
```

### Reload
Reset database and load a MySQL dump from `environment/initdb`:

```bash
$ db-reload
```

## Logs
See Nginx logs from WordPress:

```bash
$ wp-logs
```

## i18n
Create a POT file on your current theme for internationalization:

```bash
$ i18n
```

## WP CLI
Command line interface for WordPress. You can [check here](https://developer.wordpress.org/cli/commands/) all availables commands.

```bash
$ wp plugin list
```

## MailCatcher
Aztlans comes integrated with [MailCatcher](https://mailcatcher.me/). You can access http://localhost:1080 to display in a web interface.

## Docker Sync
Aztlans comes integrated with [Docker Sync](http://docker-sync.io/). More Informations soon.

## Xdebug
Aztlans comes integrated with [Xdebug](https://xdebug.org/). More Informations soon.
