<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventHttpRequest
 */
class EventHttpRequest {
	/**
	 * Adds an HTTP header to the headers of the request
	 */
	public function addHeader() {}

	/**
	 * Cancels a pending HTTP request
	 */
	public function cancel() {}

	/**
	 * Removes all output headers from the header list of the request
	 */
	public function clearHeaders() {}

	/**
	 * Closes associated HTTP connection
	 */
	public function closeConnection() {}

	/**
	 * Constructs EventHttpRequest object
	 */
	public function __construct() {}

	/**
	 * Finds the value belonging a header
	 */
	public function findHeader() {}

	/**
	 * Frees the object and removes associated events
	 */
	public function free() {}

	/**
	 * Returns EventBufferEvent object
	 */
	public function getBufferEvent() {}

	/**
	 * Returns the request command(method)
	 */
	public function getCommand() {}

	/**
	 * Returns EventHttpConnection object
	 */
	public function getConnection() {}

	/**
	 * Returns the request host
	 */
	public function getHost() {}

	/**
	 * Returns the input buffer
	 */
	public function getInputBuffer() {}

	/**
	 * Returns associative array of the input headers
	 */
	public function getInputHeaders() {}

	/**
	 * Returns the output buffer of the request
	 */
	public function getOutputBuffer() {}

	/**
	 * Returns associative array of the input headers
	 */
	public function getOutputHeaders() {}

	/**
	 * Returns the response code
	 */
	public function getResponseCode() {}

	/**
	 * Returns the request URI
	 */
	public function getUri() {}

	/**
	 * Removes an HTTP header from the headers of the request
	 */
	public function removeHeader() {}

	/**
	 * Send an HTML error message to the client
	 */
	public function sendError() {}

	/**
	 * Send an HTML reply to the client
	 */
	public function sendReply() {}

	/**
	 * Send another data chunk as part of an ongoing chunked reply
	 */
	public function sendReplyChunk() {}

	/**
	 * Complete a chunked reply, freeing the request as appropriate
	 */
	public function sendReplyEnd() {}

	/**
	 * Initiate a chunked reply
	 */
	public function sendReplyStart() {}

}