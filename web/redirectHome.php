<?php




session_start();

$host = "host=www.eecs.uottawa.ca";
$port = "port=15432";
$dbname = "dbname=-------";
$credentials = "user=------ password=------";

$_SESSION["host"] = $host;
$_SESSION["port"] = $port;
$_SESSION["db"] = $dbname;
$_SESSION["credentials"] = $credentials;


$db = pg_connect ( "$host $port $dbname $credentials" );

function connectDB($host, $port, $dbname, $credentials) {

	$db = pg_connect ( "$host $port $dbname $credentials" );

}

connectDB ($host, $port, $dbname, $credentials);







if( isset($_POST['name']) && isset($_POST['pwd'])   ){
	
	
	$logmail= $_POST['name'];
	$logmdp=$_POST['pwd'];;
	

	
	$sql = <<<EOF
    		SELECT * FROM DataBase.account WHERE mailaccount ='$logmail' AND mdpaccount ='$logmdp' ;

EOF;

	$ret = pg_query ( $db, $sql );





	$row = pg_fetch_row($ret);

	if($row[0]!=null){
		echo "Success";
		}
		else{ // Sinon
			echo "Failed"; 
		}

}

else {echo "empty informations  ".$_POST['name'];}

?>