<?php 

	define("TITLE", "Arithmatic Operators");
	$my_name = "MD. Jahid Hasan";

	$num1 = 28;
	$num2 = 7;

	$add = $num1 + $num2;
	$sub = $num1 - $num2;
	$mul = $num1 * $num2;
	$div = $num1 / $num2;
	$mod = $num1 % $num2;

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

	<h2> Addition (+): </h2>
	<?php 

		echo "<p>$num1 + $num2 is equal to $add</p>";

	?>

	<h2> Subtraction (-): </h2>
	<?php 

		echo "<p>$num1 - $num2 is equal to $sub</p>";

	?>

	<h2> Multiplication (*): </h2>
	<?php 

		echo "<p>$num1 * $num2 is equal to $mul</p>";

	?>

	<h2> Division (+): </h2>
	<?php 

		echo "<p>$num1 / $num2 is equal to $div</p>";

	?>

	<h2> Modulus (%): </h2>
	<?php 

		echo "<p>$num1 % $num2 is equal to $mod</p>";

	?>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>