<?php




session_start();

$host = "host=www.eecs.uottawa.ca";
$port = "port=15432";
$dbname = "dbname=-----";
$credentials = "user=------ password=-----";

$_SESSION["host"] = $host;
$_SESSION["port"] = $port;
$_SESSION["db"] = $dbname;
$_SESSION["credentials"] = $credentials;


$db = pg_connect ( "$host $port $dbname $credentials" );

function connectDB($host, $port, $dbname, $credentials) {

	$db = pg_connect ( "$host $port $dbname $credentials" );

}

connectDB ($host, $port, $dbname, $credentials);

                $sqlloged = <<<EOF
    		SELECT * FROM DataBase.account WHERE logState = 'true';

EOF;

			$re = pg_query ( $db, $sqlloged );
			$ro = pg_fetch_row($re);
			$alog = $ro[3];


//PROLIKEONE
		function prolikeone($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canon1dc';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedpo($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET canon1dc = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dc';

EOF;

			$ret = pg_query ( $db, $sql );
			$row = pg_fetch_row($ret);
			$a = $row[1];
			$canon1dcl = $ro[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikeone' && $alog == true && $canon1dcl != 1 ) {
					$a = $a + 1;
					$canon1dcl = 1;
					prolikeone($db,$a);
					likedpo($db,$canon1dcl);
				}
		}

//PRODISLIKEONE
		function prodislikeone($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'canon1dc';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql1 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dc';

EOF;

			$ret1 = pg_query ( $db, $sql1 );
			$row1 = pg_fetch_row($ret1);
			$a1 = $row1[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prodislikeone' && $alog == true && $canon1dcl != 1) {
					$a1 = $a1 + 1;
					$canon1dcl = 1;
					prodislikeone($db,$a1);
					likedpo($db,$canon1dcl);
				}
		}

//PROLIKETWO
		function proliketwo($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'sonya99ii';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedpt($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET sonya99ii = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql2 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonya99ii';

EOF;

			$ret2 = pg_query ( $db, $sql2 );
			$row2 = pg_fetch_row($ret2);
			$a2 = $row2[1];
			$sonya99iil = $ro[6];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'proliketwo' && $alog == true && $sonya99iil != 1) {
					$a2 = $a2 + 1;
					$sonya99iil = 1;
					proliketwo($db,$a2);
					likedpt($db, $sonya99iil);
				}
		}

//PRODISLIKETWO
		function prodisliketwo($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'sonya99ii';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql3 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonya99ii';

EOF;

			$ret3 = pg_query ( $db, $sql3 );
			$row3 = pg_fetch_row($ret3);
			$a3 = $row3[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prodisliketwo' && $alog == true && $sonya99iil != 1) {
					$a3 = $a3 + 1;
					$sonya99iil = 1;
					prodisliketwo($db,$a3);
					likedpt($db, $sonya99iil);
				}
		}

//PROLIKETHREE
		function prolikethree($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'nikond4';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedptr($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET nikond4 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql4 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond4';

EOF;

			$ret4 = pg_query ( $db, $sql4 );
			$row4 = pg_fetch_row($ret4);
			$a4 = $row4[1];
			$nikond4l = $ro[7];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikethree' && $alog == true && $nikond4l != 1) {
					$a4 = $a4 + 1;
					$nikond4l = 1;
					prolikethree($db,$a4);
					likedptr($db, $nikond4l);
				}
		}

//PRODISLIKETHREE
		function prodislikethree($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'nikond4';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql5 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond4';

EOF;

			$ret5 = pg_query ( $db, $sql5 );
			$row5 = pg_fetch_row($ret5);
			$a5 = $row5[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prodislikethree' && $alog == true && $nikond4l != 1) {
					$a5 = $a5 + 1;
					$nikond4l = 1;
					prodislikethree($db,$a5);
					likedptr($db, $nikond4l);
				}
		}


