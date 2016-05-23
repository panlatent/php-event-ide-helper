<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventBuffer
 */
class EventBuffer {
	/**
	 * Append data to the end of an event buffer
	 */
	public function add() {}

	/**
	 * Move all data from a buffer provided to the current instance of EventBuffer
	 */
	public function addBuffer() {}

	/**
	 * Moves the specified number of bytes from a source buffer to the end of the current buffer
	 */
	public function appendFrom() {}

	/**
	 * Constructs EventBuffer object
	 */
	public function __construct() {}

	/**
	 * Copies out specified number of bytes from the front of the buffer
	 */
	public function copyout() {}

	/**
	 * Removes specified number of bytes from the front of the buffer without copying it anywhere
	 */
	public function drain() {}

	/**
	 * Description
	 */
	public function enableLocking() {}

	/**
	 * Reserves space in buffer
	 */
	public function expand() {}

	/**
	 * Prevent calls that modify an event buffer from succeeding
	 */
	public function freeze() {}

	/**
	 * Acquires a lock on buffer
	 */
	public function lock() {}

	/**
	 * Prepend data to the front of the buffer
	 */
	public function prepend() {}

	/**
	 * Moves all data from source buffer to the front of current buffer
	 */
	public function prependBuffer() {}

	/**
	 * Linearizes data within buffer and returns it's contents as a string
	 */
	public function pullup() {}

	/**
	 * Read data from an evbuffer and drain the bytes read
	 */
	public function read() {}

	/**
	 * Read data from a file onto the end of the buffer
	 */
	public function readFrom() {}

	/**
	 * Extracts a line from the front of the buffer
	 */
	public function readLine() {}

	/**
	 * Scans the buffer for an occurrence of a string
	 */
	public function search() {}

	/**
	 * Scans the buffer for an occurrence of an end of line
	 */
	public function searchEol() {}

	/**
	 * Substracts a portion of the buffer data
	 */
	public function substr() {}

	/**
	 * Re-enable calls that modify an event buffer
	 */
	public function unfreeze() {}

	/**
	 * Releases lock acquired by EventBuffer::lock
	 */
	public function unlock() {}

	/**
	 * Write contents of the buffer to a file or socket
	 */
	public function write() {}

}