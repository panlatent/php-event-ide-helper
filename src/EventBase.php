<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventBase
 */
class EventBase {
	/**
	 * Constructs EventBase object
	 */
	public function __construct() {}

	/**
	 * Dispatch pending events
	 */
	public function dispatch() {}

	/**
	 * Stop dispatching events
	 */
	public function exit() {}

	/**
	 * Free resources allocated for this event base
	 */
	public function free() {}

	/**
	 * Returns bitmask of features supported
	 */
	public function getFeatures() {}

	/**
	 * Returns event method in use
	 */
	public function getMethod() {}

    	/**
	 * Returns the current event base time
	 */
	public function getTimeOfDayCached() {}

	/**
	 * Checks if the event loop was told to exit
	 */
	public function gotExit() {}

	/**
	 * Checks if the event loop was told to exit
	 */
	public function gotStop() {}

	/**
	 * Dispatch pending events
	 */
	public function loop() {}

	/**
	 * Sets number of priorities per event base
	 */
	public function priorityInit() {}

	/**
	 * Re-initialize event base(after a fork).
	 */
	public function reInit() {}

	/**
	 * Tells event_base to stop dispatching events
	 */
	public function stop() {}

}