<?php
//	$array = ['name' => 'John','age' => '25'];
//	setcookie('array',serialize($array));
	setcookie('array');
?>
<!DOCTYPE html>
<html>
<head>
	<meta codepage="utf-8">
	<title>
		<?php echo $_GET['id']; ?>
	</title>
<style type="text/css">
	body {
		background-color: #ccc;
		font-family: 'PT Sans';
		margin-left: 20px;
	}	
</style>
</head>
<body>

<?php
include_once('lib.php');
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
define("sdf", "value");
	if (1==1) {
		$x = 10;
		$y = & $x;
		$y = 20;
		$var = 'var2';
		$$var = '1231';
		$vf = false;
		$i = 12;
		$f = 7E-10;
		$ff = "sour code.";
		// echo $ff{0};

		$a = 3;
		$a += 5;
		$bar = (boolean) $a;
		// echo $a;
		// echo gettype($a);
		// echo sdf;
		// echo (1===1) ? "true" : "false";
		// echo ini_get('post_max_size');

		$arr = ['1','2'];
		$arr[55] = 25;
		// var_dump($arr);
		// echo current($w22);echo "<br>";
		// echo key($w22);

		$w22 = ['name' => 'John','age' => '25'];
		foreach ($w22 as $key => $value) {
			echo $value." ";
		}


		if (function_exists("sayhello")) {
			sayhello();
		} 
		$cou = 0;	


		echo $cou;
		echo "<br>";

		foo('John',25);
//		print_r(stream_get_transports());
		echo date("d-m-Y");
		echo __FILE__;
		echo PHP_OS;
		echo "<pre>";
//		print_r(get_defined_functions());
		//print_r($GLOBALS);
		echo $_SERVER['SERVER_SOFTWARE']."   ";
		$outp = '';
		if ($_SERVER['REQUEST_METHOD']=='POST'){
			DrawTable($_POST['row'],$_POST['col'],$_POST['color']);
			$outp = cleanInt($_POST['num1']) + cleanInt($_POST['num2']);
		}
		if ($outp)
			echo "<h3>Result: $outp</h3>";
	}

	$visitCounter = 0;
	if (isset($_COOKIE["visitCounter"])) {
		$visitCounter = $_COOKIE["visitCounter"];
	}
	$visitCounter++;
	$lastVisit = '';
	if (isset($_COOKIE["lastVisit"])) {
		$lastVisit = date('d-m-Y H:i:s',$_COOKIE["lastVisit"]);
	}
	//setcookie('visitCounter',$visitCounter);
	setcookie('visitCounter');
	//setcookie('lastVisit',time());
	setcookie('lastVisit');

	if ($visitCounter == 1) {
		echo "Thanks";
	} else {
		echo "You in to $visitCounter ";
		echo "Last $lastVisit";
	}

	// header("Refresh: 10");
	// header("Refresh: 5;url=http://www.mail.ru");
	header("Content-type: text/html;charset=utf-8");
	header("Cashe-control: no-store; max-age=0");
	//header("Set-cookie: name=John");
	//header("Set-cookie: password=".md5('password'));

	session_start();
	// $_SESSION['u_name'] = 'libbbb';

	$_SESSION = array();	
	session_destroy();
	setcookie(session_name(),'');

	//print_r($_COOKIE);
	//print_r(unserialize($_COOKIE['array']));
 



?>
<form action="index.php" method="POST">
	<input type="text" name="row">
	<input type="text" name="col">
	<input type="text" name="color">
	<input type="submit">
</form>

<form action="index.php" method="POST">
	<input type="text" name="num1" value="<?=cleanInt($_POST['num1'])?>">
	<input type="text" name="op">
	<input type="text" name="num2" value="<?=cleanInt($_POST['num2'])?>">
	<input type="submit">
</form>



</body>
</html>