//PROLIKEFOUR
		function prolikefour($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'nikond5';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedpf($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET nikond5 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql6 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond5';

EOF;

			$ret6 = pg_query ( $db, $sql6 );
			$row6 = pg_fetch_row($ret6);
			$a6 = $row6[1];
			$nikond5l = $ro[8];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikefour' && $alog == true && $nikond5l != 1) {
					$a6 = $a6 + 1;
					$nikond5l = 1;
					prolikefour($db,$a6);
					likedpf($db, $nikond5l);
				}
		}

//PRODISLIKEFOUR
		function prodislikefour($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'nikond5';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql7 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond5';

EOF;

			$ret7 = pg_query ( $db, $sql7 );
			$row7 = pg_fetch_row($ret7);
			$a7 = $row7[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prodislikefour' && $alog == true && $nikond5l != 1) {
					$a7 = $a7 + 1;
					$nikond5l = 1;
					prodislikefour($db,$a7);
					likedpf($db, $nikond5l);
				}
		}

//PROLIKEFIVE
		function prolikefive($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canon1dx';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedpfi($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET canon1dx = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql8 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dx';

EOF;

			$ret8 = pg_query ( $db, $sql8 );
			$row8 = pg_fetch_row($ret8);
			$a8 = $row8[1];
			$canon1dxl = $ro[9];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikefive' && $alog == true && $canon1dxl != 1) {
					$a8 = $a8 + 1;
					$canon1dxl = 1;
					prolikefive($db,$a8);
					likedpfi($db, $canon1dxl);
				}
		}

//PRODISLIKEFIVE
		function prodislikefive($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'canon1dx';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sql9 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dx';

EOF;

			$ret9 = pg_query ( $db, $sql9 );
			$row9 = pg_fetch_row($ret9);
			$a9 = $row9[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prodislikefive' && $alog == true && $canon1dxl != 1) {
					$a9 = $a9 + 1;
					$canon1dxl = 1;
					prodislikefive($db,$a9);
					likedpfi($db, $canon1dxl);
				}
		}

//PROLIKESIX
		function prolikesix($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'lumixgh5';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedps($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET lumixgh5 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlq = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgh5';

EOF;

			$retq = pg_query ( $db, $sqlq );
			$rowq = pg_fetch_row($retq);
			$aq = $rowq[1];
			$lumixgh5l = $ro[10];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikesix' && $alog == true && $lumixgh5l != 1) {
					$aq = $aq + 1;
					$lumixgh5l = 1;
					prolikesix($db,$aq);
					likedps($db, $lumixgh5l);
				}
		}

//PRODISLIKESIX
		function prodislikesix($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'lumixgh5';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlw = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgh5';

EOF;

			$retw = pg_query ( $db, $sqlw );
			$roww = pg_fetch_row($retw);
			$aw = $roww[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prodislikesix' && $alog == true && $lumixgh5l != 1) {
					$aw = $aw + 1;
					$lumixgh5l = 1;
					prodislikesix($db,$aw);
					likedps($db, $lumixgh5l);
				}
		}



//PROLIKESEVEN
		function prolikeseven($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'olympusem1';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedpse($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET olympusem1 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqle = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'olympusem1';

EOF;

			$rete = pg_query ( $db, $sqle );
			$rowe = pg_fetch_row($rete);
			$ae = $rowe[1];
			$olympusem1l = $ro[11];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikeseven' && $alog == true && $olympusem1l != 1) {
					$ae = $ae + 1;
					$olympusem1l = 1;
					prolikeseven($db,$ae);
					likedpse($db, $olympusem1l);
				}
		}

//PRODISLIKESEVEN
		function prodislikeseven($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'olympusem1';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlr = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'olympusem1';

EOF;

			$retr = pg_query ( $db, $sqlr );
			$rowr = pg_fetch_row($retr);
			$ar = $rowr[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prodislikeseven' && $alog == true && $olympusem1l != 1) {
					$ar = $ar + 1;
					$olympusem1l = 1;
					prodislikeseven($db,$ar);
					likedpse($db, $olympusem1l);
				}
		}

