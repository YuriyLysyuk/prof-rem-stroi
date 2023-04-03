const Webpack = require('webpack');
const path = require('path');
const { merge } = require('webpack-merge');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const common = require('./webpack.common.js');

const SRC_DIR = path.resolve(__dirname, '../src');
const BUILD_DIR = path.resolve(__dirname, '../build');
const JS_DIR = SRC_DIR + '/js';

module.exports = merge(common, {
  mode: 'production',
  devtool: 'source-map',
  stats: 'errors-only',
  bail: true,

  plugins: [
    new Webpack.DefinePlugin({
      'process.env.NODE_ENV': JSON.stringify('production'),
    }),

    new MiniCssExtractPlugin({
      filename: 'css/[name].css',
    }),
  ],

  module: {
    rules: [
      {
        test: /\.js$/,
        include: [JS_DIR],
        use: 'babel-loader',
      },

      {
        test: /\.s?css/i,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
      },
    ],
  },
});
