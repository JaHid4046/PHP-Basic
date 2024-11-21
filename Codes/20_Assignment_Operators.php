<?php 

	define("TITLE", "Assignment Operator");
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

	<h2> Addition Assignment Operator: </h2>
	<?php 

		$a = 25;
		$b = 6;

		$a += $b;

		echo $a;

	?>

	<h2> Subtraction Assignment Operator: </h2>
	<?php 

		$a = 25;
		$b = 6;

		$a -= $b;

		echo $a;

	?>

	<h2> Multiplication Assignment Operator: </h2>
	<?php 

		$a = 25;
		$b = 6;

		$a *= $b;

		echo $a;

	?>

	<h2> Division Assignment Operator: </h2>
	<?php 

		$a = 25;
		$b = 6;

		$a /= $b;

		echo $a;

	?>

	<h2> Modulus Assignment Operator: </h2>
	<?php 

		$a = 25;
		$b = 6;

		$a %= $b;

		echo $a;

	?>

	<h2> Concatenating Assignment Operator: </h2>
	<?php 

		$a = "Hola ";
		$a .= "Mi Amigos!!!";

		echo $a;

	?>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>