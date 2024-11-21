<?php 

	define("TITLE", "PHP Function");
	$my_name = "MD. Jahid Hasan";

	$dinner = array("Meat", "Potato", "Beans", "Rice");

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

	<h2> Using sort(): </h2>
	<?php 

		sort($dinner);

		foreach ($dinner as $ingredient) {
			echo "$ingredient <br>";
		}

	?>

	<h2> Using rsort(): </h2>
	<?php 

		rsort($dinner);

		foreach ($dinner as $ingredient) {
			echo "$ingredient <br>";
		}

	?>

	<h2> Using strtolower(): </h2>
	<?php 

		$text = "HI MY NAME IS JAHID.";

		$text = strtolower($text);

		echo $text;

	?>

	<h2> Using sha1(): </h2>
	<?php 

		$password = "I_Like_bikes";
		echo "Before: $password<br>";

		$password = sha1($password);
		echo "After: $password";

	?>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>