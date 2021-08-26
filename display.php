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
  <div class = "container">
    <div class = "row">
      <div class = "col-lg-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Staff ID</th>
              <th scope="col">Staff Name</th>
              <th scope="col">Delete</th>
              <th scope="col">Update</th>
            </tr>
          </thead>
          <?php
          include 'open_connection.php';
          $query = "SELECT * FROM staff";
          $result = mysqli_query($conn,$query);
          while($res=mysqli_fetch_array($result)){


          ?>
          <tbody>
            <tr>
              <td><?php echo $res['staffID']  ?></td>
              <td><?php echo $res['staffName']  ?></td>
              <td><a href="delete.php?staffID = <?php echo $res['staffID'] ?>"><input type="button" class="btn btn-warning" value="Delete"></a></td>
              <td><a href="update.php?staffID = <?php echo $res['staffID']  ?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
            </tr>
          </tbody>
            <?php}?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
