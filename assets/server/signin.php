<?php

include_once 'db.php';

?>

<?php 

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT count(*) FROM users WHERE(
		username='$username' and pass='$password')";

$query = mysql_query($sql);

$result = mysql_fetch_array($query);

$response = [
		'success' => true,
		'response' => '',
];



if(!($result[0] > 0)) {
	$response['success'] = false;
	$response['response'] = 'Invalid user name or password';
} else {
	session_start();
	$_SESSION['userName'] = $username;
	
	$res = mysql_query("SELECT User_ID FROM Users where username ='".$_SESSION['userName']."'");
	$row = mysql_fetch_array($res);
	
	$_SESSION['ID'] = trim($row["User_ID"]);
}

echo json_encode($response);

?>