<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
<script type="text/javascript" src='node_modules/jquery/dist/jquery.min.js'></script>
<script type="text/javascript" src='app.js'></script>
<title>Soccer Results</title>

</head>
<body>
	<header>
		<img src="images/logo.png" alt="logo" id="logo" onclick="location.href='http://www.bundesliga.com/en/'"/>
		<nav>
			<ul id="teams">
				<li>
					<a>
						<img src="images/bayern.png" alt="logo" onclick="location.href='https://fcbayern.com/us/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/borussia.png" alt="logo" onclick="location.href='http://www.bvb.de/eng/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/gladbach.png" alt="logo" onclick="location.href='http://www.borussia.de/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/shalke.png" alt="logo" onclick="location.href='http://www.schalke04.de/en/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/wolfsburg.png" alt="logo" 
						onclick="location.href='https://www.vfl-wolfsburg.de/en/info/news.html'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/werder.png" alt="logo" onclick="location.href='http://www.werder.de/en/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/hamburger.png" alt="logo" onclick="location.href='https://www.hsv.de/en/uebersicht/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/augsburg.png" alt="logo" onclick="location.href='http://www.fcaugsburg.de/cms/website.php'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/hoffenheim.png" alt="logo" onclick="location.href='http://www.achtzehn99.de/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/leverkusen.png" alt="logo" 
						onclick="location.href='http://www.bayer04.de/B04-ENG/en/_site_index.aspx'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/redbull.png" alt="logo" onclick="location.href='http://www.dierotenbullen.com/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/eintracht.png" alt="logo" onclick="location.href='http://www.eintracht.de/en/news/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/darmstadt.png" alt="logo" onclick="location.href='http://sv98.de/home/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/herta.png" alt="logo" onclick="location.href='http://www.herthabsc.de/en/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/mainz.png" alt="logo" onclick="location.href='http://www.mainz05.de/mainz05/en/home.html'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/freiburg.png" alt="logo" onclick="location.href='https://www.scfreiburg.com/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/koln.png" alt="logo" onclick="location.href='http://www.fc-koeln.de/en/fc-info/home/'"/>
					</a>
				</li>
				<li>
					<a>
						<img src="images/ingolstadt.png" alt="logo" onclick="location.href='http://www.fcingolstadt.de/en/home/'"/>
					</a>
				</li>
			</ul>
		</nav>
		<div class="clear">
			<nav>
				<ul id="link">
					<li><a href="#teams">HOME</a></li>
					<li><a href="#info">FIXTURES</a></li>
					<li><a href="#register">RULES</a></li>
					<li><a href="#copyright">CONTACTS</a></li>
					<li><a href="page1.php" id="logout">LOG OUT</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section  class="clear">
		<div id="players">
			<h1>Scores Prediction League</h1>
			<img src="images/neymar.png" alt="logo" id="neymar"/>
			<img src="images/rooney.png" alt="logo" id="rooney"/>
			<img src="images/aguero.png" alt="logo" id="aguero"/>
			<img src="images/ronaldo2.png" alt="logo" id="ronaldo"/>
			<h1 id='welcome'><?= "Welcome, ".$_SESSION['userName']."!";?></h1>
			
		</div>
	
		
		<div id="loginTable">
			<table id="myPredictions">
				<thead>
					<tr><th colspan="7" style="padding:20px 0 10px 0; font-size:170%">My predictions:</th></tr>
				</thead>
				<tbody  id="tablebody">
					<tr>
						<td class="left" id="home1">FC Schalke 04</td>
						<td class="middle">v</td>
						<td class="right">FC Bayern München</td>
						<td>FRIDAY, 09/09/2016 19:30</td>
						<td>
							<select id="game1">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt1" type="submit">Add prediction</button></td>
						<td id="prediction1"></td>
					</tr>
					<tr>
						<td class="left"  id="home2">Bayer Leverkusen</td>
						<td class="middle">v</td>
						<td class="right">Hamburger SV</td>
						<td>FRIDAY, 09/09/2016 20:30</td>
						<td>
							<select id="game2">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt2" type="submit">Add prediction</button></td>
						<td id="prediction2"></td>
					</tr>
					<tr>
						<td class="left" id="home3">FC Ingolstadt 04</td>
						<td class="middle">v</td>
						<td class="right">Hertha BSC</td>
						<td>FRIDAY, 09/09/2016 21:30</td>
						<td>
							<select id="game3">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt3" type="submit">Add prediction</button></td>
						<td id="prediction3"></td>
					</tr>
					<tr>
						<td class="left" id="home4">Sport-Club Freiburg</td>
						<td class="middle">v</td>
						<td class="right">B M'gladbach</td>
						<td>SATURDAY, 09/09/2016 21:30</td>
						<td>
							<select id="game4">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt4" type="submit">Add prediction</button></td>
						<td id="prediction4"></td>
					</tr>
					<tr>
						<td class="left" id="home5">SV Darmstadt 98</td>
						<td class="middle">v</td>
						<td class="right">Eintracht Frankfurt</td>
						<td>SATURDAY, 09/09/2016 21:30</td>
						<td>
							<select id="game5">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt5" type="submit">Add prediction</button></td>
						<td id="prediction5"></td>
					</tr>
					<tr>
						<td class="left" id="home6">VfL Wolfsburg</td>
						<td class="middle">v</td>
						<td class="right">1. FC Köln</td>
						<td>SATURDAY, 09/09/2016 21:30</td>
						<td>
							<select id="game6">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt6" type="submit">Add prediction</button></td>
						<td id="prediction6"></td>
					</tr>
					<tr>
						<td class="left" id="home7">RB Leipzig</td>
						<td class="middle">v</td>
						<td class="right">Borussia Dortmund</td>
						<td>SATURDAY, 09/09/2016 21:30</td>
						<td>
							<select id="game7">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt7" type="submit">Add prediction</button></td>
						<td id="prediction7"></td>
					</tr>
					<tr>
						<td class="left" id="home8">SV Werder Bremen</td>
						<td class="middle">v</td>
						<td class="right">FC Augsburg</td>
						<td>SUNDAY, 09/09/2016 21:30</td>
						<td>
							<select id="game8">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt8" type="submit">Add prediction</button></td>
						<td id="prediction8"></td>
					</tr>
					<tr>
						<td class="left" id="home9">1. FSV Mainz 05</td>
						<td class="middle">v</td>
						<td class="right">TSG 1899 Hoffenheim</td>
						<td>SUNDAY, 09/09/2016 21:30</td>
						<td>
							<select id="game9">
  								<option value="1">1</option>
  								<option value="X">X</option>
 					 			<option value="2">2</option>
							</select>
						</td>
						<td><button id="butt9" type="submit">Add prediction</button></td>
						<td id="prediction9"></td>
					</tr>
				</tbody>
			</table>
			<button id="standings" type="submit">View standings</button>
			<button id="addPredictions" type="submit" style="display: none">Add predictions</button>
			
		</div>
		
	</section>
	<footer>
		<p id="copyright">Scores Prediction League &copy; 2016. Privacy Policy</p>
		<p id="tel">Questions? Call Us Toll Free: (012) 123-456-7890</p>
		<div id="icons">
			<ul>
				<li id="tw">
					<a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter-square" style="font-size:35px;"></i></a>
				</li>
				<li id="fb">
					<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-square" style="font-size:35px;"></i></a>
				</li>
				<li id="in">
					<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" style="font-size:35px;"></i></a>
				</li>			
			</ul>
		</div>
	</footer>
</body>
</html>