<?php 

	define("TITLE", "Else If Statement");

	$language = "Spanish"


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

	<h1> Exercise: <?php echo TITLE; ?> </h1>
	<hr>

	<?php 

		if ($language == "French") {
			
			echo "<p>Bojour! Vouz parlez Fran&ccedil;ais.</p>";
		}elseif ($language == "Spanish") {
			echo "<p>&iexcl;Hola! Usted habla Espa&ntilde;ol.</>";
		}else{
			echo "<p>Hello! You Probably Speaks English.</p>";
		}

	?>

</body>
</html>