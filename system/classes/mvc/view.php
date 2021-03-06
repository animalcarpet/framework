<?php
/**
 * LightPHP Framework
 * LitePHP is a framework that has been designed to be lite waight, extensible and fast.
 * 
 * @author Robert Pitt <robertpitt1988@gmail.com>
 * @category core
 * @copyright 2013 Robert Pitt
 * @license GPL v3 - GNU Public License v3
 * @version 1.0.0
 */
!defined('SECURE') && die('Access Forbidden!');

/**
 * View Class
 */
class View
{
	/**
	 * A local scope that allows the collection of params frmo the controller.
	 * @var array
	 */
	protected $data = array();

	/**
	 * Returns anentity from the data array.
	 */
	public function __get($key)
	{
		return $this->data[$key];
	}

	/**
	 * Sets an entity to the data array
	 */
	public function __set($key, $value)
	{
		$this->data[$key] = $value;
	}

	/**
	 * Returns true/false if a variable exists in the data array
	 */
	public function __isset($key)
	{
		return isset($this->data[$key]);
	}

	/**
	 * Renders a view file and outputs to the output class.
	 * @param  string $view
	 */
	public function render($view)
	{
		/**
		 * Get the application
		 */
		$application = Registry::get('Application');

		/**
		 * Get the application
		 */
		$Output = Registry::get('Output');

		/**
		 * Check to see if the template exists
		 */
		if(!$application->viewExists($view))
		{
			throw new Exception("Unable to locate ($view) view", 1);
		}

		/**
		 * Instantiate a new Template object
		 * This Template will send via the HTTPOutput object
		 */
		new Template($application->getResourceLocation('views'), $view . '.php', $this->data);
	}
}
