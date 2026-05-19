const mix = require("laravel-mix");

mix.sourceMaps(true, 'source-map') //Source maps enabled for dev, can be turned off for production
  .js('resources/js/app.js', 'public/js')
  .vue({ version: 2 })
  .sass('resources/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss:[ require("@tailwindcss/jit") ]
  })
  .version();

mix.browserSync(process.env.APP_URL);
