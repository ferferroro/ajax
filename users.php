<?php 

	// punyeta o, dahil may extra echo ako dito kaya pala di gumagana!
	// echo 'selecting records...'; 

	// connect to db
	$connect = mysqli_connect('localhost', 'root', 'omengpogi', 'ajaxtest');

	$querystatement = "SELECT * from users";

	// get resutls
	$results = mysqli_query($connect, $querystatement);

	$users = mysqli_fetch_all($results, MYSQLI_ASSOC);

	echo json_encode($users);