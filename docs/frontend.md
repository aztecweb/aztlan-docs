---
id: frontend
title: Frontend
sidebar_label: Frontend
---

All frontend assets are keeped on **assets** directory. The Webpack is setup to handle with ESNext, Stylus, Fonts, etc.

The `assets/src` contains the follows subdirectories:
 - app
 - blocks
 - editor

### app
On this directory you can create and include all assets needed for your theme.

### blocks
On this directory, you can create your own Gutenberg Blocks. To create one, you must have the following files:

- `editor.js`: the main JS, where your register a block
- `front.styl`: the styles for the frontend
- `editor.styl`: the styles for the Gutenberg editor

### editor
Here you can customize your WordPress admin pages. All CSS e JS are only included on /wp-admin.

## Install NPM packages
To install NPM packages you can use the alias `node`:

```
node npm install --save bootstrap
```

## Build
Aztlan uses Webpack to bundle all assets. The `assets-build` command build and minify all applications assets. 

## Development
On development workflow, you can use `assets-watch` to watch files and recompile whenever they change.
