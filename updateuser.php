<?php
$id=$_GET['id'];
require "includes/data.inc.php";
$sql="select * from detail where id='$id'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run);
?>
<html>
<head>
<title>User Updation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
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
.card-header{
      background-color:#B0BEC5;
      text-align:center;
      font-weight:bold;
      color:black;font-size:19px;font-family:sans-serif;
  }
  #button{
    width:90px;background-color:#B0BEC5;color:black;font-weight:bold;border:solid 1px #B0BEC5;
  }
  #button1{
    width:90px;background-color:#E57373;color:black;font-weight:bold;border:solid 1px #E57373;
  }
  </style>
</head>
<body style="background-color:#F5F5F5">

<main class="sign-form">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-10">
          <div class="card">
            <div class="card-header" style="border-top-left-radius: 25px;">UPDATE USER</div>
              <div class="card-body"><br>
  <?php
    if(isset($_GET['error']))
        {
          if($_GET['error']=="emptyfeilds")
            {
                echo '<div class="alert alert-danger" role="alert">
                <a href="#" class="alert-link">Empty Fields!</a>
                  </div>
                  ';
             }
            else if($_GET['error']=="invalidemail")
             {
               echo '<div class="alert alert-danger" role="alert">
               <a href="#" class="alert-link">Invalid Email !</a>
                 </div>';
             }
            else if($_GET['error']=="invalidusername")
             {
               echo '<div class="alert alert-danger" role="alert">
               <a href="#" class="alert-link">Invalid User Name !</a>
                 </div>';
             }
            else if($_GET['error']=="usernametaken")
             {
               echo '<div class="alert alert-danger" role="alert">
               <a href="#" class="alert-link">User Name Taken !</a>
                 </div>';
             }
             else if($_GET['error']=="paswordnotmatch")
             {
                echo '<div class="alert alert-danger" role="alert">
                <a href="#" class="alert-link">Password Not Match !</a>
                  </div>';
             }
            else if($_GET['error']=="success")
            {
              echo'<script>
      swal({
        title: "Are you sure?",
        text: "Once Submitted Data Cannot Be changed!",
        icon: "warning",
        button: true,
        dangerMode: false,
      })
        .then((willDelete) => {
        if (willDelete) {
          swal("Data Entered Successfully", {
            icon: "success",
          }).then(function (result) {
            if (true) {
              window.location = "login.php";
            }
          });
        }});
    </script>';
}
}
?>

<form action="includes/updateuser.inc.php"  method="POST" enctype="multipart/form-data">
<input type="number" value="<?php echo $row['id']?>" name="id" hidden>
<input type="text" class="form-control" placeholder="Full Name"  name="user" value="<?php echo $row['user_name'] ?>" hidden>                                   
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>User Name:</label>
    <input  type="text" class="form-control"   placeholder="Enter User-Name" value="<?php echo $row['user_name'] ?>" disabled> 
</div>
</div>
</div>


    <div class="row">
<div class="col-sm-6">
<div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo $row['name'] ?>">
  </div>
</div>
<div class="col-sm-6">
<div class="form-group">
    <label>Nationality:</label>
    <input type="text" class="form-control" placeholder=" Nationality"  name="nation" value="<?php echo $row['nation'] ?>">          
  </div>
</div>
</div>
    

<div class="row">
<div class="col-sm-6">
<div class="form-group">
    <label>E-mail:</label>
    <input type="email" class="form-control" placeholder="Enter Valid Email-Id"  name="email" value="<?php echo $row['email'] ?>">     
  </div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Phone:</label>
    <input type="number" class="form-control" placeholder="Enter Phone No."  name="phone" value="<?php echo $row['phone_number'] ?>">                 
  </div>
</div>
</div>


<div class="row">
<div class="col-sm-6">
<div class="form-group">
    <label>D.O.B:</label>
    <input type="date" class="form-control" placeholder="Enter date of birth"  name="date" value="<?php echo $row['DOB'] ?>">             
  </div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Gender:</label>
    <select class="form-control" name="gender" value="<?php echo $row['gender'] ?>" >                   
        <option>Male</option>
        <option>Female</option>   
    </select>   
  </div>
</div>
</div>
                  


                   
<br>
  <div class="d-flex justify-content-left">
                      <input type="submit" value="update" class="btn btn-secondary" name="submituser" id="button">&nbsp;&nbsp;&nbsp;
                   
  </div><br>
 </form>
</div>
</div>
</div>
</div><br><br>
</div>
</main>


</body>
</html>