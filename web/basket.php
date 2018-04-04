<!DOCTYPE html>
<html>
  <head>

    <title>Shopping Cart</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <link rel="stylesheet" href="basketstylesheet.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Shopping Bag
      </div>


    

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



function view($db){

	$sql =<<<EOF
	Select  idcamera, price FROM DataBase.camera WHERE rented=1 ;
EOF;

	$ret = pg_query($db, $sql);
	
	while($row = pg_fetch_row($ret)){
	
	//	echo  $row[0];
		//echo $row[1];
		
		
		
		
		
		echo '<div class="item">';
		
		
		echo '<div class="image">';
		echo '<img src="allcameras/',$row[0],'.png"alt="" width="155" height="120"/>';
		echo '</div>';
		
		echo '<div class="description">';
		echo '<span>',$row[0],'</span>';
		echo '</div>';
		
		
		
		echo '<div class="quantity">
		<button class="plus-btn" type="button" name="button">
		<img src="plus.svg" alt="" />
		</button>
		<input type="text" name="name" value="1">
		<button class="minus-btn" type="button" name="button">
		<img src="minus.svg" alt="" />
		</button>
		</div>';
		
		
		echo '<div class="total-price">$',$row[1],'</div>';
		echo'</div>
		<br>
		<hr>';
		
		
		
		

	}	
	
}

view($db);
pg_close($db);


?>





     
    </div>

<button id="buy" class="buy" >buy now</button>


<script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});

  



    	$(document).ready(function(){
    		  $("#buy").click(function(){    				  
    		    $.ajax({
    		     type: "post",
    		     url: "purchaseItems.php",
    		     success: function(html){    
    		         window.location="Home.php";
    	   			 alert(" Thank you for your purchase!  We sent you an e-mail of confirmation and more details."); 
    		    	 },
    		    	     
    		    });
    		  return false;
    		  });
    		  });	 

</script>

  </body>
</html>


