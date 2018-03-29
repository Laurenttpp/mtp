<?php

session_start ();


$host = $_SESSION ["host"];
$port = $_SESSION ["port"];
$dbname = $_SESSION ["db"];
$credentials = $_SESSION ["credentials"];


$db = pg_connect ( "$host $port $dbname $credentials" );



function connectDB($host, $port, $dbname, $credentials) {
	
	$db = pg_connect ( "$host $port $dbname $credentials" );

}

connectDB ($host, $port, $dbname, $credentials);




 $logmail= $_SESSION['mail'];

	$sql = <<<EOF
				UPDATE DataBase.account
				SET logstate = false
				WHERE mailaccount='$logmail';
EOF;

	$ret = pg_query ( $db, $sql );



$logmail= $_SESSION['mail'];



?>