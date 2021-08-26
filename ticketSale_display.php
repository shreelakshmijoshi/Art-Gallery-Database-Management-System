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
      <div class="col-lg-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">TranID</th>
              <th scope="col">Date </th>
              <th scope="col">No_of_tickets</th>
              <th scope="col">ticketID</th>
              <th scope="col">Delete</th>
              <th scope="col">Update</th>
            </tr>
          </thead>
          <?php
          include 'open_connection.php';
          $query = "SELECT * FROM ticketSale";
          $result = mysqli_query($conn,$query);
          while($res= mysqli_fetch_array($result)){


           ?>
          <tbody>
            <tr>
              <td><?php echo $res['TranID']?></td>
              <td><?php echo $res['Date']?></td>
              <td><?php echo $res['No_of_tickets']?></td>
              <td><?php echo $res['ticketID']?></td>
              <td><a href="ticketSale_delete.php?id=<?php echo$res['TranID']?>"><input type="button" class="btn btn-success" value="Delete"></a></td>
              <td><a href="ticketSale_update.php?id=<?php echo$res['TranID']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
            </tr>
          </tbody>
        <?php   } ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
