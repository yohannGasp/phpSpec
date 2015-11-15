<?php

	function sayhello(){
		echo "<h1> string </h1>";
	}


	function DrawTable($row=10, $col=10, $color='red'){
		global $cou;
		$cou++;
		echo "<table border='1' width='300'>";
		for ($i1=1; $i1 < $row; $i1++){
			echo "<tr>";
			for ($i2=1; $i2 < $col; $i2++){ 
				if ($i1 == 1 or $i2 == 1)
					echo "<th style='background:yellow'>" . $i1 * $i2 . "</th>";
				else
					echo "<td style='background:$color'>" . $i1 * $i2 . "</td>";					
			}
			echo "</tr>";
		}
		echo "<table>";
	}

	function foo(){
		print_r(func_get_args());
	}

	function cleanStr($data){
		return trim(strip_tags($data));
	}

	function cleanInt($data){
		return (int)trim(strip_tags($data));
	}

?>