const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
    mix.js('resources/js/main.js', 'public/js');
    mix.js('resources/js/sw.js', 'public/js');
    mix.js('resources/icon/app-icon-128x128.png', 'public/icon');
    mix.js('resources/icon/app-icon-512x512.png', 'public/icon');
