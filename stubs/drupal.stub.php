<?php
/**
 * @return array
*/
function form_state_defaults() {}

/**
 * @param string $string
 *   The permission, such as "administer nodes", being checked for.
 * @param object $account
 *   (optional) The account to check, if not given use currently logged in user.
 *
 * @return boolean
 *   TRUE if the user has the requested permission.
 */
function user_access($string, $account = NULL) {}

/**
 * @param string name
 * @param mixed default
 * @return mixed
 */
function variable_get($name, $default = NULL) {}

/**
 * @param object $node
 * @throws \Exception
 */
function node_save($node) {}

/**
 * @param int $nid
 */
function node_delete($nid) {}

/**
 * @param int $uid
 * @param bool $reset
 * @return object|false
 */
function user_load($uid, $reset) {}

/**
 * @return object
 */
function db_query($query, $args, $options) {}

/**
 * @return mixed
 */
function arg($index, $path) {}

class Drupal
{
    /**
     * @param string $channel
     * @return \Psr\Log\LoggerInterface
     */
    public static function logger($channel) {}

    /**
     * @return \Drupal\Core\Session\AccountProxyInterface
     */
    public static function currentUser() {}
}
