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
    .js('resources/js/counter.js', 'public/js')
    .js('resources/js/animation.js', 'public/js')
    .js('resources/js/loading.js', 'public/js')
    .js('resources/js/country_menu.js', 'public/js')
    .js('resources/js/datepicker.js', 'public/js')
    .js('resources/js/like.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    //.sass('resources/sass/header.scss', 'public/css')
    /*.options({
        processCssUrls: false
    })*/
    .sourceMaps()
    .version();
    
    /*if (mix.inProduction()) {
    mix.version();
}*/
