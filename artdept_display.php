
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Display Art Departments</title>
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ArtDeptID</th>
              <th scope="col">Department Name</th>
              <th scope="col">Update</th>
            </tr>
          </thead>
          <?php
            include 'open_connection.php';
            $query = "SELECT * FROM artdept order by ArtDeptID ";
            $result = mysqli_query($conn,$query);
            while($res=mysqli_fetch_array($result)){
            ?>
          <tbody>
            <tr>
              <td><?php echo $res['ArtDeptID'] ?></td>
              <td><?php echo $res['ArtDeptName'] ?></td>
              <td><a href = "artdept_update.php?ArtDeptID=<?php echo $res['ArtDeptID'] ?>"><input type="button" class="btn btn-success" value="Update"></a></td>
            </tr>
          </tbody>
          <?php
        }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
