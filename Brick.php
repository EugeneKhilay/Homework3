<?php
	function pull_brick($hole, $brick) {
		sort($hole);
		sort($brick);
		if ( ($hole[0] >= $brick[0]) && ($hole[1] >= $brick[1]) ) {
			echo "Brick passed!";
		} else {
			echo "Brick has not passed!";
		}
	}
	pull_brick( array( $_GET["c"], $_GET["d"] ), array( $_GET["a"], $_GET["b"], $_GET["h"] ) );
?>