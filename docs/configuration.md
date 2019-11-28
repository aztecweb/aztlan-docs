---
id: configuration
title: Configuration
sidebar_label: Configuration
---

## Setup theme
All themes in development are stored in the `themes` directory. Aztlan comes with `aztlan`, a boilerplate theme to get you started.

You can rename the theme as you wish, but you will have to change:

 - The *Text Domain* on `style.css`
 - THEME_ACTIVE variable on `app.env`
 - Reinstall with `./environment/bin/install`

## Environment files
All of configuration files for Aztlan are stored in the `environment/env` directory.

### app.env

Application variables...

|Variable    		|Description                                       	|Default                    |
|-------------------|---------------------------------------------------|---------------------------|
|ENV         		|Application environment: development or production	|development                |
|DB_NAME     		|Database name										|project	                |
|DB_USER     		|Database user										|project	                |
|DB_PASSWORD 		|Database password									|project	                |
|DB_HOST 	 		|Database host										|db	    		            |
|DB_CHARSET	 		|Database charset									|utf8		                |
|DB_COLLATE	 		|Database collate									|			                |
|WP_LANG     		|WordPress language                                	|pt_BR                      |
|WP_HOME     		|WordPress homepage URL                            	|http://localhost           |
|WP_SITEURL  		|WordPress admin URL                               	|http://localhost/wp        |
|AUTH_KEY	 		|Generate on roots.io*                             	|					        |
|SECURE_AUTH_KEY	|Generate on roots.io*                             	|					        |
|LOGGED_IN_KEY		|Generate on roots.io*                             	|					        |
|NONCE_KEY			|Generate on roots.io*                            	|					        |
|AUTH_SALT	 		|Generate on roots.io*                             	|					        |
|SECURE_AUTH_SALT	|Generate on roots.io*                             	|					        |
|LOGGED_IN_SALT		|Generate on roots.io*                             	|					        |
|NONCE_SALT			|Generate on roots.io*                            	|					        |
|WP_DEBUG    		|Enable debug mode on WordPress                    	|false                      |
|ASSETS_URL 		|Webpack dist URL                                 	|http://localhost/assets    |
|THEME_ACTIVE		|Active theme name                                 	|env-theme                  |
*[roots.io/salts](https://roots.io/salts.html)

### build.env

Build variables...

|Variable    		|Description    							|Default    	|
|-------------------|-------------------------------------------|---------------|
|VERSION			|Version of the image that will be built	|0.1			|
|REGISTRY_ENDPOINT	|Registry endpoint							|localhost:5000 |
|REPOSITORY_NAME	|Repository name							|aztlan			|
|WP_LANG			|WP language								|pt_BR			|

### deploy.env

Deploy variables...

|Variable    		|Description    			|Default    	|
|-------------------|---------------------------|---------------|
|DEP_HTTP_USER		|Http user on deploy server	|www-data		|
|DEP_REPOSITORY		|Repository on git			|				|
|DEP_STG_HOST		|Staging host				|				|
|DEP_STG_PORT		|Staging port				|				|
|DEP_STG_USER		|Staging user				|				|
|DEP_STG_PATH		|Staging path				|				|
|DEP_STG_BRANCH		|Staging branch				|				|
|DEP_PROD_HOST		|Production host			|				|
|DEP_PROD_PORT		|Production port			|				|
|DEP_PROD_USER		|Production user			|				|
|DEP_PROD_PATH		|Production path			|				|
|DEP_PROD_BRANCH	|Production branch			|				|

### install.env

Installation variables...

|Variable    		|Description      														|Default        						|
|-------------------|-----------------------------------------------------------------------|---------------------------------------|
|WP_BASH	 		|The bash executable that will be run WP-CLI							|${COMPOSE} run --rm wp bash			|
|CLI_COMPOSER	 	|cli-composer composer command    										|${COMPOSE} run --rm cli-composer		|
|INC_COMPOSER	 	|inc-composer composer command    										|${COMPOSE} run --rm inc-composer		|
|WP_COMPOSER	 	|wp-composer composer command    										|${COMPOSE} run --rm wp-composer		|
|PHPQA_COMPOSER	 	|wp-composer composer command    										|${COMPOSE} run --rm phpqa-composer		|
|NPM	 			|NPM command    														|${COMPOSE} run --rm assets-node npm	|
|WP_TITLE    		|Site title       														|WordPress      						|
|WP_USER     		|Admin username*   														|admin          						|
|WP_PASSWORD 		|Admin password*   														|admin          						|
|WP_EMAIL    		|Admin email*      														|admin@admin.com						|
|COPY_START_UPLOADS	|Define if the uploads on environment/extra/uploads must be copied 		|true									|
|UPLOADS_DIR    	|the place where will be copied the uploads stored 						|public/packages/uploads				|
|SET_PERMISSIONS    |Define if the permissions will be set with www-data user as owner      |true									|
|PERMALINK    		|Define the permalink structure     									|/%postname%/							|
|SET_PRE_COMMIT    	|Define if pre-commit will be active     								|true									|
>\* Do not use this default values in production

### mysql.env

Database variables...
> Do not use this default values in production

|Variable    			|Description            |Default    |
|-----------------------|-----------------------|-----------|
|MYSQL_ROOT_PASSWORD	|Database root password	|root		|
|MYSQL_DATABASE			|Database name			|project	|
|MYSQL_USER				|Database user			|project	|
|MYSQL_PASSWORD			|Database password		|project	|

### xdebug.env

XDebug variables...

|Variable    				|Description    |Default    	|
|---------------------------|---------------|---------------|
|PHP_XDEBUG_PROFILE_ENABLE	|Profile enable	|Off			|
|PHP_XDEBUG_REMOTE_ENABLE	|Remote enable	|On				|
|PHP_XDEBUG_REMOTE_HOST		|Remote host	|10.254.254.254	|
|PHP_XDEBUG_AUTO_TRACE		|Auto trace		|Off			|
|PHP_XDEBUG_IDEKEY			|IDE key		|VSCODE			|


