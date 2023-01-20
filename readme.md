PHPStan configuration for CiviCRM
=====================================

About
-----

This repository provides a starter-configuration to start using PHPStan to analyse CiviCRM core files. Whilst the ideas may be transferable to extension developers, this repository is primarily aimed at CiviCRM core contributors.

CiviCRM is a constituent relationship management system designed to meet the needs of advocacy, non-profit and non-governmental groups.
Find out more at https://civicrm.org/

PHPStan focuses on finding errors in your code without actually running it. It catches whole classes of bugs even before you write tests for the code. It moves PHP closer to compiled languages in the sense that the correctness of each line of the code can be checked before you run the actual line.
Find out more at https://https://phpstan.org/

Installation
------------

This PHPStan configuration is designed to be ran on the civicrm-core installation, but does not currently check the CMS specific repositories (civicrm-wordpress, civicrm-drupal etc)

First ensure you have a CiviCRM installation, with composer dependencies installed, and the packages folder setup (installations downloaded from https://civicrm.org/download will have this setup for you, but you will need to handle dependencies yourself if cloning CiviCRM from GitHub).

Clone this civicrm-phpstan repository into the CiviCRM folder. Do not place the folder in the CMS root folder. So for example, the path to your  civicrm-phpstan folder might be:

 - `/app/civicrm-core/civicrm-phpstan`
 - `/app/vendor/civicrm/civicrm-core`
 - `/app/wordpress/wp-content/plugins/civicrm/civicrm/civicrm-phpstan`
 - `/app/drupal/sites/all/modules/civicrm/`
 - `/app/backdrop/modules/civicrm/`
 - `/app/joomla/administrator/components/com_civicrm/civicrm/`

Finally within the civicrm-phpstan folder run `composer install` to download PHPStan.

Usage
-----

From within the `civicrm-phpstan` folder run this command:

```
vendor/bin/phpstan analyse --memory-limit 8G > output.log
```

This will analyse the codebase, and write the results to output.log. The memory limit can be changed dependant on how much memory is available, but the analysis is likely to fail with less than 8GB of memory.

On low-memory systems sometimes the tests run more reliably when passing `--debug` to PHPStan, but this does make the analysis slower.

The full set of PHPStan command line options can be found at https://phpstan.org/user-guide/command-line-usage

Configuration
-----

This repository is best treated as a starting point, and it's likely you will want to edit the `phpstan.neon` file.

The full set of configuration options can be found at: https://phpstan.org/config-reference.

Specific configuration options you may want to play with include:

 - `level`: PHPStan has the concept of rule levels, which determine how strictly to check the code. The available options are 1-10 (0 is the loosest and 9 is the strictest). Starting with a low level is recommended to reduce the amount of un-actionable noise.
 - `ignoreErrors`: Currently CiviCRM can generate hundreds of errors in the analysis. You may wish to ignore the errors which you are not interested in.
 - `paths`, `excludePaths`: Currently only the `CRM`, `Civi` and `api` paths are scanned by default. You may wish to include other folders such as `tests` or `packages`. (Note that including `tests` may require extra configuration changes to make PHPUnit available to PHPStan)

Bootstrap Files
-----

As CiviCRM is intended for use in different CMS's, it necessarily references functions and classes which are only available in specific CMS installations. For example, `module_exists` only exists on Drupal, and `WP_Post` only exists on WordPress. To stop PHPStan warning about these CMS-specific functions and classes, stub files are configured in `phpstan.neon`. These stub files contain the interface of the CMS-specific functions and classes used by CiviCRM, including PHPDoc annotations, but don't contain any actual logic.