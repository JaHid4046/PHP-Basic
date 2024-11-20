<?php
	
	define("TITLE", "Variables and Constants");

	$my_name = "MD. Jahid Hasan";
	$fav_color = "Black";
	$birth_year = "2000";

	date_default_timezone_set('Asia/Dhaka');

	$today = date('F j, Y');
	$this_year = date('Y');

	$my_age = ($this_year - $birth_year);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EXAMPLE: <?php echo TITLE ?>;</title>

	<style>
		h1{text-align: center;}
		div{text-align: center;}


	</style>
</head>
<body>

	<h1>Example: <?php echo TITLE; ?></h1>
	<hr>

		<h3>Today's Date: </h3>
		<p><?php echo "$today"; ?></p>
		<h3>My Name: </h3>
		<p><?php echo "$my_name"; ?></p>
		<h3>Favourite Color: </h3>
		<p><?php echo "$fav_color"; ?></p>
		<h3>My Age: </h3>
		<p><?php echo "$my_age"; ?></p>

	<hr>
	<div><small> &copy;<?php echo $this_year; ?> - <?php echo $my_name; ?></small></div>

	

</body>
</html>
