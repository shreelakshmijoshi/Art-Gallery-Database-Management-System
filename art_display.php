
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Art Display</title>
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">artID</th>
              <th scope="col">Art Name</th>
              <th scope="col">ArtDeptID</th>
              <th scope="col">ArtistID</th>
              <th scope="col">Image</th>
              <th scope="col">Description</th>
    <!--          <th scope="col">Update</th> -->
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <?php
            include 'open_connection.php';
            $query = "SELECT * FROM art ";
            $result = mysqli_query($conn,$query);
            while($res=mysqli_fetch_array($result)){
            ?>
          <tbody>
            <tr>
              <td><?php echo $res['artID'] ?></td>
              <td><?php echo $res['artName'] ?></td>
              <td><?php echo $res['ArtDeptID'] ?></td>
              <td><?php echo $res['ArtistID'] ?></td>
        <!--      <td><img src="<?php echo $res['image'] ?>" height="100" width="100"/></td>  -->
              <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $res['image'] ).'" height="200" width="150" />';?></td>

              <td><?php echo $res['description'] ?></td>
              <td><a href = "art_delete.php?artID=<?php echo $res['artID'] ?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
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
