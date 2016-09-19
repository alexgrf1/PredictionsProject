<?php

session_start();

session_destroy();

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
<script type="text/javascript">

	function login() {
		$("#login").css({
			backgroundColor: "rgb(10, 194, 146)"
		});
		$("#signInForm").css({
			display: "block"
		});
		$("#registerForm").css({
			display: "none"
		});
		$("#signup").css({
			backgroundColor: "rgb(218, 47, 47)"
		});
	}
	
	function signup() {
		$("#signup").css({
			backgroundColor: "rgb(10, 194, 146)"
		});
		$("#login").css({
			backgroundColor: "rgb(218, 47, 47)"
		});
		$("#registerForm").css({
			display: "block"
		});
		$("#signInForm").css({
			display: "none"
		});
	}
	
</script>
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
			<button id="login" onclick="login();">Login</button>
			<button id="signup" onclick="signup();">Sign up</button>
			<div class="clear">
				<form id="signInForm" action="" method="post">
					<label style="margin-left:10px;">Sign In</label>
					<input type="text" placeholder="username" name="user" id="user"/>
					<input type="password" placeholder="password" name="pass" id="pass"/>
					<p id="wrongInput" style="margin: 4% 0 0 2.4%;color:red; display: none">Wrong username or password!</p>
					<button id="go" type="submit">Go</button>
				</form>
				<form style="display:none" id="registerForm" action="" method="post">
					<label style="margin-left:10px;margin-top:10px;">Sign Up</label>
					<input type="text" placeholder="Enter a secure username" name="username" id="username"/>
					<input type="password" placeholder="Enter a secure password" name="password" id="password"/>
					<input type="email" placeholder="Enter your email" name="email" id="email" name="email"/>
					<button id="reg" type="submit">Register</button>
				</form>
				<div id="success1" class="success" style="display:none">Your registration was successful! Refresh webpage to login</div>
			</div>
		</div>
		<div id="info">
			<table>
				<thead>
					<tr><th colspan="5" style="padding:20px 0 10px 0; font-size:170%">Upcoming games:</th></tr>
				</thead>
				<tbody  id="tablebody">
					<tr>
						<td class="left">FC Schalke 04</td>
						<td class="middle">v</td>
						<td class="right">FC Bayern München</td>
						<td>FRIDAY, 09/09/2016 19:30</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="left">Bayer Leverkusen</td>
						<td class="middle">v</td>
						<td class="right">Hamburger SV</td>
						<td>FRIDAY, 09/09/2016 20:30</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="left">FC Ingolstadt 04</td>
						<td class="middle">v</td>
						<td class="right">Hertha BSC</td>
						<td>FRIDAY, 09/09/2016 21:30</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="left">Sport-Club Freiburg</td>
						<td class="middle">v</td>
						<td class="right">B M'gladbach</td>
						<td>SATURDAY, 09/09/2016 21:30</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="left">SV Darmstadt 98</td>
						<td class="middle">v</td>
						<td class="right">Eintracht Frankfurt</td>
						<td>SATURDAY, 09/09/2016 21:30</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="left">VfL Wolfsburg</td>
						<td class="middle">v</td>
						<td class="right">1. FC Köln</td>
						<td>SATURDAY, 09/09/2016 21:30</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="left">RB Leipzig</td>
						<td class="middle">v</td>
						<td class="right">Borussia Dortmund</td>
						<td>SATURDAY, 09/09/2016 21:30</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="left">SV Werder Bremen</td>
						<td class="middle">v</td>
						<td class="right">FC Augsburg</td>
						<td>SUNDAY, 09/09/2016 21:30</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="left">1. FSV Mainz 05</td>
						<td class="middle">v</td>
						<td class="right">TSG 1899 Hoffenheim</td>
						<td>SUNDAY, 09/09/2016 21:30</td>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="register">
			<form>
				<h1>Register to play NOW</h1>
				<p>With over 3.5 million players, Scores Prediction League is the biggest Score Football game in the world. 
				It’s FREE to play and you can win great prizes! For each exact result you add 5 points to your total score and 
				for each guessed sign 1/X/2 you could add 2 more points.</p>
				<button onclick="location.href='http://localhost/S6Web3/WebApp/page1.php#players'">Sign Up Now</button>
			</form>
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