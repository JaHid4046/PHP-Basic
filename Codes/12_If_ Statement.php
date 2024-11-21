<?php 
	
	define("TITLE", "If Statement");
	$my_name = "MD. Jahid Hasan";
	
	$a=20;
	$b=50;

	 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php echo TITLE; ?> </title>
	<style>
		
		h1{text-align: center;}

	</style>
</head>
<body>
	
	<h1> Example: <?php echo TITLE; ?> </h1>
	<hr>

	<?php 

		if ($a < $b) {
			echo "<p>Yep! $a is certainly less than $b.</p>";
		}

	?>

</body>
</html>