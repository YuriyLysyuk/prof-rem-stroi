const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');

const SRC_DIR = path.resolve(__dirname, '../src');
const BUILD_DIR = path.resolve(__dirname, '../build');
const JS_DIR = SRC_DIR + '/js';

module.exports = {
  context: SRC_DIR,

  entry: {
    main: JS_DIR + '/main.js',
  },

  output: {
    path: BUILD_DIR,
    filename: 'js/[name].js',
  },

  optimization: {
    splitChunks: {
      cacheGroups: {
        commons: {
          test: /[\\/]node_modules[\\/]/,
          name: 'vendors',
          chunks: 'all',
        },
      },
    },
  },

  plugins: [
    new CleanWebpackPlugin(),

    new HtmlWebpackPlugin({
      template: SRC_DIR + '/index.html',
    }),
  ],

  module: {
    rules: [
      {
        test: /\.html$/i,
        loader: 'html-loader',
      },

      {
        test: /\.(ico|jpg|jpeg|png|svg)(\?.*)?$/,
        type: 'asset/resource',
        generator: {
          filename: '[path][name][ext]',
        },
      },

      {
        test: /\.(woff|woff2)(\?.*)?$/,
        type: 'asset',
        generator: {
          filename: '[path][name][ext]',
        },
      },
    ],
  },
};
