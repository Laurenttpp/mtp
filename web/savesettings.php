<?php




session_start();

$host = "host=www.eecs.uottawa.ca";
$port = "port=15432";
$dbname = "dbname=----";
$credentials = "user=---- password=----";

$_SESSION["host"] = $host;
$_SESSION["port"] = $port;
$_SESSION["db"] = $dbname;
$_SESSION["credentials"] = $credentials;


$db = pg_connect ( "$host $port $dbname $credentials" );

function connectDB($host, $port, $dbname, $credentials) {

	$db = pg_connect ( "$host $port $dbname $credentials" );

}

connectDB ($host, $port, $dbname, $credentials);


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


                $sql = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dc';

EOF;

			$ret = pg_query ( $db, $sql );
			$row = pg_fetch_row($ret);
			$a = $row[1];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikeone') {
					$a = $a + 1;

					prolikeone($db,$a);
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

				if($_POST['action'] == 'prodislikeone') {
					$a1 = $a1 + 1;

					prodislikeone($db,$a1);
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


                $sql2 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'sonya99ii';

EOF;

			$ret2 = pg_query ( $db, $sql2 );
			$row2 = pg_fetch_row($ret2);
			$a2 = $row2[1];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'proliketwo') {
					$a2 = $a2 + 1;

					proliketwo($db,$a2);
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

				if($_POST['action'] == 'prodisliketwo') {
					$a3 = $a3 + 1;

					prodisliketwo($db,$a3);
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


                $sql4 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond4';

EOF;

			$ret4 = pg_query ( $db, $sql4 );
			$row4 = pg_fetch_row($ret4);
			$a4 = $row4[1];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikethree') {
					$a4 = $a4 + 1;

					prolikethree($db,$a4);
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

				if($_POST['action'] == 'prodislikethree') {
					$a5 = $a5 + 1;

					prodislikethree($db,$a5);
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


                $sql6 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'nikond5';

EOF;

			$ret6 = pg_query ( $db, $sql6 );
			$row6 = pg_fetch_row($ret6);
			$a6 = $row6[1];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikefour') {
					$a6 = $a6 + 1;

					prolikefour($db,$a6);
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

				if($_POST['action'] == 'prodislikefour') {
					$a7 = $a7 + 1;

					prodislikefour($db,$a7);
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


                $sql8 = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'canon1dx';

EOF;

			$ret8 = pg_query ( $db, $sql8 );
			$row8 = pg_fetch_row($ret8);
			$a8 = $row8[1];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikefive') {
					$a8 = $a8 + 1;

					prolikefive($db,$a8);
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

				if($_POST['action'] == 'prodislikefive') {
					$a9 = $a9 + 1;

					prodislikefive($db,$a9);
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


                $sqlq = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'lumixgh5';

EOF;

			$retq = pg_query ( $db, $sqlq );
			$rowq = pg_fetch_row($retq);
			$aq = $rowq[1];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikesix') {
					$aq = $aq + 1;

					prolikesix($db,$aq);
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

				if($_POST['action'] == 'prodislikesix') {
					$aw = $aw + 1;

					prodislikesix($db,$aw);
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


                $sqle = <<<EOF
    		SELECT * FROM DataBase.camera WHERE idcamera = 'olympusem1';

EOF;

			$rete = pg_query ( $db, $sqle );
			$rowe = pg_fetch_row($rete);
			$ae = $rowe[1];


			if(isset($_POST['action'])) {

				if($_POST['action'] == 'prolikeseven') {
					$ae = $ae + 1;

					prolikeseven($db,$ae);
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

				if($_POST['action'] == 'prodislikeseven') {
					$ar = $ar + 1;

					prodislikeseven($db,$ar);
				}
		}

?>