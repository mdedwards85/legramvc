<?php



// turn on/off display errors

ini_set("display_errors", "1");



// save current paths

define("ROOT_PATH", dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

define("SYSTEM_PATH", ROOT_PATH . "system" . DIRECTORY_SEPARATOR);

define("CONFIG_PATH", ROOT_PATH . "config" . DIRECTORY_SEPARATOR);



// load system classes

require_once(SYSTEM_PATH . "sys.application.php");

require_once(SYSTEM_PATH . "sys.registry.php");



/**
* Main entry point of the application.
*
* @name			main
* @param		string $_uri Requested uri
* @return		void
*/

function main($_uri) {

	$application = new sysApplication();

	include(CONFIG_PATH . "init.php");

	$application->start($_uri);

	return;

}



// start the application

main($_SERVER["REQUEST_URI"]);
