<?php
include 'open_connection.php';

if(count($_POST)!=0){

  if(isset($_POST['submit'])){
  extract($_POST);
  extract($_GET);
  $query = "UPDATE artdept SET ArtDeptName = '$ArtDeptName' WHERE ArtDeptID='$ArtDeptID'";
  $result = mysqli_query($conn,$query);
  if($result==true){
    echo "Record Inserted";
  }
  else{
    echo "Failed";
  }
}
}


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Art Department</title>
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <form method= "POST" >
          <div class = "container">
            <div class = "card">
              <div class = "card-header bg-dark">
                <h1 class="text-center text-white">Update Art Department</h1>
              </div>

              <div class = "form-group">
                <label for="Name">Department Name</label>
                <input type = "text" class = "form-control" name="ArtDeptName">
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" >
              <button name="submit" class="btn btn-success" type="submit" >Submit</button>
            </div>
            <div class= "d-grid gap-2 col-6 mx-auto" name="display">
              <h5><a href="artdept_display.php"><input type="button" class="btn btn-primary" value="Display"></a></h5>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
