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
    .js('resources/js/menu.js', 'public/js')
    // .postCss('resources/css/app.css', 'public/css', [
        //
    // ])
    .less('resources/less/general.less', 'public/css')
    .less('resources/less/index.less', 'public/css')
    .less('resources/less/about.less','public/css')
    .less('resources/less/catalog.less','public/css')
    .less('resources/less/favorite.less','public/css')
    .less('resources/less/basket.less','public/css')
    .less('resources/less/card.less','public/css')


// mix.styles('resources/less/id.css', 'public/less/id.css')
