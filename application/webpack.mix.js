let mix = require('laravel-mix');

mix.setPublicPath('./resources/assets');

/***
 *         _                         _      _
 *      _ | |__ ___ ____ _ _____ _ _(_)_ __| |_
 *     | || / _` \ V / _` (_-< _| '_| | '_ \  _|
 *      \__/\__,_|\_/\__,_/__|__|_| |_| .__/\__|
 *                                    |_|
 */

// Define the vendor js file locations

	// Modules file path
	var $node = './node_modules';

	// Popper file path
	var $popper_js = $node+'/popper.js/dist/popper.js';

	// Jquery file path
	var $jquery_js = $node+'/jquery/dist/jquery.js';

	// Bootstrap file path
	var $bootstrap_js = $node+'/bootstrap/dist/js/bootstrap.js';

// Copy the vendor js to a common folder


	// Define the laravel folder (for uncompiled js)
	$laravel_js = 'resources/assets/js';

	// Copy popper
	mix.copy($popper_js, $laravel_js);

	// Copy jquery
	mix.copy($jquery_js, $laravel_js);

	// copy bootstrap
	mix.copy($bootstrap_js, $laravel_js);

// Compile into a single vendor.js


mix.babel([

	($laravel_js+'/popper.js'),
	($laravel_js+'/jquery.js'),
	($laravel_js+'/bootstrap.js')

	],

		'/js/compiled/vendor.js');



		/***
		 *       ___ ___ ___
		 *      / __/ __/ __|
		 *     | (__\__ \__ \
		 *      \___|___/___/
		 *
		 */


		// Copy any vendor css files
		mix.copy(
		  [
		    $node+'/font-awesome/css/font-awesome.css',
		  ],
		  './resources/assets/css');



		/***
		 *      ___   _   ___ ___
		 *     / __| /_\ / __/ __|
		 *     \__ \/ _ \\__ \__ \
		 *     |___/_/ \_\___/___/
		 *
		 */

		 /* NB.SASS files feature import statements from node modules  */

		 // Compile the SASS
		 mix.sass('./resources/assets/sass/default.scss', './resources/assets/sass/compiled/')
		 .options({
         processCssUrls: false
     });


/***
 *       ___ ___  __  __ ___ ___ _  _   _ _____ ___ ___  _  _
 *      / __/ _ \|  \/  | _ )_ _| \| | /_\_   _|_ _/ _ \| \| |
 *     | (_| (_) | |\/| | _ \| || .` |/ _ \| |  | | (_) | .` |
 *      \___\___/|_|  |_|___/___|_|\_/_/ \_\_| |___\___/|_|\_|
 *
 */

	//CSS
	mix.combine(['./resources/assets/sass/compiled/default.css','./resources/assets/css/font-awesome.css'],'./resources/assets/css/combined/combined.css');


		 /***
		  *      __  __ _      _  __ _         _   _
		  *     |  \/  (_)_ _ (_)/ _(_)__ __ _| |_(_)___ _ _
		  *     | |\/| | | ' \| |  _| / _/ _` |  _| / _ \ ' \
		  *     |_|  |_|_|_||_|_|_| |_\__\__,_|\__|_\___/_||_|
		  *
		  *
		  *     !This only runs when the production command is used!
		  *
		  */
			// css
			mix.minify('./resources/assets/css/combined/combined.css','./resources/assets/css/combined/combined.min.css')

			// js - issues encountered because of ES2015 compatibility (babel failure also)

			/***
			 *      ___ ___ ___ _____ ___ ___ ___ _   _ _____ ___ ___  _  _
			 *     |   \_ _/ __|_   _| _ \_ _| _ ) | | |_   _|_ _/ _ \| \| |
			 *     | |) | |\__ \ | | |   /| || _ \ |_| | | |  | | (_) | .` |
			 *     |___/___|___/ |_| |_|_\___|___/\___/  |_| |___\___/|_|\_|
			 *
			 */

			 // Both standard & minified

			 	//css
			 	mix.copy('./resources/assets/css/combined/combined.css','./public/css');
			 	mix.copy('./resources/assets/css/combined/combined.min.css','./public/css');


				// js
				mix.copy('./resources/assets/js/compiled/vendor.js','./public/js');
				mix.copy('./resources/assets/js/custom.js','./public/js');
