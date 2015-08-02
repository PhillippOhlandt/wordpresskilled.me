var elixir = require('laravel-elixir');

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
    mix.rubySass('app.sass', 'resources/assets/css');
    mix.styles([
     "../../..//node_modules/materialize-css/bin/materialize.css",
     "app.css"
    ]);

    mix.browserify('app.js', 'resources/assets/js/browserify.js');

    mix.scripts([
     '../../..//node_modules/jquery/dist/jquery.js',
     '../../..//node_modules/materialize-css/bin/materialize.js',
     'browserify.js'
    ], 'public/js/bundle.js')

    mix.version(["css/all.css", "js/bundle.js"]);
});
