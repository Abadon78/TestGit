<?php
/**
 * Application setup
 * 
 * @package    Application
 */

// define request microtime
define('REQUEST_MICROTIME', microtime(true));

// change dir
chdir(dirname(__DIR__));

// define application path angepasst
define('DOC_ROOT', realpath(__DIR__ . '/..'));


