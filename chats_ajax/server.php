<?php

	// Lets fetch the value of last displayed chat id

	$data = $_REQUEST;
	$last_displayed_chat_id = $data['last_displayed_chat_id'];

	// Connect to MySQL server
	$con = mysqli_connect("localhost", "root", "", "group_chat");

	// 
	$select = "SELECT * FROM chats WHERE chat_id > '".$last_displayed_chat_id."' ";

	$result = mysqli_query( $con , $select );

	$arr = array();
	$row_count = mysqli_num_rows( $result );

	if ( $row_count > 0 )
	{
		while ( $row = mysqli_fetch_array( $result ))
		{
			array_push($arr, $row);
		}
	}

	// Close mysql connection
	mysql_close( $con );

	// Return the response as JSON
	echo json_encode($arr);
?>