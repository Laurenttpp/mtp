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
  if (! $db) {
    echo "Error : Unable to open database\n";
  } else {
    echo "Opened database successfully\n";
  }
}

connectDB ($host, $port, $dbname, $credentials);

////creer DB





////////////Compte par defaut

function newAccount($db, $nameA, $mailA, $mdpA, $stateA) {
  $sql = <<<EOF
    INSERT INTO DataBase.account
    VALUES ('$nameA', '$mailA', '$mdpA','$stateA');


EOF;


  
  
  $ret = pg_query ( $db, $sql );
  if (! $ret) {
    echo "Insertion error " + pg_last_error ( $db );
  } else {
    echo "Records created successfully\n";
  }
}



$firsrM= "jo@mail";
$firstP="jo";



$sql = <<<EOF
        SELECT * FROM DataBase.account WHERE mailaccount ='$firsrM' AND mdpaccount ='$firstP' ;

EOF;

$ret = pg_query ( $db, $sql );

$row = pg_fetch_row($ret);

if($row[0]==null){
  newAccount($db,"jo",  "jo@mail","jo",'false');
  ;
}

/////////////



pg_close ($db);







?>





    <div class="grandParentContaniner">
    
  <form class="login-form" >
 
  <input type="email" class="login-username" autofocus="true" required="true" placeholder="Email"  name="name" id="name"  />
  <input type="password" class="login-password" required="true" placeholder="Password" name="word" id="word"/>
    <a type="button" class="sign" href="addAccount.php">Sign Up</a>
    
    <button type="submit" class="log" id="login" name="login" >Login</button>
      
    
    </form>

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