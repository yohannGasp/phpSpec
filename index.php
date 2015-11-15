<pre>
<?php
	header("Content-type: text/html;charset=utf-8");

	// $link = mysqli_connect('localhost','root','root','shop');
	// mysqli_query($link,"SET NAMES 'utf-8'");
	// $sql = 'select * from orders';
	// $res = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	// while ($row = mysqli_fetch_assoc($res))
	// 	echo $row['id'].'|'.$row['product'].'<br>';
	// 	// print_r($row);
	// mysqli_close($link);

	if ($_SERVER['REQUEST_METHOD']=='POST') {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$text = $_POST['text'];
	
		$link = mysqli_connect('localhost','root','root','web');
		mysqli_query($link,"SET NAMES 'utf-8'");
		$sql = "insert into msgs(name, email, text) values('$name','$email','$text')";
		mysqli_query($link, $sql) or die(mysqli_error($link)); 
		mysqli_close($link);
		echo "ok";		
	}
	if (isset($_GET['del'])){
		$del = abs((int)$_GET['del']);
		if ($del){
			$link = mysqli_connect('localhost','root','root','web');
			$sql = "DELETE FROM msgs WHERE id=$del";
			mysqli_query($link, $sql) or die(mysqli_error($link)); 
			mysqli_close($link);
			echo "delete";
			header("Location: {$_SERVER['REQUEST_URI']}");
			exit;
		}
	}

	$link = mysqli_connect('localhost','root','root','web');
	mysqli_query($link,"SET NAMES 'utf-8'");
	$sql = 'select * from msgs';
	$res = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	while ($row = mysqli_fetch_assoc($res))
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$dt = date('d-m-Y H:i:s', $row['date']);
		$text = $row['text'];
		echo <<<HTML
		<hr>
		<br>
	// <!-- доделать !!!!!!!!!!!!!!!!!! -->
		<p align="right">
			<a href="{$_SERVER['REQUEST_URI']}?del=$id">Удалить</a>
			<a href="{$_SERVER['REQUEST_URI']}?del=$id">Del</a>
		</p>
HTML;
	mysqli_close($link);
?>
	<form action="index.php" method="POST">
	<input type="text" name="name">
	<input type="text" name="email">
	<input type="text" name="text">
	<input type="submit">
	</form>

<html