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
		img {
			display: block;
			height: auto;
			width: 100%;
		}
		div.col-sm-6,
		div.col-xs-3,
		div.col-xs-2,
		div.col-sm-7 {
			padding-left: 0px;
			padding-right: 0px;
		}
		h4 {
			text-align: center;
			font-weight: 300;
			font-family: "Hevetica Neue";
			margin-top: 5px;
		}
		img.author {
			width: 100%;
			height: auto;
			float: right;
			padding-right: 6%;
		}
		.container-fluid .row .row {
			margin-left: 0px;
			margin-right: 0px;
			/*border: 5px solid rgba(166, 166, 166, .75);*/
		}
		.jumbotron {
			padding-top: 80px;
			padding-bottom: 30px!important;
			margin-bottom: 12px;
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
	<div class="jumbotron">
		<h4>The results are in!</h4>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catOne.jpg" alt="cat" />
						<h4>Orange Kitty &#150 <?php 
							echo implode($picResults[0]);
						 ?>	</h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfajsdlfkjasldfkjalskd
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/oppenheimer.jpg" alt="oppenheimer" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catTwo.jpg" alt="catcat" />
						<h4>Grey Kitty &#150 <?php 
							echo implode($picResults[1]);
						 ?>
						</h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfajsdlfkjasldfkjalskd
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/house.jpg" alt="house" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catThree.jpg" alt="catcatcat" />
						<h4>Tabby-in-da-box &#150 <?php 
							echo implode($picResults[2]);
						 ?>
						</h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfajsdlfkjasldfkjalskd
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/tesla.jpg" alt="tesla" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catFour.jpg" alt="meow?" />
						<h4>Me So Happy Kitty &#150 <?php 
							echo implode($picResults[3]);
						 ?>
						</h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfajsdlfkjasldfkjalskd
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/jackson.jpg" alt="jackson" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catFive.jpg" alt="meow?" />
						<h4>Necklace Kitty &#150 <?php 
							echo implode($picResults[4]);
						 ?>
						</h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfajsdlfkjasldfkjalskd
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/dogDoc.jpg" alt="doctor dog" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catSix.jpg" alt="meow?" />
						<h4>Albino-Mose Kitty &#150 <?php 
							echo implode($picResults[5]);
						 ?>
						</h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfajsdlfkjasldfkjalskd
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/professor.jpg" alt="farnsworth" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catSeven.jpg" alt="meowmeow?" />
						<h4>Bread Kitty &#150 <?php 
							echo implode($picResults[6]);
						 ?></h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfajsdlfkjasldfkjalskd
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/sig.jpg" alt="weaver" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catEight.jpg" alt="meowmeow?" />
						<h4>Fierce Kitty &#150 <?php 
							echo implode($picResults[7]);
						 ?></h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfajs
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/pavlov.jpg" alt="pavlov" />
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catNine.jpg" alt="Sir meowmeow?" />
						<h4>Book Kitty &#150 <?php 
							echo implode($picResults[8]);
						 ?></h4>
					</div>
					<div class="col-xs-2">
						<span class="author">oppenheimer alksjdflajsdlfa
						</span>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/catDoctor.jpg" alt="Doc Cat" />
					</div>
				</div>
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
