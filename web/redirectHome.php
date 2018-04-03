<?php




session_start();

$host = "host=www.eecs.uottawa.ca";
$port = "port=15432";
<<<<<<< HEAD
$dbname = "dbname=lnize065";
$credentials = "user=lnize065 password=Laurent1";
=======
$dbname = "------";
$credentials = "user=------password=------";
>>>>>>> d8b45b9df9af7c9ec8ae5205ed07460422963bcb

$_SESSION["host"] = $host;
$_SESSION["port"] = $port;
$_SESSION["db"] = $dbname;
$_SESSION["credentials"] = $credentials;


$db = pg_connect ( "$host $port $dbname $credentials" );

function connectDB($host, $port, $dbname, $credentials) {

	$db = pg_connect ( "$host $port $dbname $credentials" );

}

connectDB ($host, $port, $dbname, $credentials);

$_SESSION['mail'] = $_POST['name'];
$logmail= $_POST['name'];
$logmdp=$_POST['pwd'];




if( isset($_POST['name']) && isset($_POST['pwd'])   ){





	$sql = <<<EOF
    		SELECT * FROM DataBase.account WHERE mailaccount ='$logmail' AND mdpaccount ='$logmdp' ;

EOF;

	$ret = pg_query ( $db, $sql );





	$row = pg_fetch_row($ret);

	if($row[0]!=null){
		echo "Success";
		
		
		
		$sql2 = <<<EOF
				UPDATE DataBase.account
				SET logstate = true
				WHERE mailaccount='$logmail';		
EOF;
		
		$ret2 = pg_query ( $db, $sql2 );
		
		
	}
	else{ // Sinon
		echo "Failed";
	}

}

//else {echo "empty informations  ".$_POST['name'];}



?>