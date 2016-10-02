const elixir = require('laravel-elixir');

 //
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

elixir.config.assetsPath = 'core/Assets/';


elixir(function(mix) {
    mix.sass([
        "core.scss"
    ],'public/core/assets/css');

    mix.scripts([
       '../../../node_modules/jquery/dist/jquery.js',
       '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
       '../../../node_modules/bootstrap-confirmation2/bootstrap-confirmation.js',
       '../../../node_modules/bootstrap-slider/src/js/bootstrap-slider.js',
       '../../../node_modules/summernote/dist/summernote.js',
       '../../../node_modules/datatables/media/js/jquery.dataTables.js',
       '../../../node_modules/datatables-responsive/js/dataTables.responsive.js',
       '../../../node_modules/datatables-responsive/js/responsive.bootstrap.js',
       '../../../node_modules/select2/dist/js/select2.full.js',
       '../../../vendor/kartik-v/bootstrap-fileinput/js/fileinput.js',
       '../../../node_modules/toastr/toastr.js',
       '../../../node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
        // Aston Workspace Config Files //
       '../js/aston-init.js'
    ],'public/core/assets/js/all.js','core/Assets/plugins');

    mix.browserify('vuefiles.js','public/core/vue/all.js');
});
