const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .scripts([
        'resources/vendor/jquery.easing.min.js',
        'resources/vendor/sb-admin-2.min.js',
        'resources/vendor/Chart.min.js',
        'resources/demo/chart-area-demo.min.js',
        'resources/demo/chart-pie-demo.min.js',
        'resources/vendor/jquery.dataTables.min.js',
        'resources/vendor/dataTables.bootstrap4.min.js',
        'resources/demo/datatables-demo.js',
    ], 'public/js/admin_all.js'); 
