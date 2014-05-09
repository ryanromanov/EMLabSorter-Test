<?php
$con=mysqli_connect("localhost","root", "passw0rd", "cbiTest");
 //Check Connection
if (mysqli_connect_errno($con)) {
	echo mysqli_connect_error() . "Connection Failed! You've made a huge mistake..."; 
}

$email = mysqli_real_escape_string($con, $_POST['email']);
	$dupes = "SELECT * FROM emailCheck WHERE Email='$email'";
	$picSelect = $_POST['picSelect'];
	foreach ($picSelect as $a) {
//		$selectSqlPic = "SELECT * FROM pictureVotes WHERE ID='$a'";
//		$sqlPicResult = mysqli_query($con, $selectSqlPic);
		$ballot = "UPDATE pictureVotes SET Votes = Votes+1 WHERE ID = '$a'";
		$countBallot = mysqli_query($con, $ballot);
		echo $a . "\n";
	}
	$result = mysqli_query($con, $dupes);
	if (mysqli_num_rows($result) > 0) {
		echo "Some imposter has already stolen your email for voting.";
		
	} else {
	
		
		//echo($picSelect);
		$sql="INSERT INTO emailCheck (Email)
		VALUES ('$email')";
		
		if (!mysqli_query($con, $sql)) {
			die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";
	}


mysqli_close($con);

?>