const path = require('path')
const webpack = require("webpack")
const MiniCssExtractPlugin = require("mini-css-extract-plugin")  
const __publicPath = path.join(__dirname, 'public', 'assets');

module.exports = {  
  entry: './js/index.js',
  output: {  
    filename: process.env.NODE_ENV !== 'production' ? 'script.js' : 'script.min.js',
    path: __publicPath,
    publicPath: '/assets/'
  },
  mode: 'development',
  devtool: 'source-map',
  devServer: {
    contentBase: __publicPath,
    publicPath: '/assets/',
    compress: true,
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
              outputStyle: process.env.NODE_ENV !== 'production' ? '' : 'compressed'
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
      filename: process.env.NODE_ENV !== 'production' ? 'estilo.css' : 'estilo.min.css',
      chunkFilename: '[id].css',
    }) 
  ]
}