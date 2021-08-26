<?php
include 'open_connection.php';

if(count($_POST)!=0){

  if(isset($_POST['submit'])){
  extract($_POST);
  $query="INSERT INTO staff_dept(DeptID,StaffID) VALUES ('$DeptID','$StaffID')";
  //INSERT INTO `staff_dept` (`ID`, `StaffID`, `DeptID`) VALUES ('1', '1', '2'), ('2', '3', '1');
  //echo $query;
  $result = mysqli_query($conn,$query);
  // echo $result;
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
  <title>Insert Staff Department Details</title>
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
                <h1 class="text-center text-white">Insert Staff Department Details</h1>
              </div>
    <!--          <div class = "form-group">
                <label for="ID">ID</label>
                <input type = "number" class = "form-control" name="ID" min=1>
              </div> -->
              <!-- <div class = "form-group">
                <label for="DeptID">DeptID</label>
                <input type = "number" class = "form-control" name="DeptID" min=1>
              </div>
              <div class = "form-group">
                <label for="StaffID">StaffID</label>
                <input type = "number" class = "form-control" name="StaffID" min=1>
              </div>
            </div> -->
            <div class="form-group">
              <label for="DeptID">Department ID</label>
              <select class="form-control" name="DeptID">
                <option value disabled selected>--Select--</option>
                <?php
                include 'open_connection.php';
                $query3 = "SELECT * FROM department";
                $result3 = mysqli_query($conn,$query3);
                while($res3=mysqli_fetch_array($result3)){
                ?>
                <option value="<?php echo $res3['DeptID']?>"><?php echo $res3['DeptID']; echo " "; echo $res3['Name']; ?></option>
                <?php
              }
              ?>
              </select>
            </div>
            <div class="form-group">
              <label for="StaffID">Staff ID</label>
              <select class="form-control" name="StaffID">
                <option value disabled selected>--Select--</option>
                <?php
                include 'open_connection.php';
                $query3 = "SELECT * FROM staff";
                $result3 = mysqli_query($conn,$query3);
                while($res3=mysqli_fetch_array($result3)){
                ?>
                <option value="<?php echo $res3['StaffID']?>"><?php echo $res3['StaffID']; echo " "; echo $res3['StaffName']; ?></option>
                <?php
              }
              ?>
              </select>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" >
              <button name="submit" class="btn btn-success" type="submit" >Submit</button>
            </div>
            <div class= "d-grid gap-2 col-6 mx-auto" name="display">
              <h5><a href="staff_dept_display.php"><input type="button" class="btn btn-primary" value="Display"></a></h5>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
