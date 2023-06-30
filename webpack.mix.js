const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js", "public/js")
    .sourceMaps()
    .sass("resources/sass/app.scss", "public/css")
    .options({
        processCssUrls: true,
    });


mix.css("resource/css/reset.css", "public/css");