<?php




session_start();

$host = "host=www.eecs.uottawa.ca";
$port = "port=15432";
$dbname = "dbname=lnize065";
$credentials = "user=lnize065 password=Laurent1";

$_SESSION["host"] = $host;
$_SESSION["port"] = $port;
$_SESSION["db"] = $dbname;
$_SESSION["credentials"] = $credentials;


$db = pg_connect ( "$host $port $dbname $credentials" );

function connectDB($host, $port, $dbname, $credentials) {

	$db = pg_connect ( "$host $port $dbname $credentials" );

}

connectDB ($host, $port, $dbname, $credentials);

		function firstlike($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canon1dc';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dc';

EOF;

			$ret = pg_query ( $db, $sql );
			$row = pg_fetch_row($ret);

			$a = $row[1];




			if(isset($_POST['action'])) {

				if($_POST['action'] == 'call_this') {
					$a = $a + 1;

					firstlike($db,$a);
					header("Refresh:0; url=pro.php");
				}
		}

?>