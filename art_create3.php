<?php
include 'open_connection.php';

if(count($_POST)!=0){
  if(isset($_post['submit'])){
    echo "hello";
  extract($_post);
  echo $_post["image"];
  //extract($_files);
//  if(isset($_files['image'])){
//  $file = addslashes(file_get_contents($_files['image']['tmp_name']));
print_r ($_files);
print_r ($_files["image"]);
  $files = $_files["image"];
  echo $files;
  $query="INSERT INTO art(artid,artname,artdeptid,artistid,image,description) VALUES ('$artid','$artname','$artdeptid','$artistid','$files','$description')";
//  echo $query;
  $result = mysqli_query($conn,$query);
  if($result==true){
    echo "record inserted";
  }
  else{
    echo "failed";
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
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <form method= "POST"  enctype="multipart/form-data">
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

            <div class="d-grid gap-2 col-6 mx-auto" >
               <input type="submit" name="submit" id="insert" value="Submit" class="btn btn-success" />
             </div>
            <div class= "d-grid gap-2 col-6 mx-auto" name="display">
              <h5><a href="art_display.php"><input type="button" class="btn btn-primary" value="Display"></a></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>
<!--
<script >
$(document).ready(function(){
  $('#insert').click(function(){
    var image_name = $('#image').val();
    if(image_name==''){
      alert("Please Select Image");
      return false;
    }
    else{
      var extension = $('#image').val().split('.').pop().toLowerCase();
      if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])== -1)
      {
        alert('Invalid Image File');
        $('#image').val('');
        return false;
      }
    }
  });
});






</script>-->
