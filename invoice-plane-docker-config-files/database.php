<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'database';
$db['default']['username'] = getenv('DATABASE_ENV_MYSQL_USER');
$db['default']['password'] = getenv('DATABASE_ENV_MYSQL_PASSWORD');
$db['default']['database'] = getenv('DATABASE_ENV_MYSQL_DATABASE');
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';


