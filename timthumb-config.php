<?php

define ('DEBUG_ON', true);						// Enable debug logging to web server error log (STDERR)
define ('DEBUG_LEVEL', 1);						// Debug level 1 is less noisy and 3 is the most noisy
define ('DEBUG_LOG_FILE', 'timthumb.log');		// Log file

define ('BLOCK_EXTERNAL_LEECHERS', false);		// If the image or webshot is being loaded on an external site, display a red "No Hotlinking" gif.
define ('ALLOW_EXTERNAL', false);				// Allow image fetching from external websites. Will check against ALLOWED_SITES if
												// ALLOW_ALL_EXTERNAL_SITES is false

define ('NOT_FOUND_IMAGE', '');					//Image to serve if any 404 occurs 
define ('ERROR_IMAGE', '');						//Image to serve if an error occurs instead of showing error message


?>