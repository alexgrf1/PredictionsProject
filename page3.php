<?php

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
			
		</div>
		<div>
			<table id="classification">
				<thead>
					<tr><th colspan="3">Standing</th></tr>
					<tr>
						<td>Rank</td>
						<td>Username</td>
						<td>Points</td>
					</tr>
				</thead>
				<tbody>
				<?php
					$conn = mysql_connect("localhost","root", "");
						if (!$conn) {
							die(mysql_error());
						}
						mysql_select_db("soccer_db", $conn);
						$results = mysql_query("SELECT * FROM standings ORDER BY Points DESC");
						$counter = 0;
						while($row = mysql_fetch_array($results)) {
							$counter++;
				?>
                			<tr>
                				<td><?php echo $counter?></td>
                    			<td><?php echo $row['Username']?></td>
                    			<td><?php echo $row['Points']?></td>
               				</tr>
            	<?php
            		}
            	?>
            </tbody>
            </table>
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