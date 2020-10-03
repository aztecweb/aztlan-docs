---
id: templates
title: Templates
sidebar_label: Templates
---

All theme PHP templates must be created on `themes/{THEME_NAME}`. By default, a fresh Azltan installation contains the aztlan theme.

## functions.php

To create a new theme or import a existing one, create a new directory on `themes` and make sure the functions.php file has the following lines:

```php
<?php
use Aztec\Kernel;

global $container;

$builder   = new \DI\ContainerBuilder();
$container = $builder->build();

$container->get( Kernel::class )->init();
```

This code starts the Dependency Injection and register all classes defined on `inc/src/class-kernel.php`.

## Set default theme

To set the default theme, change the variable `THEME_ACTIVE` on `environment/env/install.env` and run `./environment/bin/install`. 
