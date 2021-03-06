// const mix = require('laravel-mix');

// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel applications. By default, we are compiling the CSS
//  | file for the application as well as bundling up all the JS files.
//  |
//  */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);



const mix = require('laravel-mix');
require('dotenv').config();
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

mix.options({
    processCssUrls: false
});

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
        .sourceMaps()
}

// mix.sass('resources/css/style.scss', 'public/css');

// mix.js('resources/js/app.js', 'public/js/app.js').react();
mix.js('resources/js/search.js', 'public/js/search.js').react();
mix.js('resources/js/brands/search.js', 'public/js/brands/search.js').react();
mix.js('resources/js/reviews.js', 'public/js/reviews.js').react();
mix.js('resources/js/map/map.js', 'public/js/map.js');
mix.js('resources/js/map/continent.js', 'public/js/continent.js');
mix.sass('resources/sass/main.scss', 'public/css');

mix.browserSync({
    host: 'localhost',
    port: 3000,
    proxy: {
        target: process.env.APP_URL // Yay! Using APP_URL from the .env file!
    }
});

// add versioning
mix.version();