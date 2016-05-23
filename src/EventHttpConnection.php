<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventHttpConnection
 */
class EventHttpConnection {
	/**
	 * Constructs EventHttpConnection object
	 */
	public function __construct() {}

	/**
	 * Returns event base associated with the connection
	 */
	public function getBase() {}

	/**
	 * Gets the remote address and port associated with the connection
	 */
	public function getPeer() {}

	/**
	 * Makes an HTTP request over the specified connection
	 */
	public function makeRequest() {}

	/**
	 * Set callback for connection close
	 */
	public function setCloseCallback() {}

	/**
	 * Sets the IP address from which HTTP connections are made
	 */
	public function setLocalAddress() {}

	/**
	 * Sets the local port from which connections are made
	 */
	public function setLocalPort() {}

	/**
	 * Sets maximum body size for the connection
	 */
	public function setMaxBodySize() {}

	/**
	 * Sets maximum header size
	 */
	public function setMaxHeadersSize() {}

	/**
	 * Sets the retry limit for the connection
	 */
	public function setRetries() {}

	/**
	 * Sets the timeout for the connection
	 */
	public function setTimeout() {}

}