<?php 

	// connect to db
	$connect = mysqli_connect('localhost', 'root', 'omengpogi', 'ajaxtest');

	echo 'processing...';

	// check for a get variable 

	if(isset($_GET['name'])){

		echo 'GET: Your Name is ' . $_GET['name'];

	}

	if(isset($_POST['name'])){

		$name = mysqli_real_escape_string($connect, $_POST['name']);
		
		echo 'POST: You are adding ' . $_POST['name'];

		$querystatement = "INSERT INTO users(name) VALUES('$name')";

		if(mysqli_query($connect, $querystatement)){
			echo 'User added...';
		}
		else{
			echo 'ERROR:' . mysqli_error($connect);
		}

	}