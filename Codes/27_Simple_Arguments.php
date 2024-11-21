<?php 

	define("TITLE", "Simple Argument");
	$my_name = "MD. Jahid Hasan";

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

	<h2> First Argument: </h2>
	<?php 

		function my_print($location){
			echo "<p>We're surfing in $location!</p>";
		}
		my_print("Hawaii");
		my_print("California");
		my_print("Mexico");

	?>

	<h2> Second Argument: </h2>
	<?php 

		function my_print1($num1, $num2){

			$p = $num1 * $num2;
			echo "<p>The product of the two numbers is: $p</p>";
		}
		my_print1(99, 10);

	?>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>