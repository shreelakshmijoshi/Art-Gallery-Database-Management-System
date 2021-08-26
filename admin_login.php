<?php
include 'open_connection.php';
if(isset($_POST['btn'])){
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' limit 1";

	$result = mysqli_query($conn,$sql);
	//echo $result;
	while ($row = $result->fetch_assoc()) {
	 //   echo $row['username']."<br>";
	}

	if(mysqli_num_rows($result)==1){
		//echo "Login successful";
		// echo '<script language="javascript">';
		// echo 'alert("Login successful")';
		// echo '</script>';

		header('Location: index.html');
		exit();
	}
	else{
	//	echo "Incorrect username or password";
	echo '<script language="javascript">';
	echo 'alert("Incorrect username or password")';
	echo '</script>';
	//	exit();
	}
}

?>



<!doctype html>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="admin_login2.css">
	</head>
		<body>
			<div class="loginbox">
				<image src="login.png" class="loginIcon">
				<h1>Login Here</h1>
					<form method="POST" name="myForm" action="#">
						<p>Username:</p>
						<input type="text" name="username" placeholder="Enter Username" id="userid">
						<p>Password:</p>
						<input type="password" name="password" placeholder="Enter password" id="passid">
      			<br>
						<input type="submit" name="btn" value="Login" onClick="myOnClickFn()" id="submitbtn">
						<br>
				</div>
			</form>
		</body>
	</html>
