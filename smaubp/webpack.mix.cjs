let mix = require('laravel-mix');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css')
    .sass('resources/sass/app.scss', 'public/css');;
