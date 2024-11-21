<?php 

	define("TITLE", "Custom Function");
	$my_name = "MD. Jahid Hasan";

	function my_print(){
		echo "<p>Surf's up! Grab your board!</p>";
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php echo TITLE; ?> </title>
	<style>
		h1{text-align: center;}
		div{text-align: center;}
	</style>
</head>
<body>

	<h1> Example: <?php echo TITLE; ?> </h1>
	<hr>

	<?php 

		my_print();

		echo "<br>";

		$surfisup = false;

		if ($surfisup) {
			my_print();
		}else{
			echo "<p>ERROR!!!</p>";
		}

	?>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>