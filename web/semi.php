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
  							<li class="libar" style="float:right"><a class="abar" href="Basket.html">Basket</a></li>
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
  					<li class="linav"><a class="anavc" href="semi.php">Semi-Professional</a></li>
  					<li class="linav"><a class="anav" href="ama.php">Amateur</a></li>
				</ul>
  	</div>
  	<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="spro/canon5dmarkiii.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'canon5dmarkiii';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Canon 5D Mark III");
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
                  <a id="onecl" class="btn btn-default" role="button" onclick="semilikeone(); location.href=location.href;">Like</a> 
                  <a id="onecd" class="btn btn-danger" role="button" onclick="semidislikeone(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="semirentone()">Rent</a>
                </p>
      				</div>
    			</div>
  	</div>
  	<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="spro/lumixgx8.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgx8';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Lumix GX8");
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
                  <a id="twocl" class="btn btn-default" role="button" onclick="semiliketwo(); location.href=location.href;">Like</a> 
                  <a id="twocd" class="btn btn-danger" role="button" onclick="semidisliketwo(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="semirenttwo()">Rent</a>
                </p>
      				</div>
    	    </div>
  	</div>
  	<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="spro/canond750.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'canond750';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Canon D750");
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
                  <a id="threecl" class="btn btn-default" role="button" onclick="semilikethree(); location.href=location.href;">Like</a>
                  <a id="threecd" class="btn btn-danger" role="button" onclick="semidislikethree(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="semirentthree()">Rent</a>
                </p>
      				</div>
    			</div>
  	</div>
		</div>

		<div class="row">
			  			<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="spro/nikond850.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'nikond850';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Nikon D850");
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
                  <a id="fourcl" class="btn btn-default" role="button" onclick="semilikefour(); location.href=location.href;">Like</a> 
                  <a id="fourcd" class="btn btn-danger" role="button" onclick="semidislikefour(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="semirentfour()">Rent</a>
                </p>
      				</div>
    			</div>
  			</div>
  			  			<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="spro/nikondf.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'nikondf';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Nikon DF");
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
                  <a id="fivecl" class="btn btn-default" role="button" onclick="semilikefive(); location.href=location.href;">Like</a> 
                  <a id="fivecd" class="btn btn-danger" role="button" onclick="semidislikefive(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="semirentfive()">Rent</a>
                </p>
      				</div>
    			</div>
  			</div>
  			  			<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="spro/sonyalpha68.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'sonyalpha68';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Sony Alpha 68");
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
                  <a id="sixcl" class="btn btn-default" role="button" onclick="semilikesix(); location.href=location.href;">Like</a>
                  <a id="sixcd" class="btn btn-danger" role="button" onclick="semidislikesix(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="semirentsix()">Rent</a>
                </p>
      				</div>
    			</div>
  			</div>
  			  			<div class="col-12 col-sm-6 col-lg-3 thumbdiv">
  				<div class="thumbnail">
      				<img src="spro/sonyalpha77.png">
      				<div class="caption">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'sonyalpha77';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Sony Alpha 77");
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
                  <a id="sevencl" class="btn btn-default" role="button" onclick="semilikeseven(); location.href=location.href;">Like</a> 
                  <a id="sevencd" class="btn btn-danger" role="button" onclick="semidislikeseven(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="semirentseven()">Rent</a>
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

  <script src="semi.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>