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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);


mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/lightgallery.min.css',
    'resources/css/style.css',
    'resources/css/custom.css',
], 'public/css/all.css');


mix.scripts([
    'resources/js/jquery.min.js',
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/nouislider.min.js',
    'resources/js/lightgallery.min.js',
    'resources/js/lg-thumbnail.min.js',
    'resources/js/lg-zoom.min.js',
    'resources/js/number.js',
    'resources/js/main.js',
    'resources/js/svg4everybody.min.js',
], 'public/js/all.js');