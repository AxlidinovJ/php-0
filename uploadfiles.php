<pre>
<?php
	// print_r($_FILES);
	if(isset($_FILES['rasm'])){
		foreach ($_FILES['rasm'] as $d=> $value) {
		echo "<h1>".$d."-  ".$value."</h1>";
	}

	move_uploaded_file($_FILES['rasm']['tmp_name'], $_FILES['rasm']['name']);
	
	}

?>
</pre>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>salom</title>
 </head>
 <body>
 	<form method="POST" enctype="multipart/form-data">
 		<input type="file" name="rasm">
 		<input type="submit" name="jonat">
 	</form>
 </body>
 </html>