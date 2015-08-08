<?php



// turn on/off display errors

ini_set("display_errors", "1");



/**
* Main entry point of the application.
*
* @name			main
* @param		string $_uri Requested uri
* @return		void
*/

function main($_uri) {

	echo "URI: " . $_uri;

	return;

}



// start the application

main($_SERVER["REQUEST_URI"]);
