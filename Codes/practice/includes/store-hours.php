<?php 

	date_default_timezone_set('Asia/Dhaka');

	//Friday-Saturday
	$shour1 = "14:00pm";
	$ehour1 = "23:00pm";

	//Sunday-Thursday
	$shour2 = "11:00am";
	$ehour2 = "22:00pm";

	$today1 = date("G:ia");
	$today2 = date("l");

	if ($today2 == "Friday" || $today2 == "Saturday") {

		if ($today1 >= $shour1 && $today1 <= $ehour1) {
			echo "<strong class='open'>Yes, we're <b>Open.</b>Today's hours are from $shour1 until $ehour1.</strong>";
		}else{
			echo "<strong class='closed'>Sorry, we're <b>closed.</b> Today's hours are from $shour1 until $ehour1.</strong>";
		}

	}elseif ($today2 == "Sunday" || $today2 == "Monday" || $today2 == "Tuesday" || $today2 == "Wednesday" || $today2 == "Thursday") {
		
		if ($today1 >= $shour2 && $today1 <= $ehour2) {
			echo "<strong class='open'>Yes, we're Open.Today's hours are from $shour2 until $ehour2.</strong>";
		}else{
			echo "<strong class='closed'>Sorry, we're closed.</b> Today's hours are from $shour2 until $ehour2.</strong>";
		}

	}

	



?>