<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventHttp
 */
class EventHttp {
	/**
	 * Makes an HTTP server accept connections on the specified socket stream or resource
	 */
	public function accept() {}

	/**
	 * Adds a server alias to the HTTP server object
	 */
	public function addServerAlias() {}

	/**
	 * Binds an HTTP server on the specified address and port
	 */
	public function bind() {}

	/**
	 * Constructs EventHttp object(the HTTP server)
	 */
	public function __construct() {}

	/**
	 * Removes server alias
	 */
	public function removeServerAlias() {}

	/**
	 * Sets the what HTTP methods are supported in requests accepted by this server, and passed to user callbacks
	 */
	public function setAllowedMethods() {}

	/**
	 * Sets a callback for specified URI
	 */
	public function setCallback() {}

	/**
	 * Sets default callback to handle requests that are not caught by specific callbacks
	 */
	public function setDefaultCallback() {}

	/**
	 * Sets maximum request body size
	 */
	public function setMaxBodySize() {}

	/**
	 * Sets maximum HTTP header size
	 */
	public function setMaxHeadersSize() {}

	/**
	 * Sets the timeout for an HTTP request
	 */
	public function setTimeout() {}

}