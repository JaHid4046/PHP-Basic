<?php 

	define("TITLE", "Else Statement");
	$my_name = "MD. Jahid Hasan";

	$fav_fruit = "Orange";

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

	<h1> Exercise: <?php echo TITLE; ?> </h1>
	<hr>

	<?php 


		if ($fav_fruit == "Apple") {
			echo "<p>YAY! Apple is the best.</p>";
		}else{
			echo "<p>So, you like $fav_fruit.</p>";
		}

	?>

</body>
</html>