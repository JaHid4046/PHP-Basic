<?php 

	define("TITLE", "Logocal Operators");
	$my_name = "MD. Jahid Hasan";

	$username = "jahidhasan";
	$password = "jh@2024";

	$cart = 19.5;
	$coupon = "DiscountPlease";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Example: <?php echo TITLE; ?> </title>
	<style>
		h1{text-align: center;}
		div{text-align: center;}
	</style>
</head>
<body>

	<h1> Example: <?php echo TITLE; ?> </h1>
	<hr>

	<h2> And (and): </h2>
	<?php 

		if ($username == "jahidhasan" && $password == "jh@2024") {
			echo "<p>Login info is correct!</p>";
		}else{
			echo "<p>Login info is incorrect!!!";
		}

	?>

	<h2> Or (or): </h2>
	<?php 

		if ($cart > 15 || $coupon == "DiscountPlease") {
			echo "<p>You get a discount!</p>";
		}else{
			echo "<p>You do not get a discount!</p>";
		}

	?>

	<h2> Not (!): </h2>
	<?php 

		$owndog = true;
		if (!$owndog) {
			echo "<p>You do not own a dog!</p>";
		}else{
			echo "<p>You own a dog</p>";
		}

	?>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>