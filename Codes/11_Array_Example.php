<?php 

	define("TITLE", "Multi Dimentional Array Example");
	$my_name = "MD. Jahid Hasan";

	$age = array("child", "teenager", "adult");
	

	$info = array(
					array("name" => "Carter", "location" => "Canada"),
					array("name" => "Rodrigo", "location" => "Uruguay"),
					array("name" => "Giovanni", "location" => "Italy")
				);


	$type = array(
					array("name" => "Handlebar", "color" => "black"),
					array("name" => "Salvador Dali", "color" => "blonde"),
					array("name" => "Fu Manchu", "color" => "brown")
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

	<h2> <?php echo $info[0]["name"]; ?> from <?php echo $info[0]["location"]; ?> </h2>
	<p> <b> <?php echo $info[0]["name"]; ?> </b> is quite the <b> <?php echo $age[2]; ?> </b>! He sports a solid <b> <?php echo $type[0]["name"]; ?> </b> Moustaches that is <b> <?php echo $type[0]["color"]; ?> </b> in colour. </p>

	<h2> <?php echo $info[0]["name"]; ?> from <?php echo $info[0]["location"]; ?> </h2>
	<p> <b> <?php echo $info[1]["name"]; ?> </b> is a rather dapper <b> <?php echo $age[1]; ?> </b>! He proudly wears a that is coloured a gentle. </p>


	<h2> <?php echo $info[0]["name"]; ?> from <?php echo $info[0]["location"]; ?> </h2>
	<p> <b> <?php echo $info[2]["name"]; ?> </b> might seem young for a stache because he is a <b> <?php echo $age[0]; ?> </b>. But he proudly displays his <b> <?php echo $type[1]["name"]; ?> </b> at school! Although, it's a little hard to se because it's light <b> <?php echo $type[1]["color"]; ?> </b>. </p>

	<hr>
	<div> <small> &copy; <?php echo date('Y'); ?> - <?php echo $my_name; ?> </small> </div>

</body>
</html>