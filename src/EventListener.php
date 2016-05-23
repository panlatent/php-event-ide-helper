<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventListener
 */
class EventListener {
	/**
	 * Creates new connection listener associated with an event base
	 */
	public function __construct() {}

	/**
	 * Disables an event connect listener object
	 */
	public function disable() {}

	/**
	 * Enables an event connect listener object
	 */
	public function enable() {}

	/**
	 * Returns event base associated with the event listener
	 */
	public function getBase() {}

	/**
	 * Retreives the current address to which the listener's socket is bound.
	 */
	public function getSocketName() {}

	/**
	 * The setCallback purpose
	 */
	public function setCallback() {}

	/**
	 * Set event listener's error callback
	 */
	public function setErrorCallback() {}

}