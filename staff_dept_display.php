
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Display Staff And Department</title>
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <table class="table">
          <thead>
            <tr>
    <!--          <th scope="col">ID</th> -->
              <th scope="col">DeptID</th>
              <th scope="col">Dept Name</th>
              <th scope="col">StaffID</th>
              <th scope="col">Staff Name</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <?php
            include 'open_connection.php';
            $query = "SELECT SD.ID, SD.DeptID , D.Name , SD.StaffID , S.StaffName
              From staff_dept AS SD
              LEFT OUTER JOIN department AS D USING (DeptID)
              LEFT OUTER JOIN staff AS S USING (StaffID); ";
            $result = mysqli_query($conn,$query);
            while($res=mysqli_fetch_array($result)){
            ?>
          <tbody>
            <tr>
    <!--          <td><?php echo $res['ID'] ?></td> -->
              <td><?php echo $res['DeptID'] ?></td>
              <td><?php echo $res['Name'] ?></td>
              <td><?php echo $res['StaffID'] ?></td>
              <td><?php echo $res['StaffName'] ?></td>
              <td><a href = "staff_dept_update.php?ID=<?php echo $res['ID'] ?>"><input type="button" class="btn btn-success" value="Update"></a></td>
              <td><a href = "staff_dept_delete.php?ID=<?php echo $res['ID'] ?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
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
