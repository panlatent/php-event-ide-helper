<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventBufferEvent
 */
class EventBufferEvent {
	/**
	 * Closes file descriptor associated with the current buffer event
	 */
	public function close() {}

	/**
	 * Connect buffer event's file descriptor to given address or UNIX socket
	 */
	public function connect() {}

	/**
	 * Connects to a hostname with optionally asyncronous DNS resolving
	 */
	public function connectHost() {}

	/**
	 * Constructs EventBufferEvent object
	 */
	public function __construct() {}

	/**
	 * Creates two buffer events connected to each other
	 */
	public function createPair() {}

	/**
	 * Disable events read, write, or both on a buffer event.
	 */
	public function disable() {}

	/**
	 * Enable events read, write, or both on a buffer event.
	 */
	public function enable() {}

	/**
	 * Free a buffer event
	 */
	public function free() {}

	/**
	 * Returns string describing the last failed DNS lookup attempt
	 */
	public function getDnsErrorString() {}

	/**
	 * Returns bitmask of events currently enabled on the buffer event
	 */
	public function getEnabled() {}

	/**
	 * Returns underlying input buffer associated with current buffer event
	 */
	public function getInput() {}

	/**
	 * Returns underlying output buffer associated with current buffer event
	 */
	public function getOutput() {}

	/**
	 * Read buffer's data
	 */
	public function read() {}

	/**
	 * Drains the entire contents of the input buffer and places them into buf
	 */
	public function readBuffer() {}

	/**
	 * Assigns read, write and event(status) callbacks
	 */
	public function setCallbacks() {}

	/**
	 * Assign a priority to a bufferevent
	 */
	public function setPriority() {}

	/**
	 * Set the read and write timeout for a buffer event
	 */
	public function setTimeouts() {}

	/**
	 * Adjusts read and/or write watermarks
	 */
	public function setWatermark() {}

	/**
	 * Returns most recent OpenSSL error reported on the buffer event
	 */
	public function sslError() {}

	/**
	 * Create a new SSL buffer event to send its data over another buffer event
	 */
	public function sslFilter() {}

	/**
	 * Returns a textual description of the cipher.
	 */
	public function sslGetCipherInfo() {}

	/**
	 * Returns the current cipher name of the SSL connection.
	 */
	public function sslGetCipherName() {}

	/**
	 * Returns version of cipher used by current SSL connection.
	 */
	public function sslGetCipherVersion() {}

	/**
	 * Returns the name of the protocol used for current SSL connection.
	 */
	public function sslGetProtocol() {}

	/**
	 * Tells a bufferevent to begin SSL renegotiation.
	 */
	public function sslRenegotiate() {}

	/**
	 * Creates a new SSL buffer event to send its data over an SSL on a socket
	 */
	public function sslSocket() {}

	/**
	 * Adds data to a buffer event's output buffer
	 */
	public function write() {}

	/**
	 * Adds contents of the entire buffer to a buffer event's output buffer
	 */
	public function writeBuffer() {}

}