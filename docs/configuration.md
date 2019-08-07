---
id: configuration
title: Configuration
sidebar_label: Configuration
---

## Setup theme
All themes in development are stored in the `themes` directory. Aztlan comes with `env-theme`, a boilerplate theme to get you started.

You can rename the theme as you wish, but you will have to change:

 - The *Text Domain* on `style.css`
 - THEME_ACTIVE variable on `app.env`
 - Reinstall with `./environment/bin/install`

## Environment files
All of configuration files for Aztlan are stored in the `environment/env` directory.

### app.env

Application variables...

|Variable    |Description                                       |Default            |
|------------|--------------------------------------------------|-------------------|
|ENV         |Application environment: development or production|development        |
|WP_LANG     |WordPress language                                |pt_BR              |
|WP_HOME     |WordPress homepage URL                            |http://localhost   |
|WP_SITEURL  |WordPress admin URL                               |http://localhost/wp|
|WP_DEBUG    |Enable debug mode on WordPress                    |false              |
|THEME_ACTIVE|Active theme name                                 |env-theme          |

### install.env

Installation variables...

|Variable    |Description      |Default        |
|------------|-----------------|---------------|
|WP_TITLE    |Site title       |WordPress      |
|WP_USER     |Admin username   |admin          |
|WP_PASSWORD |Admin password   |admin          |
|WP_EMAIL    |Admin email      |admin@admin.com|
