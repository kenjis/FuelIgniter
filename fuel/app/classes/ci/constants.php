<?php
/**
* FuelIgniter
*
* @author     Kenji Suzuki https://github.com/kenjis
* @copyright  2012 Kenji Suzuki
* @license    MIT License http://opensource.org/licenses/MIT
* @link       https://github.com/kenjis/FuelIgniter
*/

/**
 * CodeIgniter constants
 */
define('FILE_READ_MODE',  0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE',   0755);
define('DIR_WRITE_MODE',  0777);

define('FOPEN_READ',                          'rb');
define('FOPEN_READ_WRITE',                    'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',      'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',                  'ab');
define('FOPEN_READ_WRITE_CREATE',             'a+b');
define('FOPEN_WRITE_CREATE_STRICT',           'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',      'x+b');
