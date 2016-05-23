<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventConfig
 */
class EventConfig {
	/**
	 * Tells libevent to avoid specific event method
	 */
	public function avoidMethod() {}

	/**
	 * Constructs EventConfig object
	 */
	public function __construct() {}

	/**
	 * Enters a required event method feature that the application demands
	 */
	public function requireFeatures() {}

	/**
	 * Prevents priority inversion
	 */
	public function setMaxDispatchInterval() {}

}