<?php



/**
* Controls the flow of the application.
*
* @package		legramvc
* @subpackage	system
*/

class sysApplication {



	/**
	* Registry for the application.
	*
	* @var			sysRegistry $registry
	* @access		private
	*/

	private $registry;



	/**
	* Router for the application.
	*
	* @var			sysRouter $router
	* @access		private
	*/

	private $router;



	/**
	* Provide access to the registry.
	*
	* @name			getRegistry
	* @access		public
	* @return		sysRegistry Application registry
	*/

	public function getRegistry() {

		return ($this->registry);

	}



	/**
	* Get the router for the application.
	*
	* @name			getRouter
	* @access		public
	* @return		sysRouter Application router
	*/

	public function getRouter() {

		return ($this->router);

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

		$this->router = null;

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



		// output application name and version

		echo $this->registry->getKey("application-name") . " ";

		echo $this->registry->getKey("application-version") . "<BR /><BR />";



		// pass request uri to router

		$default_controller = $this->registry->getKey("router-default-controller");

		$default_action = $this->registry->getKey("router-default-action");

		$this->router = new sysRouter($_uri, $default_controller, $default_action);



		// output router controller, action and parameters

		echo "Controller: " . $this->router->getController() . "<BR />";

		echo "Action: " . $this->router->getAction() . "<BR />";

		echo "Parameters: " . count($this->router->getParameters()) . "<BR />";

		foreach ($this->router->getParameters() as $key => $value) {

			echo "&nbsp;&nbsp;&nbsp;" . ($key + 1) . " => " . $value . "<BR />";

		}



		return;

	}

}
