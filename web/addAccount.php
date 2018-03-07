<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="logstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
  
</head>

<body background="image.jpg" >

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

?>




<div class="grandParentContaniner">
<div class="parentContainer">

  <form class="signup-form" action="addAccount.php" method="post">
   <input type="username" name="usernameA" class="login-username" autofocus="true" required="true" placeholder="name" />
  <input type="email"  name="mailA" class="login-username" autofocus="true" required="true" placeholder="Email" />
  <input type="password" name="mdpA" class="login-password" required="true" placeholder="Password" />

  <div class="clearfix">
      <button type="submit" class="save" >Sign up</button>
    </div>
  
  
</form>
</div>
</div>



  
  <?php
  
  //echo ("good");

function newAccount($db, $nameA, $mailA, $mdpA) {
	$sql = <<<EOF
		INSERT INTO DataBase.account
		VALUES ('$nameA', '$mailA', '$mdpA');
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}



if (isset( $_POST['usernameA']) && isset( $_POST['mailA'])  && isset( $_POST['mdpA']) ){
	
	newAccount($db,$_POST['usernameA'],  $_POST['mailA'], $_POST['mdpA']);
}



pg_close ($db);
?>



</body >

</html>