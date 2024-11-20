<?php 

	define("TITLE", "Multi DImentional Array");

	$my_name = "MD. Jahid Hasan";

	$mous = array(
					array("name" => "Handlebar", "factor" => "High", "rate" => 14),
					array("name" => "Salvador Dali", "factor" => "Extreme", "rate" => 62),
					array("name" => "Fu Manchu", "factor" => "Very High", "rate" => "58")
				);


	
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

	<h1>Example: <?php echo TITLE; ?> </h1>
	<hr>

	<h2>The <?php echo $mous[0]["name"]; ?> Moustache!</h2>
	<p>This moustache is quite the dirt squirrel. It boasts a creep factorof <b> <?php echo $mous[0]["factor"]; ?> </b> and takes <b> <?php echo $mous[0]["rate"]; ?> days </b> to grow on average. </p>


	<h2>The <?php echo $mous[1]["name"]; ?> Moustache!</h2>
	<p>This moustache is quite the dirt squirrel. It boasts a creep factorof <b> <?php echo $mous[1]["factor"]; ?> </b> and takes <b> <?php echo $mous[1]["rate"]; ?> days </b> to grow on average. </p>


	<h2>The <?php echo $mous[2]["name"]; ?> Moustache!</h2>
	<p>This moustache is quite the dirt squirrel. It boasts a creep factorof <b> <?php echo $mous[2]["factor"]; ?> </b> and takes <b> <?php echo $mous[2]["rate"]; ?> days </b> to grow on average. </p>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>