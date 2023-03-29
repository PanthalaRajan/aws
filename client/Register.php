<?php

    // @include'config.php';

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$cpassword = $_POST['cpassword'];
   $ccpassword = $_POST['ccpassword'];

   $conn = new mysqli('localhost','root','','client');
	if($conn->connect_error){
		echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
	} else {
        

	// Database connection
	// $conn = new mysqli('localhost','root','','client');
	// if($conn->connect_error){
	// 	echo "$conn->connect_error";
	// 	die("Connection Failed : ". $conn->connect_error);
	// } else {
	// 	$stmt = $conn->prepare("insert into client(firstname, lastname, email, cpassword, ccpassword) values(?, ?, ?, ?,?)");
	// 	$stmt->bind_param("sssii", $firstname, $lastname, $email, $cpassword, $ccpassword);
	// 	$execval = $stmt->execute();
	// 	echo $execval;
	// 	echo"Registration successful!";
	// 	$stmt->close();
	// 	$conn->close();
	// }

	$select = " SELECT * FROM client WHERE email = '$email' && cpassword = '$cpassword' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
      $error[] = 'User Already Exist!';
    }else{
      if($cpassword != $ccpassword){
         $error[] = 'Incorrect Pasword!';
      }else{
		$stmt = $conn->prepare("insert into client(firstname, lastname, email, cpassword, ccpassword) values(?, ?, ?, ?,?)");
		$stmt->bind_param("sssii", $firstname, $lastname, $email, $cpassword, $ccpassword);
		$execval = $stmt->execute();
		echo $execval;
		echo"Registration successful!";
		$stmt->close();
		$conn->close();
	  }
	}
}

?>