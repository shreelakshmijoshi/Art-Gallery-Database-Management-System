<?php
include 'open_connection.php';

if(count($_POST)!=0){

  if(isset($_POST['submit'])){
  extract($_POST);
  extract($_GET);
  $query = "UPDATE ticketSale SET Date = '$Date' AND ticketID = '$ticketID' AND No_of_tickets = '$No_of_tickets' WHERE TranID='$TranID'";
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
  <title>Update Transaction</title>
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
                <h1 class="text-center text-white">Update Transaction</h1>
              </div>
              <div class = "form-group">
                <label for="Date">Date</label>
                <input type = "Date" class = "form-control" name="Date">
              </div>
              <!-- <div class = "form-group">
                <label for="ticketID">Ticket ID</label>
                <input type = "number" class = "form-control" name="ticketID" min=1 max=2>
              </div> -->
              <div class="form-group">
                <label for="ticketID">Ticket ID</label>
                <select class="form-control" name="ticketID">
                  <option value disabled selected>--Select ticket--</option>
                  <?php
                  include 'open_connection.php';
                  $query3 = "SELECT * FROM ticket";
                  $result3 = mysqli_query($conn,$query3);
                  while($res3=mysqli_fetch_array($result3)){
                  ?>
                  <option value="<?php echo $res3['ticketID']?>"><?php echo $res3['ticketID'];  ?></option>
                  <?php
                }
                ?>
                </select>
              </div>

              <div class = "form-group">
                <label for="No_of_tickets">No. of tickets sold</label>
                <input type = "number" class = "form-control" name="No_of_tickets" min=0>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" >
              <button name="submit" class="btn btn-success" type="submit" >Submit</button>
            </div>
            <div class= "d-grid gap-2 col-6 mx-auto" name="display">
              <h5><a href="ticketSale1_display.php"><input type="button" class="btn btn-primary" value="Display"></a></h5>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
