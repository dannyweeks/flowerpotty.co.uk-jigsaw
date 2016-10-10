var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';
//elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix.sass('main.scss', 'source/css/main.css', {
        includePaths: ['node_modules/foundation-sites/scss/']
    }).scripts([
        './node_modules/jquery/dist/jquery.js',
        //'./node_modules/foundation-sites/dist/foundation.js',
        './node_modules/foundation-sites/js/foundation.core.js',
        './node_modules/foundation-sites/js/foundation.util.mediaQuery.js',
        './node_modules/foundation-sites/js/foundation.sticky.js',
        './node_modules/foundation-sites/js/foundation.magellan.js',
        'source/_assets/js/main.js'
    ], 'source/js/all.js', 'source/_assets/js')
        .exec('jigsaw build', ['./source/**/*', '!./source/_assets/**/*'])
        .browserSync({
            reloadDelay: 1000,
            reloadDebounce: 1000,
            injectChanges: false,
            server: {
                baseDir: 'build_local'
            },
            port: 1989,
            proxy: null,
            files: ['build_local/**/*']
        });
});
