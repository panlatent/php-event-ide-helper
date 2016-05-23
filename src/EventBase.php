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
     * Flag used with EventBase::loop() method which means: "block until
     * libevent has an active event, then exit once all active events have had
     * their callbacks run".
     */
    const LOOP_ONCE = 1;
    /**
     * Flag used with EventBase::loop() method which means: "do not block: see
     * which events are ready now, run the callbacks of the highest-priority
     * ones, then exit".
     */
    const LOOP_NONBLOCK = 2;
    /**
     * Configuration flag. Do not allocate a lock for the event base, even if
     * we have locking set up".
     */
    const NOLOCK = 1;
    /**
     * Windows-only configuration flag. Enables the IOCP dispatcher at startup.
     */
    const STARTUP_IOCP = 4;
    /**
     * Configuration flag. Instead of checking the current time every time the
     * event loop is ready to run timeout callbacks, check after each timeout
     * callback.
     */
    const NO_CACHE_TIME = 8;
    /**
     * If we are using the epoll backend, this flag says that it is safe to use
     * Libevent's internal change-list code to batch up adds and deletes in
     * order to try to do as few syscalls as possible.
     *
     * Setting this flag can make code run faster, but it may trigger a Linux
     * bug: it is not safe to use this flag if one has any fds cloned by dup(),
     * or its variants. Doing so will produce strange and hard-to-diagnose
     * bugs.
     *
     * This flag can also be activated by settnig the
     * EVENT_EPOLL_USE_CHANGELIST environment variable.
     *
     * This flag has no effect if one winds up using a backend other than epoll.
     */
    const EPOLL_USE_CHANGELIST = 16;

    /**
     * Constructs EventBase object
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/eventbase.construct.php
     *
     * @param EventConfig $cfg [optional] EventConfig object.
     *
     * @return EventBase
     */
    public function __construct(EventConfig $cfg = null)
    {
    }

    /**
     * Dispatch pending events
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Wait for events to become active, and run their callbacks. The same
     * as EventBase::loop() with no flags set.</p>
     *
     * <p>Warning: Do NOT destroy the EventBase object as long as resources of
     * the associated Event objects are not released. Otherwise, it will lead
     * to unpredictable results!</p>
     *
     * @link http://php.net/manual/en/eventbase.dispatch.php
     * @see  EventBase::loop() http://php.net/manual/en/eventbase.loop.php
     *
     * @return bool Returns TRUE on success. Otherwise FALSE.
     */
    public function dispatch()
    {
    }

    /**
     * Stop dispatching events
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Tells event base to stop optionally after given number of
     * seconds.</p>
     *
     * @link http://php.net/manual/en/eventbase.exit.php
     * @see  EventBase::stop() http://php.net/manual/en/eventbase.stop.php
     *
     * @param double $timeout [optional] number of seconds after which the
     *                        event base should stop dispatching events.
     *
     * @return bool Returns TRUE on success. Otherwise FALSE.
     */
    public function exit($timeout = null)
    {
    }

    /**
     * Free resources allocated for this event base
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Deallocates resources allocated by libevent for the EventBase
     * object.</p>
     *
     * <p>Warning: The EventBase::free() method doesn't destruct the object
     * itself. To destruct the object completely call unset() , or assign NULL.
     *
     * This method does not deallocate or detach any of the events that are
     * currently associated with the EventBase object, or close any of their
     * sockets - beware.</p>
     *
     * @link http://php.net/manual/en/eventbase.free.php
     * @see  EventBase::__construct()
     *       http://php.net/manual/en/eventbase.construct.php
     *
     * @return void
     */
    public function free()
    {
    }

    /**
     * Returns bitmask of features supported
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/eventbase.getfeatures.php
     * @see  EventBase::getMethod()
     *       http://php.net/manual/en/eventbase.getmethod.php
     * @see  EventConfig http://php.net/manual/en/class.eventconfig.php
     *
     * @return int Returns integer representing a bitmask of supported
     *             features. See EventConfig::FEATURE_* constants .
     */
    public function getFeatures()
    {
    }

    /**
     * Returns event method in use
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/eventbase.getmethod.php
     * @see  EventBase::getFeatures()
     *       http://php.net/manual/en/eventbase.getfeatures.php
     *
     * @param EventConfig $cfg [optional] EventConfig object.
     *
     * @return string String representing used event method(backend).
     */
    public function getMethod(EventConfig $cfg = null)
    {
    }

    /**
     * Returns the current event base time
     * (PECL event >= 1.2.6-beta)
     *
     * <p>On success returns the current time(as returned by gettimeofday() ),
     * looking at the cached value in base if possible, and calling
     * gettimeofday() or clock_gettime() as appropriate if there is no cached
     * time.</p>
     *
     * @link http://php.net/manual/en/eventbase.gettimeofdaycached.php
     *
     * @return double|null Returns the current event base time. On failure
     *                     returns NULL.
     */
    public function getTimeOfDayCached()
    {
    }

    /**
     * Checks if the event loop was told to exit
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Checks if the event loop was told to exit by EventBase::exit() .</p>
     *
     * @link http://php.net/manual/en/eventbase.gotexit.php
     * @see  EventBase::exit() http://php.net/manual/en/eventbase.exit.php
     * @see  EventBase::stop() http://php.net/manual/en/eventbase.stop.php
     * @see  EventBase::gotStop()
     *       http://php.net/manual/en/eventbase.gotstop.php
     *
     * @return bool Returns TRUE, event loop was told to exit by
     *              EventBase::exit() . Otherwise FALSE.
     */
    public function gotExit()
    {
    }

    /**
     * Checks if the event loop was told to exit
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Checks if the event loop was told to exit by EventBase::stop() .</p>
     *
     * @link    http://php.net/manual/en/eventbase.gotstop.php
     * @see     EventBase::exit() http://php.net/manual/en/eventbase.exit.php
     * @see     EventBase::stop() http://php.net/manual/en/eventbase.stop.php
     * @see     EventBase::gotExit()
     *           http://php.net/manual/en/eventbase.gotexit.php
     *
     * @return bool Returns TRUE, event loop was told to stop by
     *              EventBase::stop() . Otherwise FALSE.
     */
    public function gotStop()
    {
    }

    /**
     * Dispatch pending events
     * (PECL event >= 1.2.6-beta)
     *
     * <p>Wait for events to become active, and run their callbacks.</p>
     *
     * <p>Warning: Do NOT destroy the EventBase object as long as resources of
     * the associated Event objects are not released. Otherwise, it will lead
     * to unpredictable results!</p>
     *
     * @link http://php.net/manual/en/eventbase.loop.php
     * @see  EventBase::dispatch()
     *       http://php.net/manual/en/eventbase.dispatch.php
     *
     * @param int $flags [optional] flags. One of EventBase::LOOP_* constants.
     *                   See EventBase constants .
     *
     * @return bool Returns TRUE on success. Otherwise FALSE.
     */
    public function loop($flags = null)
    {
    }

    /**
     * Sets number of priorities per event base
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/eventbase.priorityinit.php
     * @see Event::setPriority() http://php.net/manual/en/event.setpriority.php
     *
     * @param int $n_priorities The number of priorities per event base.
     *
     * @return bool Returns TRUE on success, otherwise FALSE.
     */
    public function priorityInit($n_priorities)
    {
    }

    /**
     * Re-initialize event base(after a fork).
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/eventbase.reinit.php
     *
     * @return bool http://php.net/manual/en/eventbase.reinit.php
     */
    public function reInit()
    {
    }

    /**
     * Tells event_base to stop dispatching events
     * (PECL event >= 1.2.6-beta)
     *
     * @link http://php.net/manual/en/eventbase.stop.php
     * @see EventBase::exit() http://php.net/manual/en/eventbase.exit.php
     * @see EventBase::gotStop() http://php.net/manual/en/eventbase.gotstop.php
     *
     * @return bool Returns TRUE on success. Otherwise FALSE.
     */
    public function stop()
    {
    }

}