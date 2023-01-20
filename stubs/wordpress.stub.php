<?php
/**
  * @param string     $field The field to retrieve the user with. id | ID | slug | email | login.
  * @param int|string $value A value for $field. A user ID, slug, email address, or login name.
  * @return WP_User|false WP_User object on success, false on failure.
  */
function get_user_by($field, $value) {}

/**
  * @param int|null $id   User ID.
  * @param string   $name User's username.
  * @return WP_User Current user User object.
  */
function wp_set_current_user($id, $name = '') {}

/**
 * @param string $username User's username or email address.
 * @param string $password User's password.
 * @return WP_User|WP_Error WP_User object if the credentials are valid,
 *                          otherwise WP_Error.
 */
function wp_authenticate($username, $password) {}

/**
 * @param string $string What to remove the trailing slashes from.
 * @return string String without the trailing slashes.
 */
function untrailingslashit($string) {}

/**
 * @param string      $path   Optional. Path relative to the home URL. Default empty.
 * @param string|null $scheme Optional. Scheme to give the home URL context. Accepts
 *                            'http', 'https', 'relative', 'rest', or null. Default null.
 * @return string Home URL link with optional path appended.
 */
function home_url($path = '', $scheme = null) {}

/**
 * @param string       $page_path Page path.
 * @param string       $output    Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                                correspond to a WP_Post object, an associative array, or a numeric array,
 *                                respectively. Default OBJECT.
 * @param string|string[] $post_type Optional. Post type or array of post types. Default 'page'.
 * @return WP_Post|WP_Post[]|null WP_Post (or array) on success, or null on failure.
 */
function get_page_by_path($page_path, $output = 'OBJECT', $post_type = 'page') {}

/**
 * @param string $username Username.
 * @return bool Whether username given is valid.
 */
function validate_username($username) {}

/**
 * @return bool
 */
function is_multisite() {}

/**
 * @param string $hook_name The name of the filter hook.
 * @param mixed  $value     The value to filter.
 * @param mixed  ...$args   Additional parameters to pass to the callback functions.
 * @return mixed The filtered value after all hooked functions are applied to it.
 */
function apply_filters($hook_name, $value, ...$args) {}

/**
  * @param int $user_id User ID
  * @return WP_User|false WP_User object on success, false on failure.
  */
function get_userdata($user_id) {}

/**
  * @return WP_User Current WP_User instance.
  */
function wp_get_current_user() {}

/**
 * @param string $role Role name.
 * @return WP_Role|null WP_Role object if found, null if the role does not exist.
 */
function get_role($role) {}

/**
 * @return WP_Roles WP_Roles global instance if not already instantiated.
 */
function wp_roles() {}

/*
 * @param string $time Optional. Time formatted in 'yyyy/mm'. Default null.
 * @param bool   $create_dir Optional. Whether to check and create the uploads directory.
 *                           Default true for backward compatibility.
 * @param bool   $refresh_cache Optional. Whether to refresh the cache. Default false.
 * @return array {
 *     Array of information about the upload directory.
 *
 *     @type string       $path    Base directory and subdirectory or full path to upload directory.
 *     @type string       $url     Base URL and subdirectory or absolute URL to upload directory.
 *     @type string       $subdir  Subdirectory if uploads use year/month folders option is on.
 *     @type string       $basedir Path without subdir.
 *     @type string       $baseurl URL path without subdir.
 *     @type string|false $error   False or error message.
 * }
 */
function wp_upload_dir( $time = null, $create_dir = true, $refresh_cache = false ) {}

function wp_logout() {}

/**
 * @param string $redirect     Path to redirect to on log in.
 * @param bool   $force_reauth Whether to force reauthorization, even if a cookie is present.
 *                             Default false.
 * @return string The login URL. Not HTML-encoded.
 */
function wp_login_url($redirect = '', $force_reauth = false) {}

/*
 * @param string $location      The path or URL to redirect to.
 * @param int    $status        Optional. HTTP response status code to use. Default '302' (Moved Temporarily).
 * @param string $x_redirect_by Optional. The application doing the redirect. Default 'WordPress'.
 * @return bool False if the redirect was cancelled, true otherwise.
 */
function wp_redirect($location, $status = 302, $x_redirect_by = 'WordPress') {}

/**
 * @param int|WP_User $user User's ID or a WP_User object. Defaults to current user.
 * @return string The locale of the user.
 */
function get_user_locale($user = 0) {}

/**
 * @param string $path   Optional. Path relative to the admin URL. Default empty.
 * @param string $scheme The scheme to use. Default is 'admin', which obeys force_ssl_admin() and is_ssl().
 *                       'http' or 'https' can be passed to force those schemes.
 * @return string Admin URL link with optional path appended.
 */
function admin_url($path = '', $scheme = 'admin') {}

/**
 * @return bool True if it's a WordPress Ajax request, false otherwise.
 */
function wp_doing_ajax() {}

/**
 * @return string|false Referer URL on success, false on failure.
 */
