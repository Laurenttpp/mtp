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
                <li class="libar"><a class="abar" href="Home.php">Home</a></li>
                <li class="libar"><a class="abar" href="#footer">About</a></li>
                <li class="libar" style="float:right"><a class="abar" href="Basket.php">Basket</a></li>
                <li class="libar" style="float:right"><a id="logState" class="abar" >connection</a></li>
            </ul>
          </nav>
        </header>
        </div>
    </div>


    <div class="row" id="middle">
        <div class="col-12 col-sm-6 col-lg-3">
          <ul class="ulnav">
            <li class="linav"><a class="anavc" href="pro.php">Professional</a></li>
            <li class="linav"><a class="anav" href="semi.php">Semi-Professional</a></li>
            <li class="linav"><a class="anav" href="ama.php">Amateur</a></li>
        </ul>
    </div>



    <div class="col-12 col-sm-6 col-lg-3 thumbdiv" id="tryyy">
          <div class="thumbnail">
              <img src="pro/canon1dc.png">
              <div class="caption" id="canon1dc">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dc';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Canon 1 DC");
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
                  <a id="onecl" class="btn btn-default" role="button" onclick="prolikeone(); location.href=location.href;">Like</a> 
                  <a id="onecd" class="btn btn-danger" role="button" onclick="prodislikeone(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="prorentone()">Rent</a>
                  <span id="popupq" class="popup" onclick="myFunctionq()">Info!
                    <span class="popuptext" id="myPopupq">4K 4096x2160 8-Bit 4:2:2 Cinematic Video. Canon Log with 12 Stops of Dynamic Range. Continuous Recording, No 29:59 Min Limit. Full HD 1080p Recording at up to 60fps</span>
                  </span>
                </p>
              </div>
          </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3 thumbdiv">
          <div class="thumbnail">
              <img src="pro/sonya99ii.png">
              <div class="caption" id="sonya99ii">

                  <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'sonya99ii';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Sony Alpha 99ii");
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
                  <a id="twocl" class="btn btn-default" role="button" onclick="proliketwo(); location.href=location.href;">Like</a> 
                  <a id="twocd" class="btn btn-danger" role="button" onclick="prodisliketwo(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="prorenttwo()">Rent</a>
                  <span id="popupw" class="popup" onclick="myFunctionw()">Info!
                    <span class="popuptext" id="myPopupw">42MP Full-Frame Exmor R BSI CMOS Sensor. BIONZ X Image Processor and Front-End LSI. 0.5" 2.36M-Dot XGA OLED Tru-Finder EVF. Internal UHD 4K Video And S-Log3 Gamma</span>
                  </span>
                </p>
              </div>
          </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3 thumbdiv">
          <div class="thumbnail">
              <img src="pro/nikond4.png">
              <div class="caption" id="nikond4">
                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'nikond4';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Nikon D4");
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
                  <a id="pthreecl" class="btn btn-default" role="button" onclick="prolikethree(); location.href=location.href;">Like</a>
                  <a id="pthreecd" class="btn btn-danger" role="button" onclick="prodislikethree(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="prorentthree()">Rent</a>
                  <span id="popupe" class="popup" onclick="myFunctione()">Info!
                    <span class="popuptext" id="myPopupe">10/11 frames per second continuous shooting in FX-format for up to 150 frames. Nikon FX- format (35.9 x 24.0mm) CMOS Sensor with 16.2 effective megapixels.</span>
                  </span>
                </p>
              </div>
          </div>
    </div>
    </div>

    <div class="row">
              <div class="col-12 col-sm-6 col-lg-3 thumbdiv">
          <div class="thumbnail">
              <img src="pro/nikond5.png">
              <div class="caption" id="nikond5">

                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'nikond5';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Nikon D5");
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
                  <a id="pfourcl" class="btn btn-default" role="button" onclick="prolikefour(); location.href=location.href;">Like</a> 
                  <a id="pfourcd" class="btn btn-danger" role="button" onclick="prodislikefour(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="prorentfour()">Rent</a>
                  <span id="popupr" class="popup" onclick="myFunctionr()">Info!
                    <span class="popuptext" id="myPopupr">20.8MP FX-Format CMOS Sensor. EXPEED 5 Image Processor. 3.2" 2.36m-Dot Touchscreen LCD Monitor. 4K UHD Video Recording at 30 fps.</span>
                  </span>
                </p>
              </div>
          </div>
        </div>
                <div class="col-12 col-sm-6 col-lg-3 thumbdiv">
          <div class="thumbnail">
              <img src="pro/canon1dx.png">
              <div class="caption" id="canon1dx">

                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dx';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Canon 1D X");
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
                  <a id="pfivecl" class="btn btn-default" role="button" onclick="prolikefive(); location.href=location.href;">Like</a> 
                  <a id="pfivecd" class="btn btn-danger" role="button" onclick="prodislikefive(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="prorentfive()">Rent</a>
                  <span id="popupt" class="popup" onclick="myFunctiont()">Info!
                    <span class="popuptext" id="myPopupt">20.2MP Full-Frame CMOS Sensor. Dual DIGIC 6+ Image Processors. 3.2" 1.62m-Dot Touchscreen LCD Monitor. DCI 4K Video at 60 fps, 8.8MP Still Grab.</span>
                  </span>
                </p>
              </div>
          </div>
        </div>
                <div class="col-12 col-sm-6 col-lg-3 thumbdiv">
          <div class="thumbnail">
              <img src="pro/lumixgh5.png">
              <div class="caption" id="lumixgh5">

                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgh5';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Lumix GH5");
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
                  <a id="psixcl" class="btn btn-default" role="button" onclick="prolikesix(); location.href=location.href;">Like</a>
                  <a id="psixcd" class="btn btn-danger" role="button" onclick="prodislikesix(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="prorentsix()">Rent</a>
                  <span id="popupy" class="popup" onclick="myFunctiony()">Info!
                    <span class="popuptext" id="myPopupy">20.3MP Digital Live MOS Sensor. Venus Engine Image Processor. 4K Video with No Crop. Internal 4:2:2 10-Bit 4K Video at 24/30p.</span>
                  </span>
                </p>
              </div>
          </div>
        </div>
                <div class="col-12 col-sm-6 col-lg-3 thumbdiv">
          <div class="thumbnail">
              <img src="pro/olympusem1.png">
              <div class="caption" id="olympusem1">

                <?php

                $sql = <<<EOF
        SELECT * FROM DataBase.camera WHERE idcamera = 'olympusem1';

EOF;

      $ret = pg_query ( $db, $sql );
      $row = pg_fetch_row($ret);


      echo("<h3>");
      echo("Olympus EM-1");
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
                  <a id="psevencl" class="btn btn-default" role="button" onclick="prolikeseven(); location.href=location.href;">Like</a> 
                  <a id="psevencd" class="btn btn-danger" role="button" onclick="prodislikeseven(); location.href=location.href;">Dislike</a>
                  <a class="btn btn-warning" role="button" onclick="prorentseven()">Rent</a>
                  <span id="popupu" class="popup" onclick="myFunctionu()">Info!
                    <span class="popuptext" id="myPopupu">20.4MP Live MOS Sensor. TruePic VIII Dual Quad Core Processor. Micro Four Thirds System. Internal 2.36m-Dot LCD Electronic Viewfinder.</span>
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
  <script src="pro.js"></script>
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






 $logmail= $_SESSION['mail'];

  $sql = <<<EOF
        Select logstate FROM DataBase.account
        WHERE mailaccount='$logmail';
EOF;

  $ret = pg_query ( $db, $sql );

  $row = pg_fetch_row($ret);
    if ($row[0]==true) {echo "logout";}
    else {echo "login";}
  





 ?>";

</script>