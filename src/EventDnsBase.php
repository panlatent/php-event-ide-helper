<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class EventDnsBase
 */
class EventDnsBase {
	/**
	 * Adds a nameserver to the DNS base
	 */
	public function addNameserverIp() {}

	/**
	 * Adds a domain to the list of search domains
	 */
	public function addSearch() {}

	/**
	 * Removes all current search suffixes
	 */
	public function clearSearch() {}

	/**
	 * Constructs EventDnsBase object
	 */
	public function __construct() {}

	/**
	 * Gets the number of configured nameservers
	 */
	public function countNameservers() {}

	/**
	 * Loads a hosts file (in the same format as /etc/hosts) from hosts file
	 */
	public function loadHosts() {}

	/**
	 * Scans the resolv.conf-formatted file
	 */
	public function parseResolvConf() {}

	/**
	 * Set the value of a configuration option
	 */
	public function setOption() {}

	/**
	 * Set the 'ndots' parameter for searches
	 */
	public function setSearchNdots() {}

}