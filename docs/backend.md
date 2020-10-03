---
id: backend
title: Backend
sidebar_label: Backend
---

The `functions.php` file on `themes/{THEME_NAME}/` is the entry point to bootstrap all classes defined on `inc`.

The `inc` directory must contain all the code you normally add on functions.php, but structured in a class way, such as:


```php
<?php
// This code register a custom thumbnail image size.

namespace Aztec\Setup;

use Aztec\Base;

class Thumbnails extends Base {
	protected $sizes = array(
		'custom_thumbnail' => array(
			430,
			290,
			true,
		),
	);

	public function init() {
		add_action( 'after_setup_theme', $this->callback( 'add_image_sizes' ) );
	}

	public function add_image_sizes() {
		foreach ( $this->sizes as $name => $size ) {
			add_image_size( $name, $size[0], $size[1], $size[2] );
		}
	}
}
```

All classes must be inherited from `Aztec\Base` and implemented the `init` methods. On init you usually register or remove actions (`add_action`) and filter (`add_filter`).

Se more about [WordPress Hooks](https://developer.wordpress.org/plugins/hooks/).

## Kernel

The Composer autoload all classes assigned to `$init_classes` on `inc/src/class-kernel.php`. The autoloader follows the WordPress class naming conventions.

See more about [Naming Conventions](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/#naming-conventions) on WordPress.

## Post types

To create a custom post type you need to call the `register_post_type` function on the `init` hook. On Aztlan, a custom post should be something like that:

```php
<?php
// Add `property` custom post type. 

namespace Aztec\Post_Types;

use Aztec\Base;

class Property extends Base {
	const TAXONOMY = 'property';

	public function init() {
		add_action( 'init', $this->callback( 'register_post_type' ) );
	}

	public function register_post_type() {
		register_post_type(
			self::POST_TYPE,
			array(
				'label'        => __( 'Property', 'aztlan' ),
				'public'       => true,
				'has_archive'  => true,
				'show_in_rest' => true,
				'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
			)
		);
	}
}
```
