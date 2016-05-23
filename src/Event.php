<?php
/**
 * PHP Event IDE Helper
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/php-event-ide-helper
 * @license https://opensource.org/licenses/GPL-3.0
 */

/**
 * Class Event
 */
final class Event {
    /**
     * Indicates that the event should be edge-triggered, if the underlying
     * event base backend supports edge-triggered events. This affects the
     * semantics of Event::READ and Event::WRITE .
     */
    const ET = 32;
    /**
     * Indicates that the event is persistent. See About event persistence .
     */
    const PERSIST = 16;
    /**
     * This flag indicates an event that becomes active when the provided file
     * descriptor(usually a stream resource, or socket) is ready for reading.
     */
    const READ = 2;
    /**
     * This flag indicates an event that becomes active when the provided file
     * descriptor(usually a stream resource, or socket) is ready for reading.
     */
    const WRITE = 4;
    /**
     * Used to implement signal detection. See "Constructing signal events"
     * below.
     */
    const SIGNAL = 8;
    /**
     * This flag indicates an event that becomes active after a timeout
     * elapses.
     *
     * The Event::TIMEOUT flag is ignored when constructing an event: one can
     * either set a timeout when event is added , or not. It is set in the
     * $what argument to the callback function when a timeout has occurred.
     */
    const TIMEOUT = 1;

    /**
     * @var bool [readonly]
     */
    public $pending;

    /**
     * Makes event pending
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Marks event pending. Non-pending event will never
     * occur, and the event callback will neverbe called.
     * In conjuction with Event::del() anevent could be
     * re-scheduled by user at any time.</p>
     *
     * <p>If Event::add() is called on an already pending event,
     * libevent will leave it pending and re-schedule it with
     * the given timeout(if specified). If in this case timeout
     * is not specified, Event::add() has no effect.</p>
     *
     * @link http://php.net/manual/en/event.add.php
     * Event::addSignal() http://php.net/manual/en/event.addsignal.php
     * Event::addTimer() http://php.net/manual/en/event.addtimer.php
     * Event::del() http://php.net/manual/en/event.del.php
     *
     * @param double $timeout [optional] Timeout in seconds.
     *
     * @return bool Returns TRUE on success. Otherwise FALSE
     */
    public function add($timeout)
    {
    }

    /**
     * Makes signal event pending
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Event::addSignal() is an alias of Event::add()</p>
     *
     * @link http://php.net/manual/en/event.addsignal.php
     * @see  Event::add()  http://php.net/manual/en/event.add.php
     * @see  Event::del() http://php.net/manual/en/event.del.php
     * @see  Event::delSignal() http://php.net/manual/en/event.delsignal.php
     * @see  Event::signal() http://php.net/manual/en/event.signal.php
     *
     * @param double $timeout [optional] Timeout in seconds.
     *
     * @return bool Returns TRUE on success. Otherwise FALSE
     */
    public function addSignal($timeout)
    {
    }

    /**
     * Makes timer event pending
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Event::addTimer() is an alias of Event::add()</p>
     *
     * @link http://php.net/manual/en/event.addtimer.php
     * @see  Event::add() http://php.net/manual/en/event.add.php
     * @see  Event::del() http://php.net/manual/en/event.del.php
     * @see  Event::delTimer() http://php.net/manual/en/event.deltimer.php
     *
     * @param double $timeout [optional] Timeout in seconds.
     *
     * @return bool Returns TRUE on success. Otherwise FALSE
     */
    public function addTimer($timeout)
    {
    }

    /**
     * Constructs Event object
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/event.construct.php
     * @see  Event::signal() http://php.net/manual/en/event.signal.php
     * @see  Event::timer() http://php.net/manual/en/event.timer.php
     *
     * @param EventBase $base The event base to associate with.
     * @param mixed     $fd   stream resource, socket resource, or numeric file
     *                        descriptor. For timer events pass -1 . For signal
     *                        events pass the signal number, e.g. SIGHUP .
     * @param int       $what Event flags. See Event flags .
     * @param callable  $cb   The event callback. See Event callbacks .
     * @param mixed     $arg  [optional] Custom data. If specified, it will be
     *                        passed to the callback when event triggers.
     *
     * @return Event
     */
    public function __construct(EventBase $base, $fd, $what, $cb, $arg = null)
    {
    }

    /**
     * Makes event non-pending
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Removes an event from the set of monitored events,
     * i.e. makes it non-pending.</p>
     *
     * @link http://php.net/manual/en/event.del.php
     * @see  Event::add() http://php.net/manual/en/event.add.php
     *
     * @return bool Returns TRUE on success. Otherwise FALSE
     */
    public function del()
    {
    }

    /**
     * Makes signal event non-pending
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Event::delSignal() is an alias of Event::del().</p>
     *
     * @link http://php.net/manual/en/event.delsignal.php
     * @see  Event::del()
     *
     * @return bool
     */
    public function delSignal()
    {
    }

