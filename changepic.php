<?php
session_start();
?>
<!DOCTYPE html>
<html  lang="en">
<head>
<title>change Photo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
     .card{
    margin-top:100px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    border:solid 1px #17A589;
    border:none;
    border-top-left-radius: 25px;
    border-bottom-right-radius: 25px;
}
.card:hover{
    box-shadow: 0 0 5px 5px #757575;transition:ease .5s;
}
.card-header{
      background-color:#B0BEC5;
      text-align:center;
      font-weight:bold;
      color:black;font-size:19px;font-family:sans-serif;
  }
  #button{
    width:90px;background-color:#B0BEC5;color:black;font-weight:bold;border:solid 1px #B0BEC5;
  }
    </style>
</head>
<body>
<div class="container">
<form action="changepic.php" method="POST" enctype="multipart/form-data">
    <div class="row justify-content-center">
    <div class="col-sm-6">
            <div class="card">
            <div class="card-header" style="border-top-left-radius: 25px;">Change Photo</div>
            <div class="card-body">
            <label>Change Image:</label><br>
                <input type="file" class="form-control" placeholder=" Image"  name="files" style="height:45px" required> <br>
                <button type="submit" class="btn btn-secondary" name="submit" id="button">Upload</button>
            </div>
            </div>
      
</form>

<?php
if(isset($_POST['submit']))
{
    require "includes/data.inc.php";
$filename=$_FILES['files']['name'];
$filetempname=$_FILES['files']['tmp_name'];
$des="./image/";
move_uploaded_file($filetempname,$des.$filename);
$user=$_SESSION['user'];
$sql="UPDATE detail SET image='$filename' WHERE user_name='$user'";
mysqli_query($conn,$sql);
header("location: ./dash.php");

}

?>


</div>
    </div>
</div>
</body>
</html>
