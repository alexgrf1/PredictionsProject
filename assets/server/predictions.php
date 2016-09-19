<?php

include_once 'db.php';
session_start();

?>

<?php 

$result = $_POST['result'];
$homeTeam = $_POST['home'];
$id = $_SESSION['ID'];
$name = $_SESSION['userName'];

$statement = mysql_query("SELECT ID_Game FROM games WHERE Team1='$homeTeam'");
$row = mysql_fetch_array($statement);

$gameid = trim($row["ID_Game"]);

$response = [
		'success' => true,
		'response' => '',
];

$sql = mysql_query("SELECT * FROM predictions WHERE (User_ID = '$id' AND ID_Game='$gameid')");
if (!(mysql_num_rows($sql) > 0)) {
	$sql = "INSERT INTO predictions (User_ID, ID_Game, Prediction)
	VALUES ('$id', '$gameid', '$result')";
	$query = mysql_query($sql);
	
	$a = "UPDATE predictions  SET Result = '2' WHERE ID_Game = 1";
	$que = mysql_query($a);
	
	$a = "UPDATE predictions  SET Result = '2' WHERE ID_Game = 2";
	$que = mysql_query($a);
	
	$a = "UPDATE predictions  SET Result = 'X' WHERE ID_Game = 3";
	$que = mysql_query($a);
	
	$a = "UPDATE predictions  SET Result = '2' WHERE ID_Game = 4";
	$que = mysql_query($a);
	
	$a = "UPDATE predictions  SET Result = '2' WHERE ID_Game = 5";
	$que = mysql_query($a);
	
	$a = "UPDATE predictions  SET Result = 'X' WHERE ID_Game = 6";
	$que = mysql_query($a);
	
	$a = "UPDATE predictions  SET Result = 'X' WHERE ID_Game = 7";
	$que = mysql_query($a);
	
	$a = "UPDATE predictions  SET Result = '1' WHERE ID_Game = 8";
	$que = mysql_query($a);
	
	$a = "UPDATE predictions  SET Result = '2' WHERE ID_Game = 9";
	$que = mysql_query($a);
	
	$b = "UPDATE predictions  SET Points = '3' WHERE Prediction=Result";
	$c = "UPDATE predictions  SET Points = '0' WHERE Prediction!=Result";
	$answer = mysql_query($b);
	$answer = mysql_query($c);
	
	/*$points = "SELECT SUM(Points) FROM predictions WHERE User_ID='$id'";
	
	$result = $connection->query($points);
	$score = $result->num_rows;*/
	
	/*$points = "SELECT ID FROM predictions
	WHERE (User_ID='$id' AND Points=3);";
	
	$query = mysql_query($points);
	
	$num_rows = mysql_num_rows($query);
	
	$sql = "INSERT INTO standings (Username, Points)
	VALUES ('$name', '$num_rows')";
	$query = mysql_query($sql);*/
} else {
	$response['success'] = false;
}

echo json_encode($response);
