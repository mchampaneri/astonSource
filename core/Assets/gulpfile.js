const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir.config.assetsPath = 'core/Assets/';


elixir(function(mix) {
    mix.sass([
        "core.scss"
    ],'public/core/assets/css');

    mix.scripts([
        'jquery/jquery.js',
        'bootstrap/js/bootstrap.js',
        'datatables/js/dataTables.bootstrap4.js',
        'summernote/js/summernote.js'
        // '../js/app.js'
    ],'public/core/assets/js/all.js','core/Assets/plugins');
});
