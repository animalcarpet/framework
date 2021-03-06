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

/**
 * Declare the secure constant before framework to
 */
define('SECURE', true);

/**
 * Require the framework
 */
require_once('system/framework.php');

/**
 * Set the application path
 */
Registry::get('Application')->setApplicationPath(__DIR__ . '/applications/todo');

/**
 * Run the applciation
 */
Registry::get('Application')->run();