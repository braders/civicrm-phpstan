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