function wp_get_referer() {}


/**
 * @return bool True if inside WordPress administration interface, false otherwise.
 */
function is_admin() {}

/**
 * Generates a random password drawn from the defined set of characters.
 *
 * Uses wp_rand() is used to create passwords with far less predictability
 * than similar native PHP functions like `rand()` or `mt_rand()`.
 *
 * @since 2.5.0
 *
 * @param int  $length              Optional. The length of password to generate. Default 12.
 * @param bool $special_chars       Optional. Whether to include standard special characters.
 *                                  Default true.
 * @param bool $extra_special_chars Optional. Whether to include other special characters.
 *                                  Used when generating secret keys and salts. Default false.
 * @return string The random password.
 */
function wp_generate_password($length = 12, $special_chars = true, $extra_special_chars = false) {}

/**
 * @param string $hook_name The name of the action to be executed.
 * @param mixed  ...$arg    Optional. Additional arguments which are passed on to the
 *                          functions hooked to the action. Default empty.
 */
function do_action( $hook_name, ...$arg ) {}

class WP_Post {
  /**
   * Post ID.
   *
   * @since 3.5.0
   * @var int
   */
  public $ID;

  /**
   * ID of post author.
   *
   * A numeric string, for compatibility reasons.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_author = 0;

  /**
   * The post's local publication time.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_date = '0000-00-00 00:00:00';

  /**
   * The post's GMT publication time.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_date_gmt = '0000-00-00 00:00:00';

  /**
   * The post's content.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_content = '';

  /**
   * The post's title.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_title = '';

  /**
   * The post's excerpt.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_excerpt = '';

  /**
   * The post's status.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_status = 'publish';

  /**
   * Whether comments are allowed.
   *
   * @since 3.5.0
   * @var string
   */
  public $comment_status = 'open';

  /**
   * Whether pings are allowed.
   *
   * @since 3.5.0
   * @var string
   */
  public $ping_status = 'open';

  /**
   * The post's password in plain text.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_password = '';

  /**
   * The post's slug.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_name = '';

  /**
   * URLs queued to be pinged.
   *
   * @since 3.5.0
   * @var string
   */
  public $to_ping = '';

  /**
   * URLs that have been pinged.
   *
   * @since 3.5.0
   * @var string
   */
  public $pinged = '';

  /**
   * The post's local modified time.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_modified = '0000-00-00 00:00:00';

  /**
   * The post's GMT modified time.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_modified_gmt = '0000-00-00 00:00:00';

  /**
   * A utility DB field for post content.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_content_filtered = '';

  /**
   * ID of a post's parent post.
   *
   * @since 3.5.0
   * @var int
   */
  public $post_parent = 0;

  /**
   * The unique identifier for a post, not necessarily a URL, used as the feed GUID.
   *
   * @since 3.5.0
   * @var string
   */
  public $guid = '';

  /**
   * A field used for ordering posts.
   *
   * @since 3.5.0
   * @var int
   */
  public $menu_order = 0;

  /**
   * The post's type, like post or page.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_type = 'post';

  /**
   * An attachment's mime type.
   *
   * @since 3.5.0
   * @var string
   */
  public $post_mime_type = '';

  /**
   * Cached comment count.
   *
   * A numeric string, for compatibility reasons.
   *
   * @since 3.5.0
   * @var string
   */
  public $comment_count = 0;

  /**
   * Stores the post object's sanitization level.
   *
   * Does not correspond to a DB field.
   *
   * @since 3.5.0
   * @var string
   */
  public $filter;
}
class WP_User {
  /**
   * User data container.
   *
   * @since 2.0.0
   * @var stdClass
   */
  public $data;

  /**
   * The user's ID.
   *
   * @since 2.1.0
   * @var int
   */
  public $ID = 0;

  /**
   * Capabilities that the individual user has been granted outside of those inherited from their role.
   *
   * @since 2.0.0
   * @var bool[] Array of key/value pairs where keys represent a capability name
   *             and boolean values represent whether the user has that capability.
   */
  public $caps = array();

  /**
   * User metadata option name.
   *
   * @since 2.0.0
   * @var string
   */
  public $cap_key;

  /**
   * The roles the user is part of.
   *
   * @since 2.0.0
   * @var string[]
   */
  public $roles = array();

  /**
   * All capabilities the user has, including individual and role based.
   *
   * @since 2.0.0
   * @var bool[] Array of key/value pairs where keys represent a capability name
   *             and boolean values represent whether the user has that capability.
   */
  public $allcaps = array();

  /**
   * The filter context applied to user data fields.
   *
   * @since 2.9.0
   * @var string
   */
  public $filter = null;

  /**
   * The site ID the capabilities of this user are initialized for.
   *
   * @since 4.9.0
   * @var int
   */
  private $site_id = 0;

  /**
   * @since 3.3.0
   * @var array
   */
  private static $back_compat_keys;
}
class WP_Roles {}
class WP_Error {}