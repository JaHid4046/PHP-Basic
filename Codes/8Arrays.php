<?php 

	define ("TITLE", "Arrays");
	$my_name = "MD. Jahid Hasan";

	$mus = array("Handlebar", "Salvador Dali", "Fu Manchu");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo TITLE; ?></title>
	
</head>
<body>

	<h1 id="m">Moustache Types:</h1>
	<hr>
	
		<li><?php echo $mus[0]; ?></li>
		<li><?php echo $mus[1]; ?></li>
		<li><?php echo $mus[2]; ?></li>

	<hr>
	<div><small> &copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small></div>
	

</body>
</html>