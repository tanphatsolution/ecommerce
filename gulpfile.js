process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');
var vueify = require('vueify');
//var elixirTypscript = require('elixir-typescript');
var plugins = require('./npm/plugins');
var config = require('./npm/config');

require('./npm/elixir.extensions');

elixir.config.js.browserify.watchify.options.poll = true;

elixir.config.js.browserify.transformers.push({
  name: 'vueify'
});
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

elixir(function(mix) {
    mix
    .copy(config.paths.plugins.img.in, config.paths.plugins.img.out)
    .bower(config.paths.plugins.bower, plugins.bower)
    .vue(config.paths.plugins.vue, plugins.vue)
    .sass('backend/*.scss','public/assets/css/backend/backend.css')
    .sass('frontend/*.scss','public/assets/css/frontend/frontend.css')
    .styles([
        '../bower/sweetalert/dist/sweetalert.css',
        '../bower/animate.css/animate.min.css',
        '../bower/toastr/toastr.min.css',
        '../bower/bootstrap-toggle/css/bootstrap-toggle.min.css',
        ], 'public/assets/css/backend/plugins.css')
    .styles([
        '../css/frontend/*.css',
        '../bower/animate.css/animate.min.css',
        '../bower/owl.carousel/dist/assets/owl.carousel.min.css',
        ], 'public/assets/css/frontend/style.css')
    .scripts([
        'laroute.js',
        'backend.js',
        '../bower/AdminLTE/dist/js/app.min.js',
        '../bower/jquery-slimscroll/jquery.slimscroll.min.js',
        '../bower/sweetalert/dist/sweetalert.min.js',
        '../bower/toastr/toastr.min.js',
        '../bower/bootstrap-toggle/js/bootstrap-toggle.min.js',
      ],'public/assets/js/backend/backend.js')
    .scripts([
        'laroute.js',
        '../bower/owl.carousel/dist/owl.carousel.min.js',
        '../bower/elevatezoom/jquery.elevatezoom.js',
        'frontend.js'
    ],'public/assets/js/frontend/frontend.js')
    .version([
        'assets/css/backend/backend.css',
    	'assets/css/frontend/frontend.css',
        'assets/js/backend/backend.js',
        'assets/js/frontend/frontend.js',
        'assets/vue/backend/dropzone.js',
        'assets/vue/frontend/category.js',
    	])
    .browserSync({
        proxy: 'ecm.dev'
      });
});
