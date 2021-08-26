<?php
include 'open_connection.php';
if(isset($_POST["insert"]))
 {
   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 if($check !== false) {
   echo "File is an image - " . $check["mime"] . ".";
   $uploadOk = 1;
 } else {
   echo "File is not an image.";
   $uploadOk = 0;
 }
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    echo "File is an image - " . $check["mime"] . ".";
    if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
   if (isset($_FILES["image"]["tmp_name"])){
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      //$query = "INSERT INTO art(artID,artName,ArtDeptID,ArtistID,image,description) VALUES ('$artID','$artName','$ArtDeptID','$ArtistID','$files','$description')";
      if(mysqli_query($conn, $query))
      {
           echo '<script>alert("Image Inserted into Database")</script>';
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
  <title>Insert Art</title>
<!--
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <form method= "POST" enctype="multipart/form-data" action="art_create.php">
          <div class = "container">
            <div class = "card">
              <div class = "card-header bg-dark">
                <h1 class="text-center text-white">Insert About Art </h1>
              </div>
              <div class = "form-group">
                <label for="artID">ArtID</label>
                <input type = "number" class = "form-control" name="artID" min=1>
              </div>
              <div class = "form-group">
                <label for="artName">Art Name</label>
                <input type = "text" class = "form-control" name="artName">
              </div>
              <div class = "form-group">
                <label for="ArtDeptID">Art Department ID</label>
                <input type = "number" class = "form-control" name="ArtDeptID" min=1>
              </div>
              <div class = "form-group">
                <label for="ArtistID">Artist ID</label>
                <input type = "number" class = "form-control" name="ArtistID" min=1>
              </div>
              <div class = "form-group">
                <label for="image">Image</label>
                <input type = "file" class = "form-control" name="image" id="image" />
              </div>
              <div class = "form-group">
                <label for="description">Description</label>
                <input type = "text" class = "form-control" name="description">
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" >
              <input type="file" name="fileToUpload" id="fileToUpload">
               <input type="submit" name="insert" id="insert" value="Submit" class="btn" />
<!--
            <div class= "d-grid gap-2 col-6 mx-auto" name="display">
              <h5><a href="art_display.php"><input type="button" class="btn btn-primary" value="Display"></a></h5>
            </div>
-->
          </div>
        </form>
        <br />
              <br />
              <table class="table table-bordered">
                   <tr>
                        <th>Image</th>
                   </tr>
                   <?php
              $query = "SELECT * FROM art ORDER BY artID DESC";
              $result = mysqli_query($conn, $query);

              while($row = mysqli_fetch_array($result))
              {

                   echo '
                        <tr>
                             <td>
                                  <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />
                             </td>
                        </tr>
                   ';
              }
              ?>
              </table>
      </div>
    </div>
  </div>
</body>
</html>

<script>
 $(document).ready(function(){
      $('#insert').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script>
