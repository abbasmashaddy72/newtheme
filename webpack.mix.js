const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')

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

mix.copyDirectory(
    'node_modules/@fortawesome/fontawesome-free/webfonts',
    'public/webfonts'
)
    .js('resources/js/app.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css', {}, [
        tailwindcss('./tailwind.config.js')
    ])
    .options({
        processCssUrls: false
    })

mix.js('resources/js/app-admin.js', 'public/js')
    .postCss('resources/css/app-admin.css', 'public/css', {}, [
        tailwindcss('./tailwind-admin.config.js')
    ])
    .options({
        processCssUrls: false
    })
