<?php
	//GET method
	/*
	$data = $_GET;
	$user_text = $_GET['user_text'];
	$response = strtoupper($user_text);
	echo $response;
	*/

	//POST method
	/*	$data = $_POST;
	$user_text = $_POST['user_text'];
	$response = strtoupper($user_text);
	echo $response;
	*/

	//or not sure if the client will be GET or POST

	$data = $_REQUEST;
	$user_text = $_REQUEST['user_text'];
	$response = strtoupper($user_text);
	echo $response;

?>