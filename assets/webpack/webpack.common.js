const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');

const SRC_DIR = path.resolve(__dirname, '../src');
const BUILD_DIR = path.resolve(__dirname, '../build');
const JS_SRC_DIR = SRC_DIR + '/js';

module.exports = {
  entry: {
    main: JS_SRC_DIR + '/main.js',
  },

  output: {
    path: BUILD_DIR,
    filename: 'js/[name].js',
  },

  optimization: {
    splitChunks: {
      chunks: 'all',
      name: false,
    },
  },

  plugins: [
    new CleanWebpackPlugin(),

    new HtmlWebpackPlugin({
      template: SRC_DIR + '/index.html',
    }),
  ],

  resolve: {
    alias: {
      '~': SRC_DIR,
    },
  },

  module: {
    rules: [
      {
        test: /\.html$/i,
        loader: 'html-loader',
      },

      {
        test: /\.(ico|jpg|jpeg|png|gif|eot|otf|webp|svg|ttf|woff|woff2)(\?.*)?$/,
        type: 'asset',
      },
    ],
  },
};