//SEMILIKEONE
		function semilikeone($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canon5dmarkiii';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedso($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET canon5dmarkiii = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlt = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon5dmarkiii';

EOF;

			$rett = pg_query ( $db, $sqlt );
			$rowt = pg_fetch_row($rett);
			$at = $rowt[1];
			$canon5dmarkiiil = $ro[12];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semilikeone' && $alog == true && $canon5dmarkiiil != 1) {
					$at = $at + 1;
					$canon5dmarkiiil = 1;
					semilikeone($db,$at);
					likedso($db, $canon5dmarkiiil);
				}
		}

//SEMIDISLIKESONE
		function semidislikeone($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'canon5dmarkiii';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqly = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon5dmarkiii';

EOF;

			$rety = pg_query ( $db, $sqly );
			$rowy = pg_fetch_row($rety);
			$ay = $rowy[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semidislikeone' && $alog == true && $canon5dmarkiiil != 1) {
					$ay = $ay + 1;
					$canon5dmarkiiil = 1;
					semidislikeone($db,$ay);
					likedso($db, $canon5dmarkiiil);
				}
		}



//SEMILIKETWO
		function semiliketwo($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'lumixgx8';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedst($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET lumixgx8 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlu = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgx8';

EOF;

			$retu = pg_query ( $db, $sqlu );
			$rowu = pg_fetch_row($retu);
			$au = $rowu[1];
			$lumixgx8l = $ro[13];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semiliketwo' && $alog == true && $lumixgx8l != 1) {
					$au = $au + 1;
					$lumixgx8l = 1;
					semiliketwo($db,$au);
					likedst($db, $lumixgx8l);
				}
		}

//SEMIDISLIKESTWO
		function semidisliketwo($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'lumixgx8';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqli = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgx8';

EOF;

			$reti = pg_query ( $db, $sqli );
			$rowi = pg_fetch_row($reti);
			$ai = $rowi[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semidisliketwo' && $alog == true && $lumixgx8l != 1) {
					$ai = $ai + 1;
					$lumixgx8l = 1;
					semidisliketwo($db,$ai);
					likedst($db, $lumixgx8l);
				}
		}




//SEMILIKETHREE
		function semilikethree($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canond750';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedstr($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET canond750 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlo = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canond750';

EOF;

			$reto = pg_query ( $db, $sqlo );
			$rowo = pg_fetch_row($reto);
			$ao = $rowo[1];
			$canond750l = $ro[14];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semilikethree' && $alog == true && $canond750l != 1) {
					$ao = $ao + 1;
					$canond750l = 1;
					semilikethree($db,$ao);
					likedstr($db, $canond750l);
				}
		}

//SEMIDISLIKESTHREE
		function semidislikethree($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'canond750';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlp = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canond750';

EOF;

			$retp = pg_query ( $db, $sqlp );
			$rowp = pg_fetch_row($retp);
			$ap = $rowp[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semidislikethree' && $alog == true && $canond750l != 1) {
					$ap = $ap + 1;
					$canond750l = 1;
					semidislikethree($db,$ap);
					likedstr($db, $canond750l);
				}
		}

//SEMILIKEFOUR
		function semilikefour($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'nikond850';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedsf($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET nikond850 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqla = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond850';

EOF;

			$reta = pg_query ( $db, $sqla );
			$rowa = pg_fetch_row($reta);
			$aa = $rowa[1];
			$nikond850l = $ro[15];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semilikefour' && $alog == true && $nikond850l != 1) {
					$aa = $aa + 1;
					$nikond850l = 1;
					semilikefour($db,$aa);
					likedsf($db, $nikond850l);
				}
		}

//SEMIDISLIKESFOUR
		function semidislikefour($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'nikond850';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqls = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond850';

EOF;

			$rets = pg_query ( $db, $sqls );
			$rows = pg_fetch_row($rets);
			$as = $rows[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semidislikefour' && $alog == true && $nikond850l != 1) {
					$as = $as + 1;
					$nikond850l = 1;
					semidislikefour($db,$as);
					likedsf($db, $nikond850l);
				}
		}

//SEMILIKEFIVE
		function semilikefive($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'nikondf';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedsfi($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET nikondf = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqld = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikondf';

EOF;

			$retd = pg_query ( $db, $sqld );
			$rowd = pg_fetch_row($retd);
			$ad = $rowd[1];
			$nikondfl = $ro[16];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semilikefive' && $alog == true && $nikondfl != 1) {
					$ad = $ad + 1;
					$nikondfl = 1;
					semilikefive($db,$ad);
					likedsfi($db, $nikondfl);
				}
		}

