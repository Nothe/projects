const autoprefixer = require('autoprefixer')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const path = require('path')
const webpack = require('webpack');
const StatsPlugin = require('stats-webpack-plugin');
const Visualizer = require('webpack-visualizer-plugin');
var OfflinePlugin = require('offline-plugin');

const extractCSS = new ExtractTextPlugin('[name].css');

// const sassLoaders = [
//   'css-loader',
//   'postcss-loader',
//   'sass-loader?indentedSyntax=sass&includePaths[]=' + path.resolve(__dirname, './src')
// ]

const config = {
  context: __dirname,
  entry: {
    main: './js/common.js',
    critical: './js/critical.js',
    //responding: './scripts/responding.js',
  },
  isProduction: true,
  //devtool: "cheap-source-map",
  devtool: "source-map",
  module: {
    loaders: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loaders: ['babel-loader']
      },
      {
        test: /\.scss$/,
        loader: ExtractTextPlugin.extract(
          "style",
          "css-loader?sourceMap!postcss!sass-loader?sourceMap"
        )
      },
      {
        test: /\.css$/,
        loader: ExtractTextPlugin.extract(
          'style',
          'css-loader?sourceMap!postcss-loader'
        )
      },
      {
          test: /.(png|woff(2)?|eot|ttf|svg)(\?[a-z0-9=\.]+)?$/,
          loader: 'file-loader?name=[hash].[ext]'
      }
    ]
  },
  output: {
    filename: '[name].js',
    path: path.join(__dirname, '../assets/build'),
    publicPath: ''
  },
  plugins: [
    extractCSS,
    new webpack.optimize.OccurenceOrderPlugin(),
    new webpack.optimize.DedupePlugin(),
    new webpack.optimize.UglifyJsPlugin({
      compressor: {
        warnings: false,
        screw_ie8: true
      },
      comments: false
    }),
    new webpack.NoErrorsPlugin(),
    new StatsPlugin('webpack.stats.json', {
      source: false,
      modules: false
    }),
    new Visualizer({
      filename: './statistics.html'
    }),
    new webpack.DefinePlugin({
      'process.env.NODE_ENV': JSON.stringify('production')
    }),
    new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery",
        "window.jQuery": "jquery"
    }),
    new OfflinePlugin({
      caches: 'all',
      ServiceWorker: {
        output: '../../../../../sw.js'
      },
      excludes: ['.htaccess'],
      safeToUseOptionalCaches: true,
      AppCache: false,
    })
  ],
  postcss: [
    autoprefixer({
      browsers: ['last 2 versions']
    })
  ],
  resolve: {
    extensions: ['', '.js', '.sass', '.eot', '.woff', '.woff2', '.ttf', '.svg', '.css'],
    modulesDirectories: ['js','sass','fonts', 'node_modules']
  },
  watch: true,
}

module.exports = config