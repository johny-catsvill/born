const mix = require('laravel-mix');

if (!mix.inProduction()) {
    mix.webpackConfig({devtool: 'inline-source-map'})
}

/* CONFIG */
mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            '@': __dirname + '/resources/assets/js',
            '@estimate': __dirname + '/resources/assets/js/components/Estimate',
        },
    },
    watchOptions: {
        ignored: /node_modules/
    }
})

/* OPTIONS */
mix.options({
    processCssUrls: false,
    terser: {},
    purifyCss: false,
    //purifyCss: {},
    postCss: [],
    clearConsole: false,
    cssNano: {
        // discardComments: {removeAll: true},
    }
});

/* CSS */
mix.sass('resources/assets/scss/app.scss', 'public/assets/css')
    .sass('resources/assets/scss/calc.scss', 'public/assets/css')
    .sourceMaps(false)
    .version();


/* JS */
mix.js('resources/assets/js/app.js', 'public/assets/js')
    .vue({
        "extractStyles": false
    })
    .sourceMaps(false)
    .version();


/* Browser Sync */
if (!mix.inProduction()) {
    mix.browserSync({
        proxy: 'http://' + 'nginx',
        port: '3000',
        open: false,
    })
}
