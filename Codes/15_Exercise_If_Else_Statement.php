<?php 

	define("TITLE", "If Else Statement");
	$my_name = "MD. Jahid Hasan";

	$species = "Human";
	$language = "English";
	$birth_year = 2000;

	date_default_timezone_set('Asia/Dhaka');

	$this_year = date('Y');
	$age = ($this_year - $birth_year);

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

	<h1> Exercise: <?php echo TITLE; ?> </h1>
	<hr>

	<h2> First Example: </h2>

	<?php 

		if ($species == "Rhino") {
			echo "<p>Welcome, Rhino. You and rest of the rhinos will love this lake.";
		}elseif ($species == "Human") {
			echo "<p>Welcome, Human! please leave the black rhino alone.</p>";
		}else{
			echo "<p>Welcome, to Earth! Your kind is unknown.</p>";
		}

	?>

	<h2> Second Example: </h2>

	<?php 

		if ($age > 20) {
			echo "<p>Congratulations for being on Earth for more than 20 years.</p>";
		}elseif ($age == 20) {
			echo "<p>Congratulations for being on Earth for 20 years.</p>";
		}else{
			echo "<p>You are still very Young</p>";
		}

	?>

	<h2> A Combination: </h3>

		<?php 

			if ($species == "Rhino" && $language == "German") {
				echo "<p>Well, you are German and you are a rhino.</p>";
			}elseif ($species == "Rhino" && $language == "British") {
				echo "<p>Well then, You are not German but you are a rhino.</p>";
			}elseif ($species == "Human" && $language == "English") {
				echo "<p>Well then, You are not German, nor are you a rhino.</p>";
			}else{
				echo "<p>Well, Your kind is unknown.</p>";
			}

		?>

		<hr>
		<div> <small> &copy;<?php echo $this_year; ?> - <?php echo $my_name; ?> </small> </div>


</body>
</html>
