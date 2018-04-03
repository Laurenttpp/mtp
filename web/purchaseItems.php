<?php




session_start ();


$host = $_SESSION ["host"];
$port = $_SESSION ["port"];
$dbname = $_SESSION ["db"];
$credentials = $_SESSION ["credentials"];


$db = pg_connect ( "$host $port $dbname $credentials" );



function connectDB($host, $port, $dbname, $credentials) {

	$db = pg_connect ( "$host $port $dbname $credentials" );
	if (! $db) {
		echo "Error : Unable to open database\n";
	} else {
		echo "Opened database successfully\n";
	}
}

connectDB ($host, $port, $dbname, $credentials);






$sql = <<<EOF
				UPDATE DataBase.camera
				SET rented = 0
				WHERE rented=1;
EOF;

$ret = pg_query ( $db, $sql );

//else {echo "empty informations  ".$_POST['name'];}



?>