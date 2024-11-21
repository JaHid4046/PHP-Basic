<?php 

	define("TITLE", "Comparison Operators");
	$my_name = "MD. Jahid Hasan";
	
	$age = 25.32;
	$strNum = "2";
	$country = "Bangladesh";
	$lesson = 14;

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

	<h2> Equal == </h2>
	<?php 

		if ($age == 25.32) {
			echo "<p>Your age is equal to $age!</p>";
		}else{
			echo "<p>Your age is not equal to $age!!</p>";
		}

	?>

	<h2> Identical === </h2>
	<?php 

		if ($strNum === 2) {
			echo "<p>Your favourite number is a Integer called 2!</p>";
		}elseif ($strNum === "2") {
			echo "<p>Your favourite number is a String called 2!</p>";
		}

	?>

	<h2> Not Equal != </h2>
	<?php 

		if ($country != "America") {
			echo "<p>Excuse me, se&ntilde;or. You must not be from around here.</p>";
		}else{
			echo "<p>ERROR!</p>";
		}

	?>

	<h2> Not Identical !== </h2>
	<?php 

		if ($age !== "25.32") {
			echo "<p>You are not exactly the string \"$age\"</p>";
		}else{
			echo "<p>You are exactly the string \"$age\"</p>";
		}

	?>

	<h2> Less Than < </h2>
	<?php 

		if ($lesson < 15) {
			echo "<p>You have not quite made it to lesson 15, yet.</p>";
		}else{
			echo "<p>Good job, You have made it to lesson 15.</p>";
		}

	?>

	<h2> Greater Than < </h2>
	<?php 

		if ($lesson > 10) {
			echo "<p>Good job, You have made it past to lesson 10.</p>";
		}else{
			echo "<p>You have not quite made it past to lesson 10, yet.</p>";
		}

	?>

	<h2> Less Than or Equal < </h2>
	<?php 

		if ($lesson <= 14) {
			echo "<p>$lesson is less than or equal to $lesson</p>";
		}else{
			echo "<p>$lesson is not less than or equal to $lesson</p>";
		}

	?>

	<h2> Greater Than or Equal < </h2>
	<?php 

		if ($lesson >= 4) {
			echo "<p>$lesson is Greater than or equal to 4</p>";
		}else{
			echo "<p>$lesson is not Greater than or equal to 4</p>";
		}

	?>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>


</body>
</html>
