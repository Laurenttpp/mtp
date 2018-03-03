<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  <link rel="stylesheet" href="logstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
     
    
    button,a {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.sign {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.sign, .log {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 180px) {
    .sign, .log {
       width: 100%;
    }
}
    </style>
    
    
    
       
  
</head>

<body background="image.jpg" >




<?php

session_start();

$host = "host=www.eecs.uottawa.ca";
$port = "port=15432";
$dbname = "dbname=mrafe084";
$credentials = "user=mrafe084 password=Jonath2002";

$_SESSION["host"] = $host;
$_SESSION["port"] = $port;
$_SESSION["db"] = $dbname;
$_SESSION["credentials"] = $credentials;


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
  <form class="login-form" >
 
  <input type="email" class="login-username" autofocus="true" required="true" placeholder="Email"  name="name" id="name"  />
  <input type="password" class="login-password" required="true" placeholder="Password" name="word" id="word"/>
  <div class="clearfix">
    <a type="button" class="sign" href="addAccount.php">Sign Up</a>
    
    <button type="submit" class="log" id="login" name="login" >Login</button>
      
    </div>
    
    </form>
</div>
</div>
    
    
    

 <div id="resultat">
        <!-- Nous allons afficher un retour en jQuery au visiteur -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>



</body>

</html>



<script>

$(document).ready(function(){
	$("#login").click(function(){
	  username=$("#name").val();
	  password=$("#word").val();
	
	  $.ajax({
	   type: "post",
	   url: "redirectHome.php",
	   data: "name="+username+"&pwd="+password,	
	   success: function(html){    
	if(html=='Success')    {
	window.location="Home.html";
	}
	else if (html=='Failed')   {
		document.getElementById("resultat").innerHTML = "connection error !";
	}
	else{
		document.getElementById("resultat").innerHTML = "empty informations";
		
		}
	   },

	  });
	return false;
	});
	});

</script>