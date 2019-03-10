const mix = require('laravel-mix');

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
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/formularios/formularioBrand.scss', 'public/css/formularios/')
   .js('resources/js/validaciones/validacionFormularioBrand.js', 'public/js/validaciones/')
   .js('resources/js/busqueda/busqueda.js', 'public/js/busqueda/')
   .js('resources/js/validaciones/validacionRegistro.js', 'public/js/validaciones/')
   .js('resources/js/crud/create.js', 'public/js/crud/')
   .js('resources/js/crud/edit.js', 'public/js/crud/')
   .js('resources/js/paginate/paginate.js', 'public/js/paginate/')
   .js('resources/js/crud/read.js', 'public/js/crud/');

if (mix.inProduction()) {
   mix.version();
}
