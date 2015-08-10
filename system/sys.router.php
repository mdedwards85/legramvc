<?php



/**
* Breaks down a request uri into controller, action and parameters.
*
* @package		legramvc
* @subpackage	system
*/

class sysRouter {



	/**
	* The current request uri.
	*
	* @var			string $uri
	* @access		private
	*/

	private $uri;



	/**
	* The current controller name from request uri.
	*
	* @var			string $controller
	* @access		private
	*/

	private $controller;



	/**
	* The current action name from request uri.
	*
	* @var			string $action
	* @access		private
	*/

	private $action;



	/**
	* The current parameter array from request uri.
	*
	* @var			array $parameters
	* @access		private
	*/

	private $parameters;



	/**
	* Get the current request uri.
	*
	* @name			getUri
	* @access		public
	* @return		string The current request uri
	*/

	public function getUri() {

		return ($this->uri);

	}



	/**
	* Get the current controller name.
	*
	* @name			getController
	* @access		public
	* @return		string The current controller name
	*/

	public function getController() {

		return ($this->controller);

	}



	/**
	* Get the current action name.
	*
	* @name			getAction
	* @access		public
	* @return 		string The current action name
	*/

	public function getAction() {

		return ($this->action);

	}



	/**
	* Get the current parameters array
	*
	* @name			getParameters
	* @access		public
	* @return		string The current parameters array
	*/

	public function getParameters() {

		return ($this->parameters);

	}



	/**
	* Extract the controller, array and parameters parts from request uri.
	*
	* @name			__construct
	* @access		public
	* @param		string $_uri The request uri
	* @param		string $_controller The default controller name to use
	* @param		string $_action The default action name to use
	* @return		void
	*/

	public function __construct($_uri, $_controller, $_action) {



		// save the request uri

		$this->uri = urldecode(trim($_uri, "/"));



		// set defaults for controller, action and parameters

		$this->controller = strtolower($_controller);

		$this->action = strtolower($_action);

		$this->parameters = array();



		// break the request uri into parts

		$uri_parts = explode("?", $this->uri);

		$uri_parts = explode("/", $uri_parts[0]);



		// extract the controller name first

		if (count($uri_parts) > 0) {

			if (strlen($uri_parts[0]) > 0) {

				$this->controller = $uri_parts[0];

			}

		}



		// extract the action name next

		if (count($uri_parts) > 1) {

			if (strlen($uri_parts[1]) > 0) {

				$this->action = $uri_parts[1];

			}

		}



		// save any parameters if any, then return

		if (count($uri_parts) > 2) {

			for ($index = 2; $index < count($uri_parts); $index++) {

				$this->parameters[] = $uri_parts[$index];

			}

		}

		return;

	}

}
