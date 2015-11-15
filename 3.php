<pre>
<?php
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		print_r($_FILES);
		move_uploaded_file($_FILES['user']['tmp_name'], 'upload/'.$_FILES['user']['name']);
	}

	mail('evg_akulov@bk.ru', 'test', 'message');
?>

<form enctype="multipart/form-data" action="" method="POST">
	<input name="userfile" type="file">
	<input type="submit">
</form>