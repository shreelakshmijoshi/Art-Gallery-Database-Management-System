
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Display Transaction</title>
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">ticketID</th>
              <th scope="col">Rate</th>
              <th scope="col">No. of tickets</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
          <?php
            include 'open_connection.php';

            $query = "SELECT TS.TranID, TS.Date, TS.ticketID,TS.No_of_tickets,T.Rate
             FROM ticketSale AS TS , ticket AS T
             WHERE TS.ticketID = T.ticketID AND
             DATE BETWEEN  '".$_POST['FromDate']."' AND '".$_POST['ToDate']."'
             ORDER BY TS.Date";
          
            $result = mysqli_query($conn,$query);
            $total = 0;
            while($res=mysqli_fetch_array($result)){
              $amt = $res['No_of_tickets'] * $res['Rate'];
              $total = $total + $amt;
            ?>
          <tbody>
            <tr>
              <td><?php echo $res['Date'] ?></td>
              <td><?php echo $res['ticketID'] ?></td>
              <td><?php echo $res['Rate'] ?></td>
              <td><?php echo $res['No_of_tickets'] ?></td>
              <td><?php echo $amt ?></td>
            </tr>
            <tr>
            </tr>
          </tbody>

          <?php

        }
          ?>
        </table>
      </div>
      <form>
        <fieldset disabled>
          <div class="form-group" style="font-weight: bold; font-size: large;">
            <label for="totalAmount">Total</label>
            <input type="text" id="disabledTextInput" class="form-control" value = "&#8377;<?php echo $total  ?>" >
        </fieldset>
  <!--      <div class="col-md-4 mb-3">
          <label for="validationDefaultUsername">Username</label>
            <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2">@</span>
            </div>
          -->
      </form>
    </div>
  </div>
</body>
</html>
