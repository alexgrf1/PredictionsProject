<?php
include_once 'db.php';
session_start();

?>

<?php 
$id = $_SESSION['ID'];
$name = $_SESSION['userName'];

$response = [
		'success' => true,
		'response' => '',
];


	
	$query = "SELECT COUNT(ID) FROM predictions WHERE (User_ID='$id' AND Points=3);";
	$result = mysql_query( $query );
	$array = mysql_fetch_row( $result );
	$matching_records = $array[0];
	
	$sql = "INSERT INTO standings (Username, Points)
	VALUES ('$name', '$matching_records')";
	$query = mysql_query($sql);
	
	//echo $matching_records;



echo json_encode($response);