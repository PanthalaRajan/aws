<?php

$conn = new mysqli('localhost','root','','client');
	if($conn->connect_error){
		echo "$conn->connect_error";
	} else {
        die("Connection Failed : ". $conn->connect_error);
    }

?>