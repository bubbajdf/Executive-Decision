<?php

function ConnectToDb()
{
    header("Expires: 0");
    header("cache-control: no-store, no-cache, must-revalidate"); 
    header("Pragma: no-cache");
    
    $db_connect_file = __DIR__ . '/../database.php';	
    $conn = NULL;
    include ($db_connect_file);
    if (!isset($username) || !isset($password) || !isset($db) || (!isset($hostname) && !isset($db_socket)))
    {
	    exit("There is not a valid hostname ($hostname) / database ($db) / username ($username) / password (XXXXXX) combination in your database connection file [$db_conn_file].");
    }
    
    if (function_exists('mysqli_connect')) 
    {
	    $port = '';
	    if (strpos($hostname, ':') !== false) {
		    list ($hostname_wo_port, $port) = explode(':', $hostname, 2);
	    }
	    $hostname = preg_replace("/\:.*/", '', $hostname);
	    if (!is_numeric($port)) $port = '3306'; // Default MySQL port
	    if ($hostname === null && $db_socket === null) $port = null;
		$conn = mysqli_connect($hostname, $username, $password, $db, $port, $db_socket);
   	    if (!$conn) 
        {
		    exit("The hostname ($hostname) / username ($username) / password (XXXXXX) combination in your database connection file [$db_conn_file] could not connect to the server. Please check their values.<br><br>You may need to complete the <a href='install.php'>installation</a>."); 
	    }
	}

    return $conn;
}