//SEMIDISLIKESFIVE
		function semidislikefive($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'nikondf';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlf = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikondf';

EOF;

			$retf = pg_query ( $db, $sqlf );
			$rowf = pg_fetch_row($retf);
			$af = $rowf[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semidislikefive' && $alog == true && $nikondfl != 1) {
					$af = $af + 1;
					$nikondfl = 1;
					semidislikefive($db,$af);
					likedsfi($db, $nikondfl);
				}
		}



//SEMILIKESIX
		function semilikesix($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'sonyalpha68';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedss($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET sonyalpha68 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlg = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonyalpha68';

EOF;

			$retg = pg_query ( $db, $sqlg );
			$rowg = pg_fetch_row($retg);
			$ag = $rowg[1];
			$sonyalpha68 = $ro[17];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semilikesix' && $alog == true && $sonyalpha68 != 1) {
					$ag = $ag + 1;
					$sonyalpha68 = 1;
					semilikesix($db,$ag);
					likedss($db, $sonyalpha68);
				}
		}

//SEMIDISLIKESIX
		function semidislikesix($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'sonyalpha68';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlh = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonyalpha68';

EOF;

			$reth = pg_query ( $db, $sqlh );
			$rowh = pg_fetch_row($reth);
			$ah = $rowh[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semidislikesix' && $alog == true && $sonyalpha68 != 1) {
					$ah = $ah + 1;
					$sonyalpha68 = 1;		
					semidislikesix($db,$ah);
					likedss($db, $sonyalpha68);
				}
		}


//SEMILIKESEVEN
		function semilikeseven($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'sonyalpha77';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedsse($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET sonyalpha77 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlj = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonyalpha77';

EOF;

			$retj = pg_query ( $db, $sqlj );
			$rowj = pg_fetch_row($retj);
			$aj = $rowj[1];
			$sonyalpha77 = $ro[18];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semilikeseven' && $alog == true && $sonyalpha77 != 1) {
					$aj = $aj + 1;
					$sonyalpha77 = 1;
					semilikeseven($db,$aj);
					likedsse($db, $sonyalpha77);
				}
		}

//SEMIDISLIKESEVEN
		function semidislikeseven($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'sonyalpha77';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlk = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonyalpha77';

EOF;

			$retk = pg_query ( $db, $sqlk );
			$rowk = pg_fetch_row($retk);
			$ak = $rowk[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semidislikeseven' && $alog == true && $sonyalpha77 != 1) {
					$ak = $ak + 1;
					$sonyalpha77 = 1;
					semidislikeseven($db,$ak);
					likedsse($db, $sonyalpha77);
				}
		}

//AMALIKEONE
		function amalikeone($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canond7d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedao($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET canond7d = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqll = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canond7d';

EOF;

			$retl = pg_query ( $db, $sqll );
			$rowl = pg_fetch_row($retl);
			$al = $rowl[1];
			$canond7d = $ro[19];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amalikeone' && $alog == true && $canond7d != 1) {
					$al = $al + 1;
					$canond7d = 1;
					amalikeone($db,$al);
					likedao($db, $canond7d);
				}
		}

//AMADISLIKEONE
		function amadislikeone($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'canond7d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlz = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canond7d';

EOF;

			$retz = pg_query ( $db, $sqlz );
			$rowz = pg_fetch_row($retz);
			$az = $rowz[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amadislikeone' && $alog == true && $canond7d != 1) {
					$az = $az + 1;
					$canond7d = 1;
					amadislikeone($db,$az);
					likedao($db, $canond7d);
				}
		}

//AMALIKETWO
		function amaliketwo($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canon60d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedat($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET canon60d = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlx = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon60d';

EOF;

			$retx = pg_query ( $db, $sqlx );
			$rowx = pg_fetch_row($retx);
			$ax = $rowx[1];
			$canon60d = $ro[20];

			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amaliketwo' && $alog == true && $canon60d != 1) {
					$ax = $ax + 1;
					$canon60d = 1;
					amaliketwo($db,$ax);
					likedat($db, $canon60d);
				}
		}