    /**
     * Makes timer event non-pending
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Event::delTimer() is an alias of Event::del().</p>
     *
     * @link http://php.net/manual/en/event.deltimer.php
     * @see  Event::del()
     *
     * @return bool
     */
    public function delTimer()
    {
    }

    /**
     * Make event non-pending and free resources allocated for this event.
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Removes event from the list of events monitored by libevent, and
     * free resources allocated for the event.</p>
     *
     * <p>Warning: The Event::free() method currently doesn't destruct the
     * object itself. To destruct the object completely call unset() , or
     * assign NULL.</p>
     *
     * @link http://php.net/manual/en/event.free.php
     * @see  Event::__construct() http://php.net/manual/en/event.construct.php
     *
     * @return void
     */
    public function free()
    {
    }

    /**
     * Returns array with of the names of the methods supported in this
     * version of Libevent
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/event.getsupportedmethods.php
     * @see  EventConfig http://php.net/manual/en/class.eventconfig.php
     *
     * @return array
     */
    public function getSupportedMethods()
    {
    }

    /**
     * Detects whether event is pending or scheduled
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/event.pending.php
     *
     * @param int $flags One of, or a composition of the following constants:
     *                   Event::READ , Event::WRITE , Event::TIMEOUT ,
     *                   Event::SIGNAL .
     *
     * @return bool Returns TRUE if event is pending or scheduled. Otherwise
     *              FALSE.
     */
    public function pending($flags)
    {
    }

    /**
     * Re-configures event
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Re-configures event. Note, this function doesn't invoke obsolete
     * libevent's event_set. It calls event_assign instead.</p>
     *
     * @link http://php.net/manual/en/event.set.php
     *
     * @param EventBase $base       The event base to associate the event with.
     * @param mixed     $fd         A stream, socket resource, or numeric file
     *                              descriptor; for signal events pass -1 .
     * @param int       $what       [optional] See Event flags .
     * @param callable  $cb         [optional] The event callback. See Event
     *                              callbacks .
     * @param mixed     $arg        [optional] Custom data associated with the
     *                              event. It will be passed to the callback
     *                              when the event becomes active.
     *
     * @return bool Returns TRUE on success. Otherwise FALSE.
     */
    public function set(EventBase $base, $fd, $what, $cb, $arg)
    {
    }

    /**
     * Set event priority
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/event.setpriority.php
     *
     * @param int $priority
     *
     * @return bool Returns TRUE on success. Otherwise FALSE.
     */
    public function setPriority($priority)
    {
    }

    /**
     * Re-configures timer event
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Re-configures timer event. Note, this function doesn't invoke
     * obsolete libevent's event_set . It calls event_assign instead.</p>
     *
     * @link http://php.net/manual/en/event.settimer.php
     * @see  Event::__construct() http://php.net/manual/en/event.construct.php
     * @see  Event::timer() http://php.net/manual/en/event.timer.php
     *
     * @param EventBase $base The event base to associate with.
     * @param callable  $cb   The timer event callback. See Event callbacks .
     * @param mixed     $arg  [optional] Custom data. If specified, it will be
     *                        passed to the callback when event triggers.
     *
     * @return bool Returns TRUE on success. Otherwise FALSE.
     */
    public function setTimer(EventBase $base, $cb, $arg)
    {
    }

    /**
     * Constructs signal event object
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Constructs signal event object. This is a straightforward method to
     * create a signal event. Note, the generic Event::__construct() method can
     * contruct signal event objects too.</p>
     *
     * @link http://php.net/manual/en/event.signal.php
     * @see  Constructing signal events
     *       http://php.net/manual/en/event.constructing.signal.events.php
     *
     * @param EventBase $base   The associated event base object.
     * @param int       $signum The signal number.
     * @param callable  $cb     The signal event callback. See Event callbacks
     *                          .
     * @param mixed     $arg    [optional] Custom data. If specified, it will
     *                          be passed to the callback when event triggers.
     *
     * @return bool
     */
    public function signal(EventBase $base, $signum, $cb, $arg)
    {
    }

    /**
     * Constructs timer event object
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Constructs timer event object. This is a straightforward method to
     * create a timer event. Note, the generic Event::__construct() method can
     * construct signal event objects too.</p>
     *
     * @link http://php.net/manual/en/event.timer.php
     *
     * @param EventBase $base The associated event base object.
     * @param callable  $cb   The signal event callback. See Event callbacks .
     * @param mixed     $arg  Custom data. If specified, it will be passed to
     *                        the callback when event triggers.
     *
     * @return bool Returns Event object on success. Otherwise FALSE.
     */
    public function timer(EventBase $base, $cb, $arg)
    {
    }

}