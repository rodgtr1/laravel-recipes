const mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

mix.browserSync({
   proxy: 'localhost:8888'
});


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


mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/index.scss', 'public/css/app.css')
   .options({
      processCssUrls: false,
      postCss: [ tailwindcss('./tailwind.js') ],
   });