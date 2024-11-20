<?php 

	define ("TITLE", "Associative Arrays");
	$my_name = "MD. Jahid Hasan";

	$mas = array( "name" => "Handlebar" ,
					"factor" => "High",
					"rate" => 14,
					"con" => "days" );

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo TITLE; ?></title>
	<style>
		h1{text-align: center;}
	</style>
</head>
<body>

	<h1>Example: <?php echo TITLE; ?></h1>
	<hr>

	<h2>The <?php echo $mas["name"]; ?> Moustache!</h3>
	<p>This moustache is quite the dirt squirrel. It boasts a creep factor of <b><?php echo $mas["factor"]; ?></b> and takes <b><?php echo $mas["rate"]; ?></b> <b><?php echo $mas["con"]; ?></b> to grow on average.</p>

	<hr>
	<div> <small>&copy; <?php echo date('Y'); ?> <?php echo $my_name; ?> </small> </div>

</body>
</html>