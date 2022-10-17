<?php
ini_set('display_errors', 1);
class Configs
{
	function getSettings()
	{
		// Database variables
		// Host name
		$settings['dbhost'] = 'localhost';
		// Database name
		$settings['dbname'] = 'php_goals';
		// Username
		$settings['dbusername'] = 'root';
		// Password
		$settings['dbpassword'] = 'passwd';
		
		return $settings;
	}
}