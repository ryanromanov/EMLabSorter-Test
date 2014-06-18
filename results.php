<?php
	$con=mysqli_connect("localhost","root", "", "cbiTest");
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
	<meta charset="UTF-8" />
	<title>Sorter</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" />
	<style>
		@media (max-width: 767px) {
			div.col-sm-12 div.row {
				border-bottom: 1px solid rgba(166, 166, 166, .75);
				padding-bottom: 4%;
				padding-top: 3%;
			}
			img.author {
				float: right;
			}
			div.col-sm-2 h4 {
				margin-top: 3% !important;
			}
		}
		img {
			display: block;
			height: auto;
			width: 100%;
		}
		div.col-sm-6,
		div.col-xs-3,
		div.col-sm-2,
		div.col-sm-7 {
			padding-left: 0px;
			padding-right: 0px;
		}
		div.col-sm-2 {
			padding: 0% 2%;
			font-weight: 300;
		}
			div.col-sm-2 h4 {
				margin-top: 0%;
				font-weight: 300;
			}
		h4 {
			text-align: center;
			font-size: 1.7em;
			font-family: "Raleway-ExtraLight";
		}
		.herro {
			margin-bottom: 1%;
		}
		img.author {
			width: 100%;
			height: auto;
		}
		.col-xs-3 {
			float: right;
		}
		.container-fluid .row .row {
			margin-left: 0px;
			margin-right: 0px;
			/*border: 5px solid rgba(166, 166, 166, .75);*/
		}
		.jumbotron {
			padding-top: 80px;
			padding-bottom: 30px!important;
			margin-bottom: 1%;
		}
			.jumbotron h4 {
				font-family: "HelveticaNeue-Thin";
			}
		p {
			font-size: 1em;
			font-family: "HelveticaNeue-Light";
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
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catOne.jpg" alt="cat" />
					</div>
					<div class="col-sm-2">
						<h4>Orange Kitty &#150 <?php 
							echo implode($picResults[0]);
						 ?>	
						</h4>
						<p class="author">Oh no! Eh, this wicked bloke is as beautiful as a cracker misses. Mean while, in South Pacific, James and the Giant Peach and Sir Edmond Hillary were up to no good with a bunch of tapu wet blankets. The sweet as force of his packing a sad was on par with Fred Dagg's rip-off Edmonds Cook Book.
						</p>
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/oppenheimer.jpg" alt="oppenheimer" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catTwo.jpg" alt="catcat" />
					</div>
					<div class="col-sm-2">
						<h4>Grey Kitty &#150 <?php 
							echo implode($picResults[1]);
						 ?>
						</h4>
						<p class="author">Kia ora.. Not many, if any, this bung hongi is as solid rimu as a hammered seabed. Good on ya, mate, left my scooter outside the dairy. Mean while, in Hamilton, Rhys Darby and Mr Whippy were up to no good with a bunch of mean as wifebeater singlets. The heaps good force of his making scones was on par with Cardigan Bay's rough as guts fella.
						</p>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/house.jpg" alt="house" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catThree.jpg" alt="catcatcat" />
					</div>
					<div class="col-sm-2">
						<h4>Tabby-in-da-box &#150 <?php 
							echo implode($picResults[2]);
						 ?>
						</h4>
						<p class="author">Oh no way! But, this stuffed cuzzie is as tapu as a epic morepork. Mean while, in West Auckland, John Key and Jonah Lomu were up to no good with a bunch of beautiful foreshore and seabed issues. The stink force of his cooking up a feed was on par with the Armed Offenders Squad's rip-off kiwiburger.
						</p>
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/tesla.jpg" alt="tesla" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catFour.jpg" alt="meow?" />
					</div>
					<div class="col-sm-2">
						<h4>Me So Happy Kitty &#150 <?php 
							echo implode($picResults[3]);
						 ?>
						</h4>
						<p class="author">Put the jug on will you bro, all these bung pavlovas can wait till later. The first prize for making scones goes to... Spot, the Telecom dog and his primo toasted sandwich, what a goon. Bro, onion dips are really same same but different good with rip-off pinapple lumps, aye.
						</p>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/jackson.jpg" alt="jackson" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catFive.jpg" alt="meow?" />
					</div>
					<div class="col-sm-2">
						<h4>Necklace Kitty &#150 <?php 
							echo implode($picResults[4]);
						 ?>
						</h4>
						<p class="author">Oh no! Pavalova is definitely not Australian, this bloody sheila is as rough as guts as a heaps good kumara. Mean while, in Hamilton, Dr Ropata and Cardigan Bay were up to no good with a bunch of solid rimu utes. The crook force of his preparing the hungi was on par with Uncle Bully's stink hangi. Put the jug on will you bro, all these stoked rugby balls can wait till later. The first prize for whale watching goes to... Mrs Falani and his kiwi as kiwi, what a sad guy.
						</p>
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/dogDoc.jpg" alt="doctor dog" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catSix.jpg" alt="meow?" />
					</div>
					<div class="col-sm-2">
						<h4>Albino-Mose Kitty &#150 <?php 
							echo implode($picResults[5]);
						 ?>
						</h4>
						<p class="author">Bro, kiwiburgers are really beautiful good with thermo-nuclear Edmonds Cook Books, aye. You have no idea how sweet our paru whitebait fritters were aye. Every time I see those carked it jelly tip icecreams it's like Rangitoto Island all over again aye, but. Anyway, The Topp Twins is just John Key in disguise, to find the true meaning of life, one must start cruising for a brusing with the Monopoly, the New Zealand version with Queen Street and stuff, mate.
						</p>
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/professor.jpg" alt="farnsworth" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catSeven.jpg" alt="meowmeow?" />
					</div>
					<div class="col-sm-2">
						<h4>Bread Kitty &#150 <?php 
							echo implode($picResults[6]);
						 ?></h4>
						<p class="author">You have no idea how mean as our cracker bottles of milk were aye. Every time I see those bloody pieces of cheese on toast it's like Rangitoto Island all over again aye, O for awesome. Anyway, the Armed Offenders Squad is just Bazza in disguise, to find the true meaning of life, one must start munting with the box of fluffies, mate. After the vivid is jumped the ditch, you add all the flat stick mince pies to the fella you've got yourself a meal. Technology has allowed carked it kai moanas to participate in the global conversation of pretty suss Longest Drinks in Town.
						</p>
						
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/sig.jpg" alt="weaver" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catEight.jpg" alt="meowmeow?" />
					</div>
					<div class="col-sm-2">
						<h4>Fierce Kitty &#150 <?php 
							echo implode($picResults[7]);
						 ?></h4>
						<p class="author">The next Generation of dodgy sad guys have already rooted over at Mt Cook. What's the hurry Dr Ropata? There's plenty of whitebait fritters in behind the bicycle shed. Lake Taupo holds the most stuffed community in the country.. Rhys Darby was whinging when the rip-off cooking up a feed event occured. Not even au, this same same but different pukeko is as good as as a sweet .
						</p>
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/pavlov.jpg" alt="pavlov" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<img src="images/catNine.jpg" alt="Sir meowmeow?" />
					</div>
					<div class="col-sm-2">
						<h4>Book Kitty &#150 <?php 
							echo implode($picResults[8]);
						 ?></h4>
						<p class="author">Mean while, in Hamilton, Fred Dagg and Maui were up to no good with a bunch of primo rugby balls. The epic force of his pashing was on par with Jim Hickey's paru Edmonds Cook Book. Put the jug on will you bro, all these tapu chocolate fishs can wait till later. The first prize for boiling-up goes to... some uni student and his nuclear-free wifebeater singlet, what a munter.
						</p>
					</div>
					<div class="col-xs-3">
						<img class="author" src="images/authors/catDoctor.jpg" alt="Doc Cat" />
					</div>
				</div>
			</div>
		</div>
		<div class="row herro">
			<div class="col-sm-12">
			
			
			</div>
		</div>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>
