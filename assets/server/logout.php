<?php

session_start();

session_unset();

session_destroy();

$data = [
		'success' => true,
		'error' => '',
];

if (!$_SESSION['userName']) {
	$data = [
			'success' => true,
			'error' => '',
	];
}

echo json_encode($data);