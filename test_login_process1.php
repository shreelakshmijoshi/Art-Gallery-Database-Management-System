<?php

echo "Entering PHP login post processing...";
$username = $_POST['username'];
$password = $_POST['password'];
echo $_POST['username'];
echo "username printed";
echo "$username";
echo "$password";

$cin = mysqli_connect($host, $user, $password, $dbName);
if(mysqli_connect_errno()){
  die("Failed to connect with MYSQL:".mysqli_connect_errno());
}
//to prevent mysql injection

$username = stripcslclashes($username);
$password = stripcslclashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to the database and select database

mysql_connect("localhost","root","Chandrala107");
mysql_select_db("user");


//query the database for user

$result = mysql_query(
  "select *
  from user
  where username = '$username' and
  password = '$password'"
  )
or die("Failed to query database ".mysql_error());


$row = mysql_fetch_array($result);

if($row['username']==$username && $row[password]==$password){
  echo "Login successful!! Welcome ".$row['username'];

}
else{
  echo "failed to login!:(";
}
?>
