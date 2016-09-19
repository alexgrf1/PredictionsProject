<?php
include_once 'db.php';

?>

<?php 

$user = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$usernameFree = [
		'success' => true,
		'error' => '',
];

$sql = mysql_query("SELECT * FROM users WHERE username = '$user'");

if(mysql_num_rows($sql) > 0) {
	$usernameFree['success'] = false;
} else {
	$sqla = "INSERT INTO users (Username, Pass, Email)
	VALUES ('$user', '$password', '$email')";
	$query = mysql_query($sqla);
}

echo json_encode($usernameFree);

?>