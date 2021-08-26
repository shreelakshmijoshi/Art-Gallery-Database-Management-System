<?php
include 'open_connection.php';
if(isset($_POST['submit']))
{
  extract($_POST);
  $query="INSERT INTO ticketSale(Date,ticketID,No_of_tickets) VALUES ('$Date','$ticketID','$No_of_tickets')";
  $result = mysqli_query($conn,$query);
  if($result==true){
    echo "Record Inserted";
  }
  else{
    echo "Failed";
  }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Ticket Sale Transaction </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "col-lg-6 m-auto">
        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
          <div class = "card">
            <div class = "card-header bg-dark">
              <h1 class="text-center text-white">Insert Transaction</h1>
                <div class = "form-group text-white">
                  <label for = "Date">Date</label>
                  <input type = "date" class = "form-control" name="Date">
                </div>
                  <div class = "form-group text-white">
                    <label for = "ticketID" >Ticket ID (Normal ticket=1, VIP ticket=2)</label>
                    <input type = "number" class = "form-control" name="ticketID" min="1" max="2">
                  </div>
                    <div class = "form-group text-white">
                      <label for = "No_of_tickets" >No. of tickets sold</label>
                      <input type = "number" class = "form-control" name="No_of_tickets" min="0">
                    </div>
                <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
              </div>
            </form>
            <h5><a href="ticketSale_display.php"><input type="button" class="btn btn-primary" value="Display"></a></h5>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
