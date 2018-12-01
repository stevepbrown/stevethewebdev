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

// Set the public path 
mix.setPublicPath('./resources/');

mix.options({
	
	// Disable css url re-writing
	processCssUrls: false,
	
	//Set this to false, if you don't want the terminal/console to clear after each build.
	clearConsole: true,

	// Set this option to true if you want Mix to automatically read your HTML/Blade files and strip //your CSS bundle of all unused selectors
	purifyCss: false
});


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




// src filepath
var $src = './resources/assets/src/';
var $src_js = $src+'js/';
var $src_sass = $src+'sass/';
var $src_font = $src+'fonts/';
var $src_img = $src+'img/';

// vendor (source) filepath
var $nmod = './node_modules/';
var $bootstrap_sass_path = $nmod+'bootstrap/scss/';
var $fontawesome_sass_path = $nmod+'font-awesome/scss/';
var $fontawesome_font_path = $nmod+'font-awesome/fonts/';

// dist filepath
var $dist_js = $dist+'js/';
var $dist_css = $dist+'css/';
var $dist_fonts = $dist+'fonts/';
var $dist_img = $dist+'img/';


// vendor (destination) filepath
var $vendor_sass_path = $src_sass+'7-vendor/'; 


// public filepaths
var $public= '../public/'
var $public_js = $public+'js/';
var $public_css = $public+'css/';
var $public_fonts = $public+'fonts/';
var $public_img = $public+'img/';


// Using Babel & vendor extraction to seperate vendor files and application's js


console.info("<<<<<< Starting vendor extraction >>>>>>");
	// Vendor extraction
	mix.extract(
		[
			'jquery',
			'popper.js',
			'bootstrap'
			]
			,
			$dist_js+'vendor.js');


			console.info("<<<<<< Compiling app.js >>>>>>");
			mix.js($src_js+'app.js', $dist_js+'app.js');
		
 		
/*

Copy the manifest file into the src folder (required for sequential loading of js files, see note below:)

Avoid JavaScript errors, be sure to build these files in the proper order:

-	manifest.js
-	vendor.js
-	app.js

*/

/***
 *                                               
 *      _ __ _ _ ___ __ _  _ _ _ ______ _ _      
 *     | '_ \ '_/ -_) _| || | '_(_-< _ \ '_|     
 *     | .__/_| \___\__|\_,_|_| /__|___/_|       
 *     |_|_ _ _                                  
 *      / _(_) |___                              
 *     |  _| | / -_)           _   _             
 *     |_|_|_|_\___|_ _ _ __ _| |_(_)___ _ _  ___
 *     / _ \ '_ \/ -_) '_/ _` |  _| / _ \ ' \(_-<
 *     \___/ .__/\___|_| \__,_|\__|_\___/_||_/__/
 *         |_|                                   
 */

console.info("<<<<<< Copy all of the bootstrap sass files from node_modules to the vendor/bootstrap sub-directory >>>>>>");
// Copy all of the bootstrap sass files from node_modules to the vendor/bootstrap sub-directory
mix.copy($bootstrap_sass_path,$vendor_sass_path+'bootstrap');

console.info("<<<<<< Copy all of the font-awesome sass files from node_modules to the vendor/font-awesome sub-directory >>>>>>");
// Copy all of the font-awesome sass files from node_modules to the vendor/font-awesome sub-directory
mix.copy($fontawesome_sass_path ,$vendor_sass_path+'font-awesome');

console.info("<<<<<< Copy all of the font-awesome font files from node_modules to the vendor/font-awesome/fonts sub-directory >>>>>>");
// Copy all of the font-awesome font files from node_modules to the vendor/font-awesome/fonts sub-directory
mix.copy($fontawesome_font_path ,$vendor_sass_path+'font-awesome/fonts');

console.info("<<<<<< Copy all of the font files from the sass/vendor/font-awesome/fonts sub-directory (src) to (dist) font directory >>>>>>");
// Copy all of the font files from the sass/vendor/font-awesome/fonts sub-directory (src) to (dist) font directory - to dist NB. The files are located here because the ultimate filepaths are set within the SASS (path) file.
mix.copy($vendor_sass_path+'font-awesome/fonts', $dist_fonts );

console.info("<<<<<< Copy img files from src to dist >>>>>>");
// Copy img files from src to dist (no operation applied, purely for consistency)
mix.copy($src_img, $dist_img );



/***
 *      ___   _   ___ ___
 *     / __| /_\ / __/ __|
 *     \__ \/ _ \\__ \__ \
 *     |___/_/ \_\___/___/
 *
 */

 console.info("<<<<<< Compile the SASS files into CSS >>>>>>");

// Compile the SASS files into CSS (in dist)
mix.sass(($src_sass+"app.scss"),$dist_css);
mix.sass(($src_sass+"templates.scss"),$dist_css);





/***
 *                   _          _      _         
 *      _ __  ___ __| |_ __ _ _(_)_ __| |_       
 *     | '_ \/ _ (_-<  _/ _| '_| | '_ \  _|      
 *     | .__/\___/__/\__\__|_| |_| .__/\__|      
 *     |_|_ _ _                  |_|             
 *      / _(_) |___                              
 *     |  _| | / -_)           _   _             
 *     |_|_|_|_\___|_ _ _ __ _| |_(_)___ _ _  ___
 *     / _ \ '_ \/ -_) '_/ _` |  _| / _ \ ' \(_-<
 *     \___/ .__/\___|_| \__,_|\__|_\___/_||_/__/
 *         |_|                                   
 */

// distrbute all of the generated assets to the public folder

	console.info("<<<<<< distrbute javascript assets to the public folder >>>>>>");
	// js
	mix.copy($dist_js,$public_js);

	
	console.info("<<<<<< distrbute cascading style sheets assets to the public folder >>>>>>");
	// css
	mix.copy($dist_css,$public_css);

	console.info("<<<<<< distrbute image assets to the public folder >>>>>>");
	// img
	mix.copy($dist_img,$public_img);

	
	console.info("<<<<<< distrbute font assets to the public folder >>>>>>");
	// font
	mix.copy($dist_fonts,$public_fonts);

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
