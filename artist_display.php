
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Display Artist</title>
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <table class="table">
          <thead>
            <tr>
             <th scope="col">ArtistID</th> 
              <th scope="col">Artist Name</th>
              <th scope="col">Country</th>
              <th scope="col">Update</th>
            </tr>
          </thead>
          <?php
            include 'open_connection.php';
            $query = "SELECT * FROM artist ";
            $result = mysqli_query($conn,$query);
            while($res=mysqli_fetch_array($result)){
            ?>
          <tbody>
            <tr>
           <td><?php echo $res['ArtistID'] ?></td>
              <td><?php echo $res['ArtistName'] ?></td>
              <td><?php echo $res['country'] ?></td>
              <td><a href = "artist_update.php?ArtistID=<?php echo $res['ArtistID'] ?>"><input type="button" class="btn btn-success" value="Update"></a></td>
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
