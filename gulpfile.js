 require('./core/Assets/gulpfile.js');

const elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
 elixir.config.assetsPath = 'resources/assets';

elixir(function(mix) {

    mix.sass([
        "app.scss"
    ],'public/css/app.css');


     mix.browserify('app.js','public/js/app.js');
 });




