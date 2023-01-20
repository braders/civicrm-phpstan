<?php
define('CIVICRM_SITE_KEY', 1);
define('CIVICRM_UF', 1);
define('CIVICRM_UF_BASEURL', '');
define('CIVICRM_DOMAIN_ID', '');
define('OF_OPEN', 1);
define('FRIBIDI_AUTO', 1);
define('CIVICRM_DSN', 1);
define('PEAR_LOG_DEBUG', 1);
define('PEAR_LOG_INFO', 1);
define('PEAR_LOG_NOTICE', 1);
define('PEAR_LOG_WARNING', 1);
define('PEAR_LOG_ERR', 1);
define('PEAR_LOG_CRIT', 1);
define('PEAR_LOG_ALERT', 1);
define('PEAR_LOG_EMERG', 1);
define('ABSPATH', 1);
define('WPINC', 1);
define('CIVICRM_FLEXMAILER_HACK_DELIVER', 1);
define('JVERSION', 1);
define('TBSZIP_STRING', 1);
define('PASS_THROUGH', 1);
define('BACKDROP_BOOTSTRAP_FULL', 1);
define('JS_LIBRARY', 1);
define('LANGUAGE_NEGOTIATION_URL_DOMAIN', 1);
define('LANGUAGE_NEGOTIATION_URL_PREFIX', 1);
define('CIVICRM_PLUGIN_URL', '');
define('WATCHDOG_DEBUG', '');

set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../');
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../packages');

require __DIR__ . '/../vendor/autoload.php';

require_once 'HTML/QuickForm/Renderer/ArraySmarty.php';
require_once 'HTML/QuickForm/Controller.php';
require_once 'HTML/QuickForm/Action/Direct.php';
require_once 'HTML/QuickForm/Page.php';

require_once 'CRM/Core/ClassLoader.php';
CRM_Core_ClassLoader::singleton()->register();

require_once 'CRM/Core/DAO/permissions.php';

class_alias('CRM_Core_Exception', 'API_Exception');
class_alias('CRM_Core_Exception', 'CiviCRM_API3_Exception');
class_alias('Civi\Core\HookInterface', 'Civi\Test\HookInterface');
class_alias('CRM_ACL_DAO_ACLEntityRole', 'CRM_ACL_DAO_EntityRole');
class_alias('CRM_Dedupe_DAO_DedupeException', 'CRM_Dedupe_DAO_Exception');
class_alias('CRM_Dedupe_DAO_DedupeRule', 'CRM_Dedupe_DAO_Rule');
class_alias('CRM_Dedupe_DAO_DedupeRuleGroup', 'CRM_Dedupe_DAO_RuleGroup');
class_alias('CRM_Financial_BAO_EntityFinancialAccount', 'CRM_Financial_BAO_FinancialTypeAccount');
class_alias('CRM_Mailing_BAO_MailingRecipients', 'CRM_Mailing_BAO_Recipients');
class_alias('CRM_Mailing_DAO_MailingRecipients', 'CRM_Mailing_DAO_Recipients');
class_alias('CRM_Mailing_Event_BAO_MailingEventBounce', 'CRM_Mailing_Event_BAO_Bounce');
class_alias('CRM_Mailing_Event_BAO_MailingEventConfirm', 'CRM_Mailing_Event_BAO_Confirm');
class_alias('CRM_Mailing_Event_BAO_MailingEventDelivered', 'CRM_Mailing_Event_BAO_Delivered');
class_alias('CRM_Mailing_Event_BAO_MailingEventForward', 'CRM_Mailing_Event_BAO_Forward');
class_alias('CRM_Mailing_Event_BAO_MailingEventOpened', 'CRM_Mailing_Event_BAO_Opened');
class_alias('CRM_Mailing_Event_BAO_MailingEventQueue', 'CRM_Mailing_Event_BAO_Queue');
class_alias('CRM_Mailing_Event_BAO_MailingEventReply', 'CRM_Mailing_Event_BAO_Reply');
class_alias('CRM_Mailing_Event_BAO_MailingEventSubscribe', 'CRM_Mailing_Event_BAO_Subscribe');
class_alias('CRM_Mailing_Event_BAO_MailingEventClickThrough', 'CRM_Mailing_Event_BAO_TrackableURLOpen');
class_alias('CRM_Mailing_Event_BAO_MailingEventUnsubscribe', 'CRM_Mailing_Event_BAO_Unsubscribe');
class_alias('CRM_Mailing_Event_DAO_MailingEventBounce', 'CRM_Mailing_Event_DAO_Bounce');
class_alias('CRM_Mailing_Event_DAO_MailingEventConfirm', 'CRM_Mailing_Event_DAO_Confirm');
class_alias('CRM_Mailing_Event_DAO_MailingEventDelivered', 'CRM_Mailing_Event_DAO_Delivered');
class_alias('CRM_Mailing_Event_DAO_MailingEventForward', 'CRM_Mailing_Event_DAO_Forward');
class_alias('CRM_Mailing_Event_DAO_MailingEventOpened', 'CRM_Mailing_Event_DAO_Opened');
class_alias('CRM_Mailing_Event_DAO_MailingEventQueue', 'CRM_Mailing_Event_DAO_Queue');
class_alias('CRM_Mailing_Event_DAO_MailingEventReply', 'CRM_Mailing_Event_DAO_Reply');
class_alias('CRM_Mailing_Event_DAO_MailingEventSubscribe', 'CRM_Mailing_Event_DAO_Subscribe');
class_alias('CRM_Mailing_Event_DAO_MailingEventClickThrough', 'CRM_Mailing_Event_DAO_TrackableURLOpen');
class_alias('CRM_Mailing_Event_DAO_MailingEventUnsubscribe', 'CRM_Mailing_Event_DAO_Unsubscribe');