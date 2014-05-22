<?php
header( "Refresh:2; url=http://localhost/EMLabSorter-Test/results.php", true, 303);
$con=mysqli_connect("localhost","root", "passw0rd", "cbiTest");
 //Check Connection
if (mysqli_connect_errno($con)) {
	echo mysqli_connect_error() . "Connection Failed! You've made a huge mistake..."; 
}
if ($_POST['email']==null || $_POST['email']=="") {
	die("YOU MUST ENTER A REAL EMAIL");
	return false;
}
$email = mysqli_real_escape_string($con, $_POST['email']);
	$dupes = "SELECT * FROM emailCheck WHERE Email='$email'";
	$picSelect = $_POST['picSelect'];
	
	$result = mysqli_query($con, $dupes);
	if (mysqli_num_rows($result) > 0) {
		die('Error: ' . mysqli_error($con));
		echo "Some imposter has already voted with your email.";
		
		
	} else {
	
		foreach ($picSelect as $a) {
			$ballot = "UPDATE pictureVotes SET Votes = Votes+1 WHERE ID = '$a'";
			$countBallot = mysqli_query($con, $ballot);
			echo $a . "\n";
		}
		//echo($picSelect);
		$sql="INSERT INTO emailCheck (Email)
		VALUES ('$email')";
		
		if (!mysqli_query($con, $sql)) {
			die('Error: ' . mysqli_error($con));
		}
		echo "<br /><br />" . "Your vote has been processed." . "<br /><br />" . "Taking you to the results...";
	}


mysqli_close($con);

?>