const path = require('path');
const webpack = require("webpack");
const MiniCssExtractPlugin = require("mini-css-extract-plugin")  ;
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const __publicPath = path.join(__dirname, 'public');

module.exports = (env, argv) => {

  var config = {
    entry: {
      'js/script': './js/index.js', 
      'css/estilo': './css/scss/estilo.scss'
    },
    output: {  
      filename: argv.mode !== 'production' ? '[name].js' : '[name].min.js',
      path: __publicPath
    },
    mode: 'development',
    devtool: argv.mode !== 'production' ? 'cheap-eval-source-map' : 'source-map',
    devServer: {
      contentBase: __publicPath,
      compress: true,
      proxy: {
        '/api': 'http://localhost:3000'
      }
      //open: 'chrome',
    },
    module: {
      rules: [
        {
          test: /\.(scss)$/,
          use: [
          { 
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: 'css-loader', // translates CSS into CommonJS modules
            options: {
              sourceMap: true,
            }
          }, {
            loader: 'postcss-loader', // Run post css actions
            options: {
              sourceMap: true,
              plugins: function () { // post css plugins, can be exported to postcss.config.js
                return [
                  require('precss'),
                  require('autoprefixer')
                ];
              }
            }
          }, {
            loader: 'sass-loader', // compiles Sass to CSS
            options: {
              sourceMap: true,
              implementation: require('node-sass'),
              sassOptions: {
                outputStyle: argv.mode !== 'production' ? '' : 'compressed'
              }
            }
          }]
        },
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env'],
              cacheDirectory: true  
            }
          }
        },
        {
          test: /\.(png|woff|woff2|eot|ttf|svg)$/,
          loader: 'url-loader?limit=100000',
        }
      ]
    },
    plugins: [
      new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery"
      }),
      new webpack.ContextReplacementPlugin(
        /moment[\/\\]locale$/, /pt-br/
      ),
      new MiniCssExtractPlugin({
        filename: argv.mode !== 'production' ? '[name].css' : '[name].min.css',
        chunkFilename: '[id].css',
      }),
      new FixStyleOnlyEntriesPlugin() 
    ]
  };

  return config;
};

/*
module.exports = {  

}*/