<?php 

	define("TITLE", "ForEach Loop");
	$my_name = "MD. Jahid Hasan";

	$s = array("Handlebar", "Salvador Dali", "Fu Manchu");

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

		foreach ($s as $s) {
			echo "I love the $s.<br>";
		}

	?>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>