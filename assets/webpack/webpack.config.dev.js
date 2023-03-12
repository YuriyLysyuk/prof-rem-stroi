const path = require('path');
const { merge } = require('webpack-merge');

const common = require('./webpack.common.js');

const SRC_DIR = path.resolve(__dirname, '../src');
const JS_DIR = SRC_DIR + '/js';

module.exports = merge(common, {
  target: 'web',
  mode: 'development',
  devtool: 'eval-cheap-source-map',

  output: {
    chunkFilename: 'js/[name].chunk.js',
  },

  devServer: {
    client: {
      logging: 'error',
    },

    hot: true,

    watchFiles: {
      paths: [SRC_DIR + '/**/*.*'],
      options: {
        usePolling: true,
      },
    },
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        include: JS_DIR,
        loader: 'babel-loader',
      },

      {
        test: /\.s?css$/,
        use: [
          'style-loader',
          {
            loader: 'css-loader',
            options: {
              sourceMap: true,
            },
          },
          'sass-loader',
        ],
      },
    ],
  },
});
