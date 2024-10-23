const mix = require('laravel-mix');
let SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
let postCssPlugins = [require('tailwindcss')];

const jsFileList = [
    'assets/src/js/app',
];

mix.options({
    processCssUrls: false,
    fileLoaderDirs: {
        fonts: 'fonts'
    },
    terser: {
        extractComments: false,
    }
});


mix.setPublicPath('assets');

mix.webpackConfig(webpack => ({
    plugins: [
        new webpack.ProvidePlugin({
            $: require.resolve('jquery'),
            jQuery: require.resolve('jquery'),
            'window.jQuery': require.resolve('jquery'),
            'window.$': require.resolve('jquery'),
        }),
        new SVGSpritemapPlugin('assets/src/icons/*.svg',
            {
                output: {
                    filename: 'dist/sprite.svg',
                    svgo: true,
                    chunk: {
                        keep: true
                    }
                },
                sprite: {
                    prefix: 'icon-',
                    generate: {
                        title: false,
                        symbol: true,
                    }
                },
            }
        ),
    ]
}))

jsFileList.forEach(fileName => mix.js(`./${fileName}.js`, 'assets/dist/js'));

mix.postCss('assets/src/css/app.css', 'assets/dist/css', postCssPlugins);

mix.browserSync({
    proxy: 'http://october3.local:8000',
    open: false,
    notify: false,
    files: [
        './layouts/*.htm',
        './pages/**/*.htm',
        './partials/**/*.htm',
        './content/**/*.htm'
    ]
});

mix.sourceMaps(true, 'source-map');
mix.extract(['jquery']);
