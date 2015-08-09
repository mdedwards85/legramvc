<?php



/**
* Manages all the settings for the application.
*
* @package 	legramvc
* @subpackage	system
*/

class sysRegistry {



	/**
	* Holds all the registry keys.
	*
	* @var		array $keys
	* @access	private
	*/

	private $keys;



	/**
	* Initialise the registry.
	*
	* @name 	__construct
	* @access 	public
	* @return	void
	*/

	public function __construct() {

		$this->keys = array();

		return;

	}



	/**
	* Get value from key.
	*
	* @name		getKey
	* @access	public
	* @param	string $_key Name of the key
	* @return	mixed Value of the key
	*/

	public function getKey($_key) {

		$key = strtolower($_key);

		$value = null;

		if (array_key_exists($key, $this->keys)) {

			$value = $this->keys[$key];

		}

		return ($value);

	}



	/**
	* Set a key's value.
	*
	* @name		setKey
	* @access	public
	* @param	string $_key Name of the key
	* @param	mixed $_value Value to set
	* @return	mixed Value that was set
	*/

	public function setKey($_key, $_value) {

		$key = strtolower($_key);

		return ($this->keys[$key] = $_value);

	}



}
