const path = require('path');
const glob = require('glob');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development', // or 'production'
  entry: {
    js: glob.sync('./assets/js/*.js'),
  },
  output: {
    filename: 'main.min.js',
    path: path.resolve(__dirname, 'assets/dist/js'),
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../css/main.min.css',
    }),
  ],
  optimization: {
    minimize: true,
    minimizer: [
      new CssMinimizerPlugin({
        minimizerOptions: {
          preset: [
            'default',
            {
              discardComments: { removeAll: true },
            },
          ],
        },
        parallel: true,
        test: /\.css$/,
      }),
      new TerserPlugin({
        test: /\.js(\?.*)?$/i,
      }),
    ],
  },
};
