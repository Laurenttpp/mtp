<!DOCTYPE html>
<html>
<head>
  <title>Cameras</title>
  <link rel="stylesheet" href="homestylesheet.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body class="mbody">
    <div class="row" id="myhead">
        <div class="col">
          <header>
          <nav>
            <ul class= "myNavBar">
                <li class="libar"><a class="active" href="Home.php">Home</a></li>
                <li class="libar"><a class="abar" href="#footer">Contact</a></li>
                <li class="libar" style="float:right"><a class="abar" href="basket.php">Basket</a></li>
                <li class="libar" style="float:right"><a id="logState" class="abar" >connection</a></li>
            </ul>
          </nav>
        </header>
        </div>
    </div>

    <div class="panel panel-danger" id="about">
        <div class="panel-heading" id="aheading">
          <h3 class="panel-title" id="ptitle">About</h3>
        </div>
        <div class="panel-body" id="pbody">
        Our company truely beleives that the costumer should always be satisfied. That's why we aim to always give you the best customer service and material possible so you can create your best wok.
        </div>
    </div>

    <div class="row" id="ctypes">
      <div class="col-12 col-sm-4 col-lg-4 thumbdiv">
          <div class="thumbnail">
              <img src="pro/canon1dc.png">
              <div class="caption">
                <li class="linav"><a class="anav" href="pro.php">Professional</a></li>
              </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-4 thumbdiv">
          <div class="thumbnail">
              <img src="spro/canon5dmarkiii.png">
              <div class="caption">
                <li class="linav"><a class="anav" href="semi.php">Semi-Professional</a></li>
              </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-lg-4 thumbdiv">
          <div class="thumbnail">
              <img src="ama/canon7d.png">
              <div class="caption">
                <li class="linav"><a class="anav" href="ama.php">Amateur</a></li>
              </div>
          </div>
        </div>
    </div>


    <div class="row" id="footer">
      <div class="footer">
        <ul class="ul2">
          <p class = "ul2mainp">Contact</p>
          <p class="ul2ps">Owner: Laurent - 819XXXXXXX</p>
          <p class="ul2ps">Owner: Mathieu - 613XXXXXXX</p>
          <p class="ul2ps">Store: 800 King Edward Avenue.</p>
        </ul>
      </div>
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

 <script>

  

$(document).ready(function(){
  $("#logState").click(function(){
    //logmail= $_POST['mail'];
      
    $.ajax({
     type: "post",
     url: "logstate.php",
     success: function(html){    
      // if(html=='Success'){ 
           window.location="connection.php";
           //} 
       //alert(html);
       },
           
    });
  return false;
  });
  });
 
document.getElementById("logState").innerHTML = "<?php 




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
        Select logstate FROM DataBase.account
        WHERE mailaccount='$logmail';
EOF;

  $ret = pg_query ( $db, $sql );

  $row = pg_fetch_row($ret);
    if ($row[0]==true) {echo "logout";}
    else {echo "login";}
    
  




; ?>";

</script>
