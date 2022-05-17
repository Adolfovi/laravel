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

mix.js('resources/js/front/desktop/app.js', 'public/front/js/desktop').version()
.js('resources/js/front/mobile/app-mobile.js', 'public/front/js/mobile').version()
.sass('resources/sass/front/app.scss', 'public/front/css/desktop').version()
.sass('resources/sass/front/app-mobile.scss', 'public/front/css/mobile').version()
