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

mix.js('resources/js/front/desktop/app.js', 'public/admin/js/front/desktop').version()
.js('resources/js/front/mobile/app-mobile.js', 'public/admin/js/front/mobile').version()
.sass('resources/sass/front/app.scss', 'public/admin/css/front/desktop').version()
.sass('resources/sass/front/app-mobile.scss', 'public/admin/css/front/mobile').version()