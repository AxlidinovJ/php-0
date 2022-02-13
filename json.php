<?php

if(isset($_GET['ok'])){
	$ism = trim($_GET['ism']);
	$time = date('Y-d-m H:i:s');
	if($ism){
		if(file_exists('json1.json')){
			$json = file_get_contents('json1.json');
			$jsonarray = json_decode($json,true);
		}else{
			$jsonarray = [];
		}
		$jsonarray[$ism] = ['status'=>false];
		file_put_contents('json1.json', json_encode($jsonarray,JSON_PRETTY_PRINT));
	}
	header('Location: json.php');

}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form accept="jonat.php" method="GET">
		<input type="text" name="ism">
		<input type="submit" name="ok" value="Saqlash">
	</form>


	<?php 
		if(file_exists('json.json')){
			$json = file_get_contents('json1.json');
			$jsonarray = json_decode($json,true);
			foreach ($jsonarray as $name => $value) {
				$d = $value['status']?"checked":"";
				echo "<div>";
					echo "<form method='GET' style='display:inline-block;' action='change.php'>
							<input type='hidden' name='ism' value='".$name."'>
							<input id='$name' type='checkbox' $d>
						</form>";
					echo "<label for='$name'>".$name."</label> ";
					echo "<form method='GET' style='display:inline-block;'>
							<input type='hidden' name='ism' value='".$name."'>
							<button name='delete' value='del'>Delete</button>
						</form>";
				echo "</div>";
			}
			if(isset($_GET['delete'])){
				unset($jsonarray[$_GET['ism']]);
				file_put_contents('json1.json',json_encode($jsonarray,JSON_PRETTY_PRINT));
				header('Location:json.php');
			}
		}
	?>

	<script>
		const checkboxs = document.querySelectorAll('input[type=checkbox]');
		checkboxs.forEach(ch=>{
			ch.onclick = function(){
				this.parentNode.submit();
			} 
		});
	</script>
</body>
</html>