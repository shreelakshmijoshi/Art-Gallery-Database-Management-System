<?php
include 'open_connection.php';
if(count($_POST)!=0){
  extract($_POST);
  $query="INSERT into staff(StaffID,StaffName) VALUES ('$staffID','$staffName')";
  $result=mysqli_query($conn,$query);
  if($result==true)
  {
    echo "Record Inserted";
  }
  else{
    echo "Failed to insert the record";
  }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <form action="post">
          <div class="card">
            <div class="card-header bg-info">
              <h1 class="text-center text-white">Insert Staff Details</h1>
              <div class="form-group">
                <label for="staffID">Staff ID</label>
                <input type="text" class="form-control" name="staffID">
              </div>
              <div class="form-group">
                <label for="staffName">Staff Name</label>
                <input type="text" class="form-control" name="staffName">
              </div>
              <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </div>
          </form>
          <h2><a href="display.php"><input type="button" class="btn btn-primary" value="Display Staff"></a></h2>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
