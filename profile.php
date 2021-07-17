<?php
session_start();
?>
<html>
<head>
<title>My Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    img{
        height:300px;
        border-top-left-radius: 25px;
    }
    
    .head {
        text-align:center;
        letter-spacing:0.5px;font-size:24px;font-weight:lighter
    }
    .header{
text-align:center; letter-spacing:0.5px;font-size:18px;font-weight:lighter
    }
    .card{
    margin-top:40px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    border:solid 1px #17A589;
    border:none;
    border-top-left-radius: 25px;
    border-bottom-right-radius: 25px;
}
.card:hover{
    box-shadow: 0 0 5px 5px #757575;transition:ease .5s;
}
#button{
    width:180px; border-top-left-radius: 25px;color:white;
    border-bottom-right-radius: 25px;background-color:#5C6BC0;font-weight:500;
    border:solid 1px #5C6BC0;

}
    </style>
<body style="background-color:#F5F5F5">

<div class="container">
    <div class="row justify-content-center">
       <div class="col-sm-5">
<div class="card">
<?php
  if(isset($_SESSION['id']))
  {
    require 'includes/data.inc.php';
    $user=$_SESSION['user'];
    $sql="SELECT * FROM detail WHERE user_name='$user'";
    $fet=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($fet))
    {
      $images=$row['image'];     
  echo' <img src="./image/'.$images.' ">';
    }
}
?>

  <div class="card-body">
  <?php
  if(isset($_SESSION['id']))
  {
    require 'includes/data.inc.php';
    $user=$_SESSION['user'];
    $sql="SELECT * FROM detail WHERE user_name='$user'";
    $fet=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($fet))
    {
      $images=$row['image']; 
      $name=$row['name'];
      $phone=$row['phone_number'] ;   
  echo'  <p class="head">'.$_SESSION['user'].'</p><hr>
  <p class="header"><i class="fa fa-envelope-o"></i> &nbsp;'.$_SESSION['email'].'</p>
  <p class="header"><i class="fa fa-mobile" style="font-size:20px"></i>&nbsp;'.$phone.'</p>
  <p class="header"><i class="fa fa-user-o"></i>&nbsp;'.$name.'</p>';
    }
}
?>
<hr>
<div class="row justify-content-center">
<a href="changepic.php"><button type="button" class="btn btn-dark" id="button">Change</button></a>
</div><br>
  </div>
</div>
<br>
</div></div></div><br>
</body>
</html>