//AMADISLIKETWO
		function amadisliketwo($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'canon60d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlc = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon60d';

EOF;

			$retc = pg_query ( $db, $sqlc );
			$rowc = pg_fetch_row($retc);
			$ac = $rowc[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amadisliketwo' && $alog == true && $canon60d != 1) {
					$ac = $ac + 1;
					$canon60d = 1;
					amadisliketwo($db,$ac);
					likedat($db, $canon60d);
				}
		}

//AMALIKETHREE
		function amalikethree($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canon100d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedatr($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET canon100d = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlv = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon100d';

EOF;

			$retv = pg_query ( $db, $sqlv );
			$rowv = pg_fetch_row($retv);
			$av = $rowv[1];
			$canon100d = $ro[21];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amalikethree' && $alog == true && $canon100d != 1) {
					$av = $av + 1;
					$canon100d = 1;
					amalikethree($db,$av);
					likedatr($db, $canon100d);
				}
		}

//AMADISLIKETHREE
		function amadislikethree($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'canon100d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlb = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon100d';

EOF;

			$retb = pg_query ( $db, $sqlb );
			$rowb = pg_fetch_row($retb);
			$ab = $rowb[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amadislikethree' && $alog == true && $canon100d != 1) {
					$ab = $ab + 1;
					$canon100d = 1;
					amadislikethree($db,$ab);
					likedatr($db, $canon100d);
				}
		}


//AMALIKEFOUR
		function amalikefour($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'canon1300d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedaf($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET canon1300d = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1300d';

EOF;

			$retn = pg_query ( $db, $sqln );
			$rown = pg_fetch_row($retn);
			$an = $rown[1];
			$canon1300d = $ro[22];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amalikefour' && $alog == true && $canon1300d != 1) {
					$an = $an + 1;
					$canon1300d = 1;
					amalikefour($db,$an);
					likedaf($db, $canon1300d);
				}
		}

//AMADISLIKEFOUR
		function amadislikefour($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'canon1300d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlm = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1300d';

EOF;

			$retm = pg_query ( $db, $sqlm );
			$rowm = pg_fetch_row($retm);
			$am = $rowm[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amadislikefour' && $alog == true && $canon1300d != 1) {
					$am = $am + 1;
					$canon1300d = 1;
					amadislikefour($db,$am);
					likedaf($db, $canon1300d);
				}
		}

//AMALIKEFIVE
		function amalikefive($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'nikond500';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedafi($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET nikond500 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln1 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond500';

EOF;

			$retn1 = pg_query ( $db, $sqln1 );
			$rown1 = pg_fetch_row($retn1);
			$an1 = $rown1[1];
			$nikond500 = $ro[23];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amalikefive' && $alog == true && $nikond500 != 1) {
					$an1 = $an1 + 1;
					$nikond500 = 1;
					amalikefive($db,$an1);
					likedafi($db, $nikond500);
				}
		}

//AMADISLIKEFIVE
		function amadislikefive($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'nikond500';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlm1 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond500';

EOF;

			$retm1 = pg_query ( $db, $sqlm1 );
			$rowm1 = pg_fetch_row($retm1);
			$am1 = $rowm1[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amadislikefive' && $alog == true && $nikond500 != 1) {
					$am1 = $am1 + 1;
					$nikond500 = 1;
					amadislikefive($db,$am1);
					likedafi($db, $nikond500);
				}
		}

//AMALIKESIX
		function amalikesix($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'nikond600';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedas($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET nikond600 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln2 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond600';

EOF;

			$retn2 = pg_query ( $db, $sqln2 );
			$rown2 = pg_fetch_row($retn2);
			$an2 = $rown2[1];
			$nikond600 = $ro[24];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amalikesix' && $alog == true && $nikond600 != 1) {
					$an2 = $an2 + 1;
					$nikond600 = 1;
					amalikesix($db,$an2);
					likedas($db, $nikond600);
				}
		}

