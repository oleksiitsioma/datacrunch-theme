const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'bundle.css',
        }),
    ],
    entry: {
        bundle: '/assets/src/index.js',
        jquery: '/assets/src/js/vendor/jquery-3.6.4.min.js'
    },
    output: {
        path: path.resolve( __dirname , 'assets/dist' ),
        filename: '[name].js',
        clean: true
    },
    module: {
        rules: [
            {
                test: /\.(sa|sc|c)ss$/i,
                use: [
                  MiniCssExtractPlugin.loader,
                  "css-loader",
                  "sass-loader",
                ],
            }
        ]
    }
}