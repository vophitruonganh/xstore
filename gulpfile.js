const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */



elixir((mix) => {
    mix.sass('app.scss','public/css/bootstrap.css')
       .webpack('bootstrap.js');
});

// var jquery = require('gulp-jquery');
// gulp.task('jquery', function () {
//     return jquery.src({
//         release: 2, //jQuery 2
//         flags: ['jquery','-deprecated', '-event/alias', '-ajax/script', '-ajax/jsonp', '-exports/global']
//     })
//     .pipe(gulp.dest('./public/js/'));
//     // creates ./public/vendor/jquery.custom.js
// });