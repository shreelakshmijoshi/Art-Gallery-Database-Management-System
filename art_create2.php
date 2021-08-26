<?php
include 'open_connection.php';

if(count($_POST)!=0){

  if(isset($_POST['submit'])){
  extract($_POST);
  if(isset($_FILES['image'])){
  $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  //$files = $_FILES['image'];
  //echo $file;
  $query="INSERT INTO art(artID,artName,ArtDeptID,ArtistID,image,description) VALUES ('$artID','$artName','$ArtDeptID','$ArtistID','$file','$description')";

  $result = mysqli_query($conn,$query);
  if($result==true){
    echo "Record Inserted";
  }
  else{

    echo "Failed";

      }
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
       <style>
        #p{background:#000000;
          color: #ffffff;
          width:100%;
          height:80px;
          align:center;
        }
        .largeText{
          font-size:400%;
        }

       </style>
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "clo-lg-6 m-auto">
        <form method= "POST" enctype="multipart/form-data">
          <div class = "container">
            <div class = "card">
              <div  class = "card-header bg-dark" id="p">
              <center>  <h1 class="largeText"   >Insert About Art </h1></center>
              </div>
              <div class = "form-group">
                <label for="artID">ArtID</label>
                <input type = "number" class = "form-control" name="artID" min=1>
              </div>
              <div class = "form-group">
                <label for="artName">Art Name</label>
                <input type = "text" class = "form-control" name="artName">
              </div>
              <!-- <div class = "form-group">
                <label for="ArtDeptID">Art Department ID</label>
                <input type = "number" class = "form-control" name="ArtDeptID" min=1>
                <br> -->
                <!-- <div class = "form-group">
                  <label for="ArtDeptID">Art Department ID</label>
                  <input type = "number" class = "form-control" name="ArtDeptID" min=1>
                  <br>
                <div class = "form-group">
                  <label for="ArtistID">Artist ID</label>
                  <input type = "number" class = "form-control" name="ArtistID" min=1>
                </div> -->
                <div class="form-group">
                  <label for="ArtDeptID">Art Department ID</label>
                  <select class="form-control" name="ArtDeptID">
                  <option value disabled selected>--Select--</option>
                <?php
                  include 'open_connection.php';
                  $query2 = "SELECT * FROM artdept ";
                  $result2 = mysqli_query($conn,$query2);
                  while($res2=mysqli_fetch_array($result2)){
                  ?>
                    <option value="<?php echo $res2['ArtDeptID']?>"><?php echo $res2['ArtDeptID'];  echo " "; echo $res2['ArtDeptName'];  ?></option>
                <?php
                }
                ?>
              </select>
            </div>

              </div>
              <!-- <div class = "form-group">
                <label for="ArtistID">Artist ID</label>
                <input type = "number" class = "form-control" name="ArtistID" min=1>
              </div> -->

              <div class="form-group">
                <label for="ArtistID">Artist ID</label>
                <select class="form-control" name="ArtistID">
                  <option value disabled selected>--Select--</option>
                  <?php
                  include 'open_connection.php';
                  $query3 = "SELECT * FROM artist";
                  $result3 = mysqli_query($conn,$query3);
                  while($res3=mysqli_fetch_array($result3)){
                  ?>
                  <option value="<?php echo $res3['ArtistID']?>"><?php echo $res3['ArtistID']; echo " "; echo $res3['ArtistName']; ?></option>
                  <?php
                }
                ?>
                </select>
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
            <table align="center">
              <tr>
                <td align="center" width="100">
            <div class="d-grid gap-2 col-6 mx-auto"  >
               <input type="submit" name="submit" id="insert" value="Submit" class="btn btn-success" />
             </td>
             <td align="center" width="100">
            <div class= "d-grid gap-2 col-6 mx-auto " name="display"  >
              <h5><a href="art_display.php"><input type="button" class="btn btn-primary" value="Display"></a></h5>
            </div>
          </td>
            </tr>
          </table>
          </div>
        </form>

      </div>
    </div>
  </div>
</body>
</html>

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

</script>
