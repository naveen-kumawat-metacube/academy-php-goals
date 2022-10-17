<?php
require_once( 'Configs.php' );
//Database class to connect to database and fire queries
class DBClass extends Configs
{
	var $classQuery;
	var $link;
	
	var $errno = '';
	var $error = '';
	
	// Connects to the database
	public function __construct()
	{
		// Load settings from parent class
		$settings = $this->getSettings();
        
		// Connect to the database
		$this->link = mysqli_connect( $settings['dbhost'] , $settings['dbusername'] , $settings['dbpassword'] , $settings['dbname'] );
	}
	
	// Executes a database query
	function query( $query ) 
	{
		$this->classQuery = $query;
		return $this->link->query( $query );
	}
	
	function escapeString( $query )
	{
		return $this->link->escape_string( $query );
	}
	
	// Get the data return int result
	function numRows($result)
	{
		return $result->num_rows;
	}
	
	function lastInsertedID()
	{
		return $this->link->insert_id;
	}

	// Gets array of query results
	function fetchArray( $result , $resultType = MYSQLI_ASSOC )
	{
		return $result->fetch_array( $resultType );
	}
	
	// Fetches all result rows as an associative array, a numeric array, or both
	function fetchAll( $result , $resultType = MYSQLI_ASSOC )
	{
		return $result->fetch_all( $resultType );
	}
	
	//Closes the database connection
	function close() 
	{
		$this->link->close();
	}
	
	function sql_error()
	{
		if( empty( $error ) )
		{
			$errno = $this->link->errno;
			$error = $this->link->error;
		}
		return $errno . ' : ' . $error;
	}
}