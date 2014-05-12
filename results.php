<?php
	$con=mysqli_connect("localhost","root", "passw0rd", "cbiTest");
	 //Check Connection
	if (mysqli_connect_errno($con)) {
		echo mysqli_connect_error() . "Connection Failed! You've made a huge mistake..."; 
	}
	$query = "SELECT Votes FROM pictureVotes";
	$result = mysqli_query($con, $query) or die("no query");
	
	
	$i = 0;
	while ($row = mysqli_fetch_assoc($result)) {
		$picResults[$i] = $row;
		$i++;
	}
	//echo implode($picResults[3]);
?>
<!doctype html>
<html>
<head>
	<title>Sorter</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" />
	
	<style>
		.navbar-brand {
			color: rgba(255, 255, 255, 1)!important;
			font-weight: 100;
			font-size: 3em;
			font-family: "Gill Sans";
		}
		img {
			display: block;
			height: auto;
			width: 100%;
		}
		div.col-sm-4 {
			padding-left: 0px;
			padding-right: 0px;
		}
		.nav.navbar-nav {
			float: right;
		}
		h4 {
			text-align: center;
			font-weight: 300;
			font-family: "Hevetica Neue";
			margin-top: 5px;
		}
	</style>
	
		
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">UPCI <span class="sm-caps">photo contest</span></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav sm-caps">
					<li class="active">
						<a href="index.html">Voting</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid pad-down-sm">
		<div class="row">
			<div class="col-sm-4">
				<img src="images/catOne.jpg" alt="cat" />
				<h4>Orange Kitty &#150 <?php 
					echo implode($picResults[0]);
				 ?>
				</h4>
			</div>
			<div class="col-sm-4">
				<img src="images/catTwo.jpg" alt="catcat" />
				<h4>Grey Kitty &#150 <?php 
					echo implode($picResults[1]);
				 ?>
				</h4>
			</div>
			<div class="col-sm-4">
				<img src="images/catThree.jpg" alt="catcatcat" />
				<h4>Tabby-in-da-box &#150 <?php 
					echo implode($picResults[2]);
				 ?>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img src="images/catFour.jpg" alt="meow?" />
				<h4>Me So Happy Kitty &#150 <?php 
					echo implode($picResults[3]);
				 ?>
				</h4>
			</div>
			<div class="col-sm-4">
				<img src="images/catFive.jpg" alt="meow?" />
				<h4>Orange Kitty &#150 <?php 
					echo implode($picResults[4]);
				 ?>
				</h4>
			</div>
			<div class="col-sm-4">
				<img src="images/catSix.jpg" alt="meow?" />
				<h4>Orange Kitty &#150 <?php 
					echo implode($picResults[5]);
				 ?>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			
			
			</div>
		</div>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>
