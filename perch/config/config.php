<?php
	define('PERCH_LICENSE_KEY', 'P21601-LJU059-CXD573-KLN344-YPH007');

	define("PERCH_DB_USERNAME", 'root');
	define("PERCH_DB_PASSWORD", '');
	define("PERCH_DB_SERVER", "localhost");
	define("PERCH_DB_DATABASE", "caravanr_perch");
	define("PERCH_DB_PREFIX", "perch2_");	 
	// define("PERCH_DB_USERNAME", 'caravanr_perch');
	// define("PERCH_DB_PASSWORD", '6wCDqnJE3aQg');
	// define("PERCH_DB_SERVER", "10.169.0.70");
	// define("PERCH_DB_DATABASE", "caravanr_perch");
	// define("PERCH_DB_PREFIX", "perch2_");
	
	define('PERCH_TZ', 'Europe/London');
	
	define('PERCH_EMAIL_FROM', 'noreply@caravanrestaurants.co.uk');
	define('PERCH_EMAIL_FROM_NAME', 'Caravan Restaurants');
	define('PERCH_EMAIL_METHOD', 'smtp');
	define('PERCH_EMAIL_HOST', '10.168.1.70');
	define('PERCH_EMAIL_AUTH', false);
	define('PERCH_EMAIL_PORT', 25);
	
	define('PERCH_LOGINPATH', '/perch');
	define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
	define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');
	
	define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
	define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
	
	define('PERCH_HTML5', true);
	define('PERCH_SCHEDULE_SECRET', 'withoutstudio');
	define('PERCH_SSL', false);
// 	define('PERCH_PARANOID', true);
	
// 	define( 'PERCH_DEFAULT_BUCKET','images' );
	define('PERCH_MAX_FAILED_LOGINS', 5);
	define('PERCH_PASSWORD_MIN_LENGTH', 8);
	define('PERCH_FORCE_SECURE_COOKIES', true);