<?php
	header("Content-type: text/html;charset=utf-8");


	if (file_exists('1.txt')) {
		$handle = fopen('1.txt', 'r') or die('Не могу открыть файл');
		echo "<ol>";
		while (!feof($handle)) {
			echo "<li> " . fgets($handle) . "</li>";
		}
		echo "</ol>";
		//echo fread($handle, filesize('1.txt'));
		fclose($handle);
	//readfile('1.txt');
	// print_r(file('1.txt'));
	}


	$handle = fopen('2.txt', 'w') or die('Не могу открыть файл');
	flock($handle, LOCK_EX);
	fwrite($handle, "string2");
	flock($handle, LOCK_UP);
	fclose($handle);



file_put_contents('log.txt',$_SERVER['HTTP_REFERER'],FILE_APPEND);


?>