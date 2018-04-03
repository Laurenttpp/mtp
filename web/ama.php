<?php
  include 'savesettings.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cameras</title>
	<link rel="stylesheet" href="camstylesheet.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body class="cbody">
		<div class="row" id="myhead">
  			<div class="col">
  				<header>
					<nav>
						<ul class= "myNavBar">
  							<li class="libar"><a class="abar" href="Home.html">Home</a></li>
  							<li class="libar"><a class="abar" href="#footer">About</a></li>
  							<li class="libar" style="float:right"><a class="abar" href="Basket.php">Basket</a></li>
  							<li class="libar" style="float:right"><a class="abar" href="connection.php">Login</a></li>
						</ul>
					</nav>
				</header>
  			</div>
		</div>


		<div class="row" id="middle">
  			<div class="col-12 col-sm-6 col-lg-3">
  				<ul class="ulnav">
  					<li class="linav"><a class="anav" href="pro.php">Professional</a></li>
  					<li class="linav"><a class="anav" href="semi.php">Semi-Professional</a></li>
  					<li class="linav"><a class="anavc" href="ama.php">Amateur</a></li>
				</ul>
  	</div>
  	<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="ama/canon7d.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'canond7d';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Canon 7D");
      echo("</h3>");

      echo("<p>");
      echo("Likes ");
      echo("<span class = 'badge'>");
      echo $row[1];
      echo("</span>");
      echo("  Dislikes ");
      echo("<span class = 'badge'>");
      echo $row[2];
      echo("</span>");
      echo("</p>");


                ?>
        				<p>
        					<a id="onecl" class="btn btn-default" role="button" onclick="amalikeone(); location.href=location.href;">Like</a> 
                  <a id="onecd" class="btn btn-danger" role="button" onclick="amadislikeone(); location.href=location.href;">Dislike</a>
        					<a class="btn btn-warning" role="button" onclick="amarentone()">Rent</a>
                  <span id="popupg" class="popup" onclick="myFunctiong()">Info!
                    <span class="popuptext" id="myPopupg">20.2MP APS-C CMOS Sensor. Dual DIGIC 6 Image Processors. 3.0" 1.04m-Dot Clear View II LCD Monitor. Full HD 1080p/60 Video And Movie Servo AF</span>
                  </span>
        				</p>
      				</div>
    			</div>
  	</div>
  	<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="ama/canon60d.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'canon60d';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Canon 60D");
      echo("</h3>");

      echo("<p>");
      echo("Likes ");
      echo("<span class = 'badge'>");
      echo $row[1];
      echo("</span>");
      echo("  Dislikes ");
      echo("<span class = 'badge'>");
      echo $row[2];
      echo("</span>");
      echo("</p>");


                ?>
        				<p>
        					<a id="twocl" class="btn btn-default" role="button" onclick="amaliketwo(); location.href=location.href;">Like</a> 
                  <a id="twocd" class="btn btn-danger" role="button" onclick="amadisliketwo(); location.href=location.href;">Dislike</a>
        					<a class="btn btn-warning" role="button" onclick="amarenttwo()">Rent</a>
                  <span id="popuph" class="popup" onclick="myFunctionh()">Info!
                    <span class="popuptext" id="myPopuph">24.2MP APS-C CMOS Sensor. DIGIC 6 Image Processor. 3.0" 1.04m-Dot Vari-Angle Touchscreen.</span>
                  </span>
        				</p>
      				</div>
    	    </div>
  	</div>
  	<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="ama/canon100d.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'canon100d';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Canon 100D");
      echo("</h3>");

      echo("<p>");
      echo("Likes ");
      echo("<span class = 'badge'>");
      echo $row[1];
      echo("</span>");
      echo("  Dislikes ");
      echo("<span class = 'badge'>");
      echo $row[2];
      echo("</span>");
      echo("</p>");


                ?>
        				<p>
        					<a id="threecl" class="btn btn-default" role="button" onclick="amalikethree(); location.href=location.href;">Like</a>
                  <a id="threecd" class="btn btn-danger" role="button" onclick="amadislikethree(); location.href=location.href;">Dislike</a>
        					<a class="btn btn-warning" role="button" onclick="amarentthree()">Rent</a>
                  <span id="popupj" class="popup" onclick="myFunctionj()">Info!
                    <span class="popuptext" id="myPopupj">18 MP APS-C CMOS Sensor. DIGIC 5 Image Processor. 3.0" 1.04m-Dot Clear View II Touchscreen. Full HD 1080p Video Recording at 30 fps</span>
                  </span>
        				</p>
      				</div>
    			</div>
  	</div>
		</div>

		<div class="row">
			  			<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="ama/canon1300d.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'canon1300d';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Canon 1300D");
      echo("</h3>");

      echo("<p>");
      echo("Likes ");
      echo("<span class = 'badge'>");
      echo $row[1];
      echo("</span>");
      echo("  Dislikes ");
      echo("<span class = 'badge'>");
      echo $row[2];
      echo("</span>");
      echo("</p>");


                ?>
        				<p>
        					<a id="fourcl" class="btn btn-default" role="button" onclick="amalikefour(); location.href=location.href;">Like</a> 
                  <a id="fourcd" class="btn btn-danger" role="button" onclick="amadislikefour(); location.href=location.href;">Dislike</a>
        					<a class="btn btn-warning" role="button"onclick="amarentfour()">Rent</a>
                  <span id="popupk" class="popup" onclick="myFunctionk()">Info!
                    <span class="popuptext" id="myPopupk">18 MP APS-C CMOS Sensor. DIGIC 4+ Image Processor. 3.0" 920k-Dot LCD Monitor. Full HD 1080p Video Recording at 30 fps</span>
                  </span>
        				</p>
      				</div>
    			</div>
  			</div>
  			  			<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="ama/nikond500.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'nikond500';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Nikon D500");
      echo("</h3>");

      echo("<p>");
      echo("Likes ");
      echo("<span class = 'badge'>");
      echo $row[1];
      echo("</span>");
      echo("  Dislikes ");
      echo("<span class = 'badge'>");
      echo $row[2];
      echo("</span>");
      echo("</p>");


                ?>
        				<p>
        					<a id="fivecl" class="btn btn-default" role="button" onclick="amalikefive(); location.href=location.href;">Like</a> 
                  <a id="fivecd" class="btn btn-danger" role="button" onclick="amadislikefive(); location.href=location.href;">Dislike</a>
        					<a class="btn btn-warning" role="button" onclick="amarentfive()">Rent</a>
                  <span id="popupl" class="popup" onclick="myFunctionl()">Info!
                    <span class="popuptext" id="myPopupl">20.9MP DX-Format CMOS Sensor. EXPEED 5 Image Processor. 3.2" 2,539k-Dot Tilting Touchscreen LCD. 4K UHD Video Recording at 30 fps</span>
                  </span>
        				</p>
      				</div>
    			</div>
  			</div>
  			  			<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="ama/nikond600.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'nikond600';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Nikon D600");
      echo("</h3>");

      echo("<p>");
      echo("Likes ");
      echo("<span class = 'badge'>");
      echo $row[1];
      echo("</span>");
      echo("  Dislikes ");
      echo("<span class = 'badge'>");
      echo $row[2];
      echo("</span>");
      echo("</p>");


                ?>
        				<p>
        					<a id="sixcl" class="btn btn-default" role="button" role="button" onclick="amalikesix(); location.href=location.href;">Like</a>
                  <a id="sixcd" class="btn btn-danger" role="button" onclick="amadislikesix(); location.href=location.href;">Dislike</a>
        					<a class="btn btn-warning" role="button" onclick="amarentsix()">Rent</a>
                  <span id="popupz" class="popup" onclick="myFunctionz()">Info!
                    <span class="popuptext" id="myPopupz">24.3MP FX-Format CMOS Sensor. EXPEED 3 Image Processor. 3.2" 921k-Dot LCD Monitor.</span>
                  </span>
        				</p>
      				</div>
    			</div>
  			</div>
  			  			<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="ama/nikond7500.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'nikond7500';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Nikon D7500");
      echo("</h3>");

      echo("<p>");
      echo("Likes ");
      echo("<span class = 'badge'>");
      echo $row[1];
      echo("</span>");
      echo("  Dislikes ");
      echo("<span class = 'badge'>");
      echo $row[2];
      echo("</span>");
      echo("</p>");


                ?>
        				<p>
        					<a id="sevencl" class="btn btn-default" role="button" onclick="amalikeseven(); location.href=location.href;">Like</a> 
                  <a id="sevencd" class="btn btn-danger" role="button" onclick="amadislikeseven(); location.href=location.href;">Dislike</a>
        					<a class="btn btn-warning" role="button" onclick="amarentseven()">Rent</a>
                  <span id="popupx" class="popup" onclick="myFunctionx()">Info!
                    <span class="popuptext" id="myPopupx">20.9MP DX-Format CMOS Sensor. EXPEED 5 Image Processor. 3.2" 922k-Dot Tilting Touchscreen LCD. 4K UHD Video Recording at 30 fps.</span>
                  </span>
        				</p>
      				</div>
    			</div>
  			</div>
		</div>


		<div class="row" id="footer">
			<div class="container">
				<ul class="ul1">
					<p class = "ul1mainp">About</p>
					<p class="ul1ps">Our Company Aims To Give You:</p>
					<p class="ul1ps">The Best Cameras.</p>
					<p class="ul1ps">The Best Service.</p>
				</ul>
				<ul class="ul2">
					<p class = "ul2mainp">Contact</p>
					<p class="ul2ps">Owner: Laurent - 819XXXXXXX</p>
					<p class="ul2ps">Owner: Mathieu - 613XXXXXXX</p>
					<p class="ul2ps">Store: 800 King Edward Avenue.</p>
				</ul>
			</div>
		</div>

    <script src="ama.js"></script>
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <!-- Latest compiled and minified JavaScript -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>