//AMADISLIKESIX
		function amadislikesix($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'nikond600';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlm2 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond600';

EOF;

			$retm2 = pg_query ( $db, $sqlm2 );
			$rowm2 = pg_fetch_row($retm2);
			$am2 = $rowm2[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amadislikesix' && $alog == true && $nikond600 != 1) {
					$am2 = $am2 + 1;
					$nikond600 = 1;
					amadislikesix($db,$am2);
					likedas($db, $nikond600);
				}
		}


//AMALIKESEVEN
		function amalikeseven($db, $likes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET likes = '$likes' WHERE idcamera = 'nikond7500';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}

		function likedase($db, $cam) {
				$sql = <<<EOF
		UPDATE DataBase.account SET nikond7500 = '$cam' WHERE logState = 'true';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln3 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond7500';

EOF;

			$retn3 = pg_query ( $db, $sqln3 );
			$rown3 = pg_fetch_row($retn3);
			$an3 = $rown3[1];
			$nikond7500 = $ro[25];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amalikeseven' && $alog == true && $nikond7500 != 1) {
					$an3 = $an3 + 1;
					$nikond7500 = 1;
					amalikeseven($db,$an3);
					likedase($db, $nikond7500);
				}
		}

//AMADISLIKESEVEN
		function amadislikeseven($db, $dislikes) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET dislike = '$dislikes' WHERE idcamera = 'nikond7500';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqlm3 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond7500';

EOF;

			$retm3 = pg_query ( $db, $sqlm3 );
			$rowm3 = pg_fetch_row($retm3);
			$am3 = $rowm3[2];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amadislikeseven' && $alog == true && $nikond7500 != 1) {
					$am3 = $am3 + 1;
					$nikond7500 = 1;
					amadislikeseven($db,$am3);
					likedase($db, $nikond7500);
				}
		}

//PRORENTONE
		function prorentone($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'canon1dc';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln4 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dc';

EOF;

			$retn4 = pg_query ( $db, $sqln4 );
			$rown4 = pg_fetch_row($retn4);
			$an4 = $rown4[3];
			$r0 = $rown4[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prorentone' && $an4 == 0 && $r0 > 0) {
					$an4 = 1;
					$r0 = $r0 - 1;
					prorentone($db,$an4,$r0);
				}
		}

//PRORENTTWO
		function prorenttwo($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'sonya99ii';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln5 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonya99ii';

EOF;

			$retn5 = pg_query ( $db, $sqln5 );
			$rown5 = pg_fetch_row($retn5);
			$an5 = $rown5[3];
			$r1 = $rown5[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prorenttwo' && $an5 == 0 && $r1 > 0) {
					$an5 = 1;
					$r1 = $r1 - 1;
					prorenttwo($db,$an5,$r1);
				}
		}

//PRORENTTHREE
		function prorentthree($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'nikond4';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln6 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond4';

EOF;

			$retn6 = pg_query ( $db, $sqln6 );
			$rown6 = pg_fetch_row($retn6);
			$an6 = $rown6[3];
			$r2 = $rown6[5];

			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prorentthree' && $an6 == 0 && $r2 > 0) {
					$an6 = 1;
					$r2 = $r2 - 1;
					prorentthree($db,$an6,$r2);
				}
		}

//PRORENTFOUR
		function prorentfour($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'nikond5';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln7 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond5';

EOF;

			$retn7 = pg_query ( $db, $sqln7 );
			$rown7 = pg_fetch_row($retn7);
			$an7 = $rown7[3];
			$r3 = $rown7[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prorentfour' && $an7 == 0 && $r3 > 0) {
					$an7 = 1;
					$r3 = $r3 - 1;

					prorentfour($db,$an7,$r3);
				}
		}

//PRORENTFIVE
		function prorentfive($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'canon1dx';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln8 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dx';

EOF;

			$retn8 = pg_query ( $db, $sqln8 );
			$rown8 = pg_fetch_row($retn8);
			$an8 = $rown8[3];
			$r4 = $rown8[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prorentfive' && $an8 == 0 && $r4 > 0) {
					$an8 = 1;
					$r4 = $r4 - 1;

					prorentfive($db,$an8,$r4);
				}
		}

