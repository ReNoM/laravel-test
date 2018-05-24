let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('resources/assets/js/bootstrap.min.js', 'public/js')
   .copy('resources/assets/js/popper.min.js', 'public/js')
   .copy('resources/assets/js/jquery-3.2.1.min.js', 'public/js')
   .copy('resources/assets/css/app.css', 'public/css')
   .copy('resources/assets/css/bootstrap.min.css', 'public/css');
