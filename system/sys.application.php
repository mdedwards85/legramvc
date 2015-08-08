<?php



/**
* Controls the flow of the application.
*
* @package		legramvc
* @subpackage	system
*/

class sysApplication {



	/**
	* Initialise the application.
	*
	* @name			__construct
	* @access		public
	* @return		void
	*/

	public function __construct() {

		return;

	}



	/**
	* Start the application.
	*
	* @name			start
	* @access		public
	* @param		string $_uri URI to process
	* @return		void
	*/

	public function start($_uri) {

		echo "Application URI: " . $_uri;

		return;

	}



}
