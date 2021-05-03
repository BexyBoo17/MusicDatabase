<?php

echo '<!DOCTYPE html>
		<html>

		<head>
			<title>Garmi Music</title>
			<meta charset= "UTF-8">
			<style>
				body

					.pic{

					background-image: url("https://cdn.wallpapersafari.com/33/27/6RBU0T.jpg");

		  			min-height: 95px;
		  			background-position: center;
		  			background-repeat: no-repeat;
		  			background-size: cover;
		  			position: relative;
				}

				.inside{

					position: absolute;
		  			margin: 20px;
		  			width: auto;
		  			text-align: center;
				}

				.topnav{

					text-align: center;
					font-color: white;
					font-family: Bahnschrift SemiLight SemiConde;
					font-size: 15px;
				}

				.topnav a {

					float: left;
					color: white;
					text-align: center;
					padding: 14px 16px;
					text-decoration: none;
					font-size: 25px;
				}

				.text {
					  color: white;
					  font-size: 15px;
					  position: absolute;
					  top: 50%;
					  left: 50%;
					  -webkit-transform: translate(-50%, -50%);
					  -ms-transform: translate(-50%, -50%);
					  transform: translate(-50%, -50%);
					  text-align: left;
					}

					.topnav input[type=text] {

							  	float: right;
								padding: 6px;
								border: none;
								margin-top: 8px;
								margin-right: 16px;
								font-size: 17px;
							}


			</style>

		</head>

			<div class="pic">
				<div class="inside">
					<div class="topnav">
				  		<a href="index.php">Home</a>
				  		<a href="trending.php">Trending</a>
				  		<a href="new releases.php">New Releases</a>
				  		<a href="top rated.php">Top Rated</a>
				  		<a href="featured.php">Featured</a>
				  		<a href="tour.php">Tour</a>
				  		<a href="calendar.php">Calendar</a>
				  		<a href="signup.php">Sign Up</a>
				  		<input type="text" placeholder="Search...">

				  	</div>
				</div>
			</div>

		</body>

		</html>'



?>
<?php  include('config.php')?>
