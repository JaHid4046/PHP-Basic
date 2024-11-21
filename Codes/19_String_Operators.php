<?php 

	define("TITLE", "String Operators");
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
	</style>
</head>
<body>

	<h1> Example: <?php echo TITLE; ?> </h1>
	<hr>

	<h2> Concatenation Operator (.): </h2>
	<?php 

		$a = "Hola ";
		$b = "Mi Amigos!!!";
		$c = $a . $b;

		echo $c;

	?>

	<h2> Concatenating Assignment Operator (.=): </h2>
	<?php 

		$a = "Hola ";
		$a .= "Mi Amigos!!!";

		echo $a;

	?>

	<hr>
	<small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small>

</body>
</html>