<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventUtil
 */
class EventUtil {
	/**
	 * The abstract constructor
	 */
	public function __construct() {}

	/**
	 * Returns the most recent socket error number
	 */
	public function getLastSocketErrno() {}

	/**
	 * Returns the most recent socket error
	 */
	public function getLastSocketError() {}

	/**
	 * Returns numeric file descriptor of a socket, or stream
	 */
	public function getSocketFd() {}

	/**
	 * Retreives the current address to which the socket is bound.
	 */
	public function getSocketName() {}

	/**
	 * Sets socket options
	 */
	public function setSocketOption() {}

	/**
	 * Generates entropy by means of OpenSSL's RAND_poll()
	 */
	public function sslRandPoll() {}

}