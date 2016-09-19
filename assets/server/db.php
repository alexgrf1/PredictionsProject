<?php

$conn = mysql_connect("localhost", "root", "");
$db = mysql_select_db("soccer_db", $conn);

$connection = mysqli_connect("localhost", "root", "", "soccer_db");

?>