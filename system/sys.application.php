<?php



/**
* Controls the flow of the application.
*
* @package	legramvc
* @subpackage	system
*/

class sysApplication {



	/**
	* Registry for the application.
	*
	* @var		sysRegistry $registry
	* @access	private
	*/

	private $registry;



	/**
	* Provide access to the registry.
	*
	* @name		getRegistry
	* @access	public
	* @return	sysRegistry Application registry
	*/

	public function getRegistry() {

		return ($this->registry);

	}



	/**
	* Initialise the application.
	*
	* @name		__construct
	* @access	public
	* @return	void
	*/

	public function __construct() {

		$this->registry = new sysRegistry();

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

		echo $this->registry->getKey("application-name") . " ";

		echo $this->registry->getKey("application-version");

		return;

	}



}
