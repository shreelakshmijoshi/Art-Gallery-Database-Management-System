<!doctype html>
<html>
<head>
  <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h1>Login</h1>
<hr>

<button type="button" class="btn btn-primary btn-lg" onclick = "myOnClickFn1()" >Login as admin</button>
<button type="button" class="btn btn-secondary btn-lg" onClick="myOnClickFn()">Login as visitor</button>
<script>
function myOnClickFn(){
  document.location.href="index.html";
}
function myOnClickFn1(){
  document.location.href="admin_login.php";
}

</script>



<?php


?>
</body>
</html>