//PRORENTSIX
		function prorentsix($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'lumixgh5';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln9 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgh5';

EOF;

			$retn9 = pg_query ( $db, $sqln9 );
			$rown9 = pg_fetch_row($retn9);
			$an9 = $rown9[3];
			$r5 = $rown9[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prorentsix' && $an9 == 0 && $r5 > 0) {
					$an9 = 1;
					$r5 = $r5 - 1;

					prorentsix($db,$an9,$r5);
				}
		}

//PRORENTSEVEN
		function prorentseven($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'olympusem1';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln0 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'olympusem1';

EOF;

			$retn0 = pg_query ( $db, $sqln0 );
			$rown0 = pg_fetch_row($retn0);
			$an0 = $rown0[3];
			$r6 = $rown0[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prorentseven' && $an0 == 0 && $r6 > 0) {
					$an0 = 1;
					$r6 = $r6 - 1;

					prorentseven($db,$an0,$r6);
				}
		}

//SEMIRENTONE
		function semirentone($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'canon5dmarkiii';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln01 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon5dmarkiii';

EOF;

			$retn01 = pg_query ( $db, $sqln01 );
			$rown01 = pg_fetch_row($retn01);
			$an01 = $rown01[3];
			$r7 = $rown01[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semirentone' && $an01 == 0 && $r7 > 0) {
					$an01 = 1;
					$r7 = $r7 - 1;

					semirentone($db,$an01,$r7);
				}
		}

//SEMIRENTTWO
		function semirenttwo($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'lumixgx8';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln02 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgx8';

EOF;

			$retn02 = pg_query ( $db, $sqln02 );
			$rown02 = pg_fetch_row($retn02);
			$an02 = $rown02[3];
			$r8 = $rown02[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semirenttwo' && $an02 == 0 && $r8 > 0) {
					$an02 = 1;
					$r8 = $r8 - 1;

					semirenttwo($db,$an02,$r8);
				}
		}

//SEMIRENTTHREE
		function semirentthree($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'canond750';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln03 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canond750';

EOF;

			$retn03 = pg_query ( $db, $sqln03 );
			$rown03 = pg_fetch_row($retn03);
			$an03 = $rown03[3];
			$r9 = $rown03[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semirentthree' && $an03 == 0 && $r9 > 0) {
					$an03 = 1;
					$r9 = $r9 - 1;

					semirentthree($db,$an03,$r9);
				}
		}

//SEMIRENTFOUR
		function semirentfour($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'nikond850';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln04 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond850';

EOF;

			$retn04 = pg_query ( $db, $sqln04 );
			$rown04 = pg_fetch_row($retn04);
			$an04 = $rown04[3];
			$r10 = $rown04[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semirentfour' && $an04 == 0 && $r10 > 0) {
					$an04 = 1;
					$r10 = $r10 - 1;

					semirentfour($db,$an04,$r10);
				}
		}

//SEMIRENTFIVE
		function semirentfive($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'nikondf';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln05 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikondf';

EOF;

			$retn05 = pg_query ( $db, $sqln05 );
			$rown05 = pg_fetch_row($retn05);
			$an05 = $rown05[3];
			$r11 = $rown05[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semirentfive' && $an05 == 0 && $r11 > 0) {
					$an05 = 1;
					$r11 = $r11 - 1;

					semirentfive($db,$an05,$r11);
				}
		}

//SEMIRENTSIX
		function semirentsix($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'sonyalpha68';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln06 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonyalpha68';

EOF;

			$retn06 = pg_query ( $db, $sqln06 );
			$rown06 = pg_fetch_row($retn06);
			$an06 = $rown06[3];
			$r12 = $rown06[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semirentsix' && $an06 == 0 && $r12 > 0) {
					$an06 = 1;
					$r12 = $r12 - 1;

					semirentsix($db,$an06,$r12);
				}
		}

