<?php
/**
* Description:	This includes for basic and core configurations.
* Author:		Joken Villanueva
* Date Created:	october 27, 2013
* Revised By:		
*/

//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
// Define constants for directory separators and root directory
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'Projects' . DS . 'landmark_hotel');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'includes');

// Load configuration and basic functions
require_once(LIB_PATH . DS . 'config.php');
require_once(LIB_PATH . DS . 'functions.php');

// Load other necessary files
require_once(LIB_PATH . DS . 'session.php');
require_once(LIB_PATH . DS . 'user.php');
require_once(LIB_PATH . DS . 'accomodation.php');
require_once(LIB_PATH . DS . 'guest.php');
require_once(LIB_PATH . DS . 'reserve.php');
require_once(LIB_PATH . DS . 'database.php');


//load database-related classes
?>