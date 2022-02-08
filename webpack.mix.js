const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         require('postcss-import'),
//         require('tailwindcss'),
//     ]);
// module.exports = {
//     module: {
//       rules: [
//         {
//           test: /\.s[ac]ss$/i,
//           use: [
//             // Creates `style` nodes from JS strings
//             "style-loader",
//             // Translates CSS into CommonJS
//             "css-loader",
//             // Compiles Sass to CSS
//             "sass-loader",
//           ],
//         },
//       ],
//     },
//   };
// module.exports={
// module: {
    
//     loaders: [
//       {
//         test: /\.scss$/,
//         loaders: ["style-loader", "css-loader", "sass-loader"]
//       }
//     ]
//   },
//   sassLoader: {
//     includePaths: [path.resolve(__dirname, "./esources/sass/app.scss")]
//   }
// };

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css',{implementation: require('node-sass')});

if (mix.inProduction()) {
    mix.version();
}
