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
```bash
$ assets-watch
```

### Production
```bash
$ assets-build
```

## Code standard
Provides a collection of tools to improve code quality.

### PHPCBF
Fixing PHP errors automatically:

```bash
$ phpqa phpcbf
```

### PHPCS
PHP Code Sniffer follow the [WordPress-Coding-Standards](https://github.com/WordPress/WordPress-Coding-Standards) rules:

```bash
$ phpqa phpcs
```

### JSLint
Run JavaScript linter, follow the [@wordpress/eslint-plugin](https://www.npmjs.com/package/@wordpress/eslint-plugin) rules:

```bash
$ jslint
```

### Stylint
Stylus linter:

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

## SMTP
Aztlans comes integrated with [Xdebug](https://xdebug.org/).

## Docker Sync
Aztlans comes integrated with Docker Sync. Click here to see how to integrate MacOS with Docker Sync.

## Xdebug
Aztlans comes integrated with [Xdebug](https://xdebug.org/). Click here to see how to integrate with VSCode.