//SEMIRENTSEVEN
		function semirentseven($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'sonyalpha77';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln07 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonyalpha77';

EOF;

			$retn07 = pg_query ( $db, $sqln07 );
			$rown07 = pg_fetch_row($retn07);
			$an07 = $rown07[3];
			$r13 = $rown07[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'semirentseven' && $an07 == 0 && $r13 > 0) {
					$an07 = 1;
					$r13 = $r13 - 1;

					semirentseven($db,$an07,$r13);
				}
		}

//AMARENTONE
		function amarentone($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'canond7d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln08 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canond7d';

EOF;

			$retn08 = pg_query ( $db, $sqln08 );
			$rown08 = pg_fetch_row($retn08);
			$an08 = $rown08[3];
			$r14 = $rown08[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amarentone' && $an08 == 0 && $alog == true && $r14 > 0) {
					$an08 = 1;
					$r14 = $r14 - 1;

					amarentone($db,$an08,$r14);
				}
		}

//AMARENTTWO
		function amarenttwo($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'canon60d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln09 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon60d';

EOF;

			$retn09 = pg_query ( $db, $sqln09 );
			$rown09 = pg_fetch_row($retn09);
			$an09 = $rown09[3];
			$r15 = $rown09[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amarenttwo' && $an09 == 0 && $alog == true && $r15 > 0) {
					$an09 = 1;
					$r15 = $r15 - 1;

					amarenttwo($db,$an09,$r15);
				}
		}

//AMARENTTHREE
		function amarentthree($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'canon100d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln00 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon100d';

EOF;

			$retn00 = pg_query ( $db, $sqln00 );
			$rown00 = pg_fetch_row($retn00);
			$an00 = $rown00[3];
			$r16 = $rown00[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amarentthree' && $an00 == 0 && $alog == true && $r16 > 0) {
					$an00 = 1;
					$r16 = $r16 - 1;

					amarentthree($db,$an00,$r16);
				}
		}

//AMARENTFOUR
		function amarentfour($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'canon1300d';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln0q = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1300d';

EOF;

			$retn0q = pg_query ( $db, $sqln0q );
			$rown0q = pg_fetch_row($retn0q);
			$an0q = $rown0q[3];
			$r17 = $rown0q[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amarentfour' && $an0q == 0 && $alog == true && $r17 > 0) {
					$an0q = 1;
					$r17 = $r17 - 1;

					amarentfour($db,$an0q, $r17);
				}
		}

//AMARENTFIVE
		function amarentfive($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'nikond500';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln0w = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond500';

EOF;

			$retn0w = pg_query ( $db, $sqln0w );
			$rown0w = pg_fetch_row($retn0w);
			$an0w = $rown0w[3];
			$r18 = $rown0w[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amarentfive' && $an0w == 0 && $alog == true && $r18 > 0) {
					$an0w = 1;
					$r18 = $r18 - 1;

					amarentfive($db,$an0w, $r18);
				}
		}

//AMARENTSIX
		function amarentsix($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'nikond600';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln0e = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond600';

EOF;

			$retn0e = pg_query ( $db, $sqln0e );
			$rown0e = pg_fetch_row($retn0e);
			$an0e = $rown0e[3];
			$r19 = $rown0e[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amarentsix' && $an0e == 0 && $alog == true && $r19 > 0) {
					$an0e = 1;
					$r19 = $r19 - 1;

					amarentsix($db,$an0e, $r19);
				}
		}

//AMARENTSEVEN
		function amarentseven($db, $rent, $s) {
				$sql = <<<EOF
		UPDATE DataBase.camera SET rented = '$rent', stock = '$s' WHERE idcamera = 'nikond7500';
		
		
EOF;

	$ret = pg_query ( $db, $sql );
	if (! $ret) {
		echo "Insertion error " + pg_last_error ( $db );
	} else {
		echo "Records created successfully\n";
	}
}


                $sqln0r = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond7500';

EOF;

			$retn0r = pg_query ( $db, $sqln0r );
			$rown0r = pg_fetch_row($retn0r);
			$an0r = $rown0r[3];
			$r20 = $rown0r[5];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'amarentseven' && $an0r == 0 && $alog == true && $r20 > 0) {
					$an0r = 1;
					$r20 = $r20 - 1;

					amarentseven($db,$an0r, $r20);
				}
		}

?>