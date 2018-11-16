/***
 *       ___           __ _                    _   _          
 *      / __|___ _ _  / _(_)__ _ _  _ _ _ __ _| |_(_)___ _ _  
 *     | (__/ _ \ ' \|  _| / _` | || | '_/ _` |  _| / _ \ ' \ 
 *      \___\___/_||_|_| |_\__, |\_,_|_| \__,_|\__|_\___/_||_|
 *                         |___/                              
 */


 

// Require mix  
let mix = require('laravel-mix');

// This snippet specifies that webpack should prepend var $ = require('jquery') //to every location that it encounters either the global $ identifier, or //window.jQuery. Nifty!
mix.autoload({
	jquery: ['$', 'window.jQuery']
 });

// Set the public path (the root for emitted code)
mix.setPublicPath('./resources/assets/');

// Dist filepath
var $dist = 'resources/assets/dist/';

/***
 *         _                         _      _   
 *      _ | |__ ___ ____ _ _____ _ _(_)_ __| |_ 
 *     | || / _` \ V / _` (_-< _| '_| | '_ \  _|
 *      \__/\__,_|\_/\__,_/__|__|_| |_| .__/\__|
 *                                    |_|       
 *
 *  
 */


 
// Define the vendor js file locations

	// // Modules file path
	// var $node = './node_modules';

	// // Popper file path
	// var $popper_js = $node+'/popper.js/dist/popper.js';

	// // Jquery file path
	// var $jquery_js = $node+'/jquery/dist/jquery.js';

	// // Bootstrap file path
	// var $bootstrap_js = $node+'/bootstrap/dist/js/bootstrap.js';

	// Dist_js filepath
	
	var $dist_js = $dist+'js/';
	var $dist_css = $dist+'css/';
	var $dist_font = $dist+'fonts/';
	var $dist_img = $dist+'img/';

// src filepath
var $src = 'resources/assets/src/';
var $src_js = $src+'js/';
var $src_sass = $src+'sass/';
var $src_font = $src+'fonts/';
var $src_img = $src+'img/';

// Using Babel & vendor extraction to seperate vendor files and application's js



	// Vendor extraction
	mix.extract(
		[
			'jquery',
			'popper.js',
			'bootstrap'
			]
			,
			$dist_js+'vendor.js');
		
	//  		
/*

Copy the manifest file into the src folder (required for sequential loading of js files, see note below:)

Avoid JavaScript errors, be sure to build these files in the proper order:

-	manifest.js
-	vendor.js
-	app.js

*/

mix.copy('resources/assets/manifest.js',$dist_js);


/*
	
	Combine and minify any number of JavaScript files with the scripts() method;
	A slight variation of mix.scripts() is mix.babel(). Its method signature is identical to scripts; however, the concatenated file will receive Babel compilation, which translates any ES2015 code to vanilla JavaScript that all browsers will understand.
	
	*/ 

	// Not doing this because cannot successfully use scripts method to create a combined.js


/***
 *      ___   _   ___ ___
 *     / __| /_\ / __/ __|
 *     \__ \/ _ \\__ \__ \
 *     |___/_/ \_\___/___/
 *
 */

// Compile the SASS file into CSS (in dist)
mix.sass(($src_sass+"app.scss"), $dist_css)

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */



// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.preact(src, output); <-- Identical to mix.js(), but registers Preact compilation.
// mix.coffee(src, output); <-- Identical to mix.js(), but registers CoffeeScript compilation.
// mix.ts(src, output); <-- TypeScript support. Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.test');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.babelConfig({}); <-- Merge extra Babel configuration (plugins, etc.) with Mix's default.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.extend(name, handler) <-- Extend Mix's API with your own components.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
