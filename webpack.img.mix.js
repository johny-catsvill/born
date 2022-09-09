const mix = require('laravel-mix');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const imageminMozjpeg = require('imagemin-mozjpeg');

require('laravel-mix-webp');
require('laravel-mix-polyfill');

/* CONFIG */
mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            '@': __dirname + '/resources/assets/js',
        },
    },
    watchOptions: {
        ignored: /node_modules/
    }
})

mix.options({ manifest: false })


/* IMAGES */
mix.webpackConfig({
    plugins: [
        // Создаем svg-спрайт с иконками
        new SVGSpritemapPlugin(
            'resources/assets/icons/*.svg', // Путь относительно каталога с webpack.mix.js
            {
                output: {
                    filename: 'assets/images/icons.svg', // Путь относительно каталога public/
                    svg4everybody: false, // Отключаем плагин "SVG for Everybody"
                    svg: {
                        sizes: false // Удаляем инлайновые размеры svg
                    },
                    chunk: {
                        keep: true, // Включаем, чтобы при сборке не было ошибок из-за отсутствия spritemap.js
                    },
                    svgo: {
                        plugins : [
                            {
                                'removeStyleElement': false // Удаляем из svg теги <style>
                            },
                            {
                                'removeAttrs': {
                                    attrs: ["fill", "stroke"] // Удаляем часть атрибутов для управления стилями из CSS
                                }
                            },
                        ]
                    },
                },
                sprite: {
                    prefix: 'icon-', // Префикс для id иконок в спрайте, будет иметь вид 'icon-имя_файла_с_иконкой'
                    generate: {
                        title: false, // Не добавляем в спрайт теги <title>
                    },
                },
            }
        ),
        // Копируем картинки из каталога ресурсов в публичный каталог
        new CopyWebpackPlugin({
            patterns: [
                {
                    from: 'resources/assets/images', // Путь относительно каталога с webpack.mix.js
                    to: 'assets/images', // Путь относительно каталога public/,
                },
            ],
        }),
        // Оптимизируем качество изображений
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif)$/i,
            plugins: [
                imageminMozjpeg({
                    quality: 80,
                    progressive: true,
                }),
            ],
        }),
    ],
})
// Создаем WEBP версии картинок
.ImageWebp({
    from: 'resources/assets/images', // Путь относительно каталога с webpack.mix.js
    to: 'public/assets/images', // Путь относительно каталога с webpack.mix.js
    imageminWebpOptions: {
        quality: 70
    }
